<?php

// Prevent direct access
if (!defined('ABSPATH')) {
  exit;
}

// UTM Code Formats
define('UNW_UTM_FORMAT_PAUTA', 'UNWP');
define('UNW_UTM_FORMAT_ORGANICO', 'UNWO');

// UTM Code Configuration
define('UNW_UTM_CODE_PADDING', 5);
define('UNW_UTM_POST_TYPE', 'utm');
define('UNW_UTM_CACHE_KEY_PREFIX', 'unw_utm_last_code_');

function register_cpt_utm()
{
  $labels = array(
    'name'               => 'UTMs',
    'singular_name'      => 'UTM',
    'menu_name'          => 'UTMs',
    'name_admin_bar'     => 'UTM',
    'add_new'            => 'Añadir nuevo',
    'add_new_item'       => 'Añadir nuevo UTM',
    'new_item'           => 'Nuevo UTM',
    'edit_item'          => 'Editar UTM',
    'view_item'          => 'Ver UTM',
    'all_items'          => 'Todos los UTMs',
    'search_items'       => 'Buscar UTMs',
    'not_found'          => 'No se encontraron UTMs.',
    'not_found_in_trash' => 'No hay UTMs en la papelera.',
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'exclude_from_search' => true,
    'menu_icon'          => 'dashicons-share-alt', // 🔗 Icono de "link" para UTMs
    'has_archive'        => false,
    'show_in_rest'       => true, // Gutenberg + REST API
    'rewrite'            => array('slug' => UNW_UTM_POST_TYPE),
    'supports'           => array('title'),
  );

  register_post_type(UNW_UTM_POST_TYPE, $args);
}
add_action('init', 'register_cpt_utm');

function delete_utm_transients()
{
  delete_transient(UNW_UTM_CACHE_KEY_PREFIX . UNW_UTM_FORMAT_PAUTA);
  delete_transient(UNW_UTM_CACHE_KEY_PREFIX . UNW_UTM_FORMAT_ORGANICO);

  // Log opcional para debugging
  if (defined('WP_DEBUG') && WP_DEBUG) {
    error_log('UNW - UTM WhatsApp: Cache de UTM limpiada');
  }
}

// Hook to detect when a post is deleted
add_action('before_delete_post', 'unw_utm_clear_cache_on_delete', 10, 2);

function unw_utm_clear_cache_on_delete($post_id, $post)
{
  // Check if it's our CPT
  if ($post->post_type !== UNW_UTM_POST_TYPE) {
    return;
  }

  if (!is_admin()) {
    return;
  }

  // Verify that it's not an automatic action (like autosave, revision, etc)
  if (wp_is_post_autosave($post_id) || wp_is_post_revision($post_id)) {
    return;
  }

  // Verify that there is an active user (manual action)
  if (!function_exists('wp_get_current_user')) {
    return;
  }

  $current_user = wp_get_current_user();
  if (!$current_user->ID) {
    return;
  }

  delete_utm_transients();
}

// Hook to detect when a post is created or updated
add_action('transition_post_status', 'unw_utm_clear_cache_on_create', 10, 3);

function unw_utm_clear_cache_on_create($new_status, $old_status, $post)
{
  // Check if it's our CPT
  if ($post->post_type !== UNW_UTM_POST_TYPE) {
    return;
  }

  if (!is_admin()) {
    return;
  }

  // Verify that it's not an automatic action
  if (wp_is_post_autosave($post->ID) || wp_is_post_revision($post->ID)) {
    return;
  }

  // Verify that there is an active user (manual action)
  if (!function_exists('wp_get_current_user')) {
    return;
  }

  $current_user = wp_get_current_user();
  if (!$current_user->ID) {
    return;
  }

  // Solo ejecutar cuando se crea un nuevo post (draft/auto-draft -> publish)
  // o cuando se publica uno existente
  if ($new_status === 'publish' && $old_status !== 'publish' && $post->post_author != 0) {
    // Post nuevo publicado
    delete_utm_transients();
  } elseif ($new_status === 'publish' && $old_status === 'publish') {
    // Post existente actualizado (opcional, dependiendo de tus necesidades)
    delete_utm_transients();
  } elseif ($new_status === 'trash' && $old_status === 'publish') {
    // Post eliminado
    delete_utm_transients();
  }
}

/**
 * Determine code format based on URL
 *
 * UNW_UTM_FORMAT_PAUTA = URL with parameters (PAUTA)
 * UNW_UTM_FORMAT_ORGANICO = URL without parameters (ORGÁNICO)
 *
 * @param string $content The URL with UTM parameters
 * @return string
 */
function unw_determine_code_format($content)
{
  $parsed_url = parse_url($content);

  return !empty($parsed_url['query']) ? UNW_UTM_FORMAT_PAUTA : UNW_UTM_FORMAT_ORGANICO;
}

/**
 * Find existing UTM post by URL and code format
 *
 * Optimized with direct DB query to avoid loading all posts
 *
 * @param string $content The URL with UTM parameters
 * @param string $code_format
 * @return array|null ['post_id' => int, 'utm_code' => string] or null if not found
 */
function unw_find_utm_by_content($content, $code_format)
{
  global $wpdb;

  $query = $wpdb->prepare("
    SELECT p.ID, pm_code.meta_value as utm_code
    FROM {$wpdb->posts} p
    INNER JOIN {$wpdb->postmeta} pm_format ON p.ID = pm_format.post_id AND pm_format.meta_key = 'code_format'
    INNER JOIN {$wpdb->postmeta} pm_url ON p.ID = pm_url.post_id AND pm_url.meta_key = 'utm_url'
    INNER JOIN {$wpdb->postmeta} pm_code ON p.ID = pm_code.post_id AND pm_code.meta_key = 'utm_code'
    WHERE p.post_type = %s
    AND p.post_status = 'publish'
    AND pm_url.meta_value = %s
    AND pm_format.meta_value = %s
    LIMIT 1
  ", UNW_UTM_POST_TYPE, $content, $code_format);



  $result = $wpdb->get_row($query);

  return $result ? [
    'post_id' => (int) $result->ID,
    'utm_code' => $result->utm_code
  ] : null;
}/**
 * Create new UTM post with auto-generated code
 *
 * @param string $title The title to associate with the UTM
 * @param string $content The URL with UTM parameters
 * @param string $url The full URL
 * @param string $code_format
 * @return array|WP_Error ['utm_id', 'utm_code'] or WP_Error
 */
function unw_create_utm($title, $content, $url, $code_format)
{
  global $wpdb;

  // PASO 1: Verificar si ya existe (lectura rápida sin locks)
  // Esto maneja el 99% de casos donde el UTM ya fue creado
  $code_exist = unw_find_utm_by_content($content, $code_format);

  if ($code_exist) {
    return [
      'utm_id' => $code_exist['post_id'],
      'utm_code' => $code_exist['utm_code'],
    ];
  }

  // PASO 2: Verificar en tabla auxiliar (con UNIQUE INDEX)
  $temp_table = $wpdb->prefix . 'utm_unique_temp';
  $table_exists = $wpdb->get_var("SHOW TABLES LIKE '{$temp_table}'") === $temp_table;

  if ($table_exists) {
    $existing_in_temp = $wpdb->get_row($wpdb->prepare("
      SELECT post_id FROM {$temp_table}
      WHERE utm_url = %s AND code_format = %s
      LIMIT 1
    ", $content, $code_format));

    if ($existing_in_temp) {
      $existing_code = get_post_meta($existing_in_temp->post_id, 'utm_code', true);

      return [
        'utm_id' => (int) $existing_in_temp->post_id,
        'utm_code' => $existing_code,
      ];
    }
  }

  // PASO 3: OPTIMISTIC LOCKING - Intentar crear usando UNIQUE INDEX como lock
  // Esta es la estrategia clave para 800+ usuarios simultáneos sin esperas

  if (!$table_exists) {
    return new WP_Error(
      'table_not_exists',
      'La tabla auxiliar de prevención de duplicados no existe. Créala desde UTMs → Configuración.',
      ['status' => 500]
    );
  }

  // Generar código UTM ANTES de intentar reservar el slot
  $utm_code = unw_generate_utm_code($code_format);

  if (!$utm_code) {
    return new WP_Error(
      'code_generation_failed',
      'No se pudo generar el código UTM.',
      ['status' => 500]
    );
  }

  // ESTRATEGIA: Insertar en tabla auxiliar con post_id temporal = 0
  // El UNIQUE INDEX (utm_url, code_format) garantiza que solo 1 usuario tenga éxito
  // Los otros 799 usuarios recibirán error de duplicate key
  $max_retries = 10;  // 10 intentos = 500ms máximo de espera
  $retry_count = 0;
  $reservation_success = false;

  while ($retry_count < $max_retries && !$reservation_success) {
    $retry_count++;

    // Intentar reservar el slot en tabla auxiliar
    $insert_result = $wpdb->query($wpdb->prepare("
      INSERT IGNORE INTO {$temp_table} (post_id, utm_url, code_format)
      VALUES (0, %s, %s)
    ", $content, $code_format));

    if ($insert_result === 1) {
      // ✅ Éxito: Este usuario ganó la carrera
      $reservation_success = true;
      break;
    }

    // ❌ Otro usuario insertó primero o la fila ya existe
    // Esperar con backoff exponencial y verificar si el post ya fue creado
    $wait_time = 50000 * pow(2, $retry_count - 1);  // 50ms, 100ms, 200ms, 400ms...
    usleep(min($wait_time, 500000));  // Máximo 500ms por intento

    // Verificar si otro usuario completó la creación
    $existing_in_temp = $wpdb->get_row($wpdb->prepare("
      SELECT post_id FROM {$temp_table}
      WHERE utm_url = %s AND code_format = %s AND post_id > 0
      LIMIT 1
    ", $content, $code_format));

    if ($existing_in_temp) {
      // Otro usuario ya completó la creación del post
      $existing_code = get_post_meta($existing_in_temp->post_id, 'utm_code', true);

      return [
        'utm_id' => (int) $existing_in_temp->post_id,
        'utm_code' => $existing_code,
      ];
    }
  }

  if (!$reservation_success) {
    // Después de 10 intentos, verificar una última vez
    $existing_in_temp = $wpdb->get_row($wpdb->prepare("
      SELECT post_id FROM {$temp_table}
      WHERE utm_url = %s AND code_format = %s AND post_id > 0
      LIMIT 1
    ", $content, $code_format));

    if ($existing_in_temp) {
      $existing_code = get_post_meta($existing_in_temp->post_id, 'utm_code', true);

      return [
        'utm_id' => (int) $existing_in_temp->post_id,
        'utm_code' => $existing_code,
      ];
    }

    // FALLBACK: Verificar si Usuario 1 falló y borró el registro
    // Si no hay registro, significa que el ganador original falló
    // Intentar ser el nuevo ganador
    $exists_any = $wpdb->get_var($wpdb->prepare("
      SELECT COUNT(*) FROM {$temp_table}
      WHERE utm_url = %s AND code_format = %s
      LIMIT 1
    ", $content, $code_format));

    if ($exists_any == 0) {
      // El registro fue borrado, Usuario 1 falló
      // Dar una oportunidad más como nuevo ganador
      $retry_insert = $wpdb->query($wpdb->prepare("
        INSERT IGNORE INTO {$temp_table} (post_id, utm_url, code_format)
        VALUES (0, %s, %s)
      ", $content, $code_format));

      if ($retry_insert === 1) {
        // ¡Ahora SOY el ganador! Continuar con creación del post
        $reservation_success = true;
        // El código continúa al PASO 4 automáticamente
      }
    }

    // Si aún no hay éxito, retornar error
    if (!$reservation_success) {
      return new WP_Error(
        'reservation_failed',
        'No se pudo reservar el slot para crear UTM.',
        ['status' => 503]
      );
    }
  }

  // PASO 4: Este usuario ganó la reserva → Crear el post
  try {
    $post_data = [
      'post_type' => UNW_UTM_POST_TYPE,
      'post_status' => 'publish',
      'post_title' => $utm_code . ' - ' . $title,
      'post_author' => 0,
      'meta_input' => [
        'utm_url' => $content,
        'code_format' => $code_format,
        'utm_code' => $utm_code,
        'location_href' => $url,
      ],
    ];

    $post_id = wp_insert_post($post_data, true);

    if (is_wp_error($post_id)) {
      // Limpiar la reserva fallida
      $wpdb->delete(
        $temp_table,
        ['utm_url' => $content, 'code_format' => $code_format],
        ['%s', '%s']
      );

      delete_utm_transients();

      return new WP_Error(
        'post_creation_failed',
        'No se pudo crear el post UTM: ' . $post_id->get_error_message(),
        ['status' => 500]
      );
    }

    // PASO 5: Actualizar la tabla auxiliar con el post_id real
    $wpdb->update(
      $temp_table,
      ['post_id' => $post_id],
      ['utm_url' => $content, 'code_format' => $code_format],
      ['%d'],
      ['%s', '%s']
    );

    return [
      'utm_id' => $post_id,
      'utm_code' => $utm_code,
    ];

  } catch (Exception $e) {
    // Limpiar la reserva en caso de error
    $wpdb->delete(
      $temp_table,
      ['utm_url' => $content, 'code_format' => $code_format],
      ['%s', '%s']
    );

    return new WP_Error(
      'utm_creation_exception',
      'Error al crear UTM: ' . $e->getMessage(),
      ['status' => 500]
    );
  }
}

/**
 * Generate unique UTM code
 *
 * Reuses the same logic as the UTM Code Generator plugin
 * Optimized with transient cache to reduce DB queries
 *
 * @param string $format
 * @return string|false Generated code like 'UNWP00001' or false on failure
 */
function unw_generate_utm_code($format)
{
  $valid_formats = [UNW_UTM_FORMAT_PAUTA, UNW_UTM_FORMAT_ORGANICO];

  if (!in_array($format, $valid_formats, true)) {
    return false;
  }

  global $wpdb;

  // Cache key for this format's last code
  $cache_key = UNW_UTM_CACHE_KEY_PREFIX . $format;

  // Try to get from cache first
  $last_code = get_transient($cache_key);

  // If not in cache, query database
  if (false === $last_code) {
    $last_code = $wpdb->get_var($wpdb->prepare("
            SELECT meta_value
            FROM {$wpdb->postmeta} pm
            INNER JOIN {$wpdb->posts} p ON pm.post_id = p.ID
            WHERE pm.meta_key = 'utm_code'
            AND pm.meta_value LIKE %s
            AND p.post_type = %s
            AND p.post_status != 'trash'
            ORDER BY pm.meta_value DESC
            LIMIT 1
        ", $format . '%', UNW_UTM_POST_TYPE));

    // Cache for 1 hour (or until manually cleared)
    if ($last_code) {
      set_transient($cache_key, $last_code, HOUR_IN_SECONDS);
    }
  }

  // Calculate next number
  $number = 1;
  if ($last_code) {
    $current_number = intval(substr($last_code, strlen($format)));
    $number = $current_number + 1;
  }

  // Generate code with 5-digit zero-padding
  $new_code = $format . str_pad($number, UNW_UTM_CODE_PADDING, '0', STR_PAD_LEFT);

  // Update cache with new code
  set_transient($cache_key, $new_code, HOUR_IN_SECONDS);

  return $new_code;
}

/**
 * Get current URL and prepare data for UTM creation
 *
 * This function extracts the current URL and formats it following the same logic
 * as app/functions/utm-whatsapp.js and app/utils/url-parse.js
 *
 * @return array ['title' => string, 'content' => string, 'url' => string]
 */
function unw_get_current_url()
{
  // Get the full current URL
  $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
  $host = $_SERVER['HTTP_HOST'] ?? '';
  $request_uri = $_SERVER['REQUEST_URI'] ?? '';
  $full_url = $protocol . $host . $request_uri;

  // Parse the URL
  $parsed_url = parse_url($full_url);
  $scheme = $parsed_url['scheme'] ?? 'http';
  $host = $parsed_url['host'] ?? '';
  $path = $parsed_url['path'] ?? '';
  $query_string = $parsed_url['query'] ?? '';

  // Build base URL (origin + pathname) for title
  $base_url = $scheme . '://' . $host . $path;

  // Parse query parameters
  parse_str($query_string, $query_params);

  // Define excluded parameters (same as EXCLUDE_URL_PARAMS in utm-whatsapp.js)
  $exclude_params = [
    // El parámetro se usa para busquedas
    's',

    // El parámetro se usa para navegar por tabs en las carreras y demás
    'tab'
  ];

  // Define UTM parameters (same as UTM_QUERY_PARAMS in utm-whatsapp.js)
  $utm_params = [
    'utm_source',
    'utm_medium',
    'utm_campaign',
    'utm_term',
    'utm_content'
  ];

  // Remove excluded parameters
  foreach ($exclude_params as $param) {
    unset($query_params[$param]);
  }

  // Extract only UTM parameters for content URL (following makeUTMContent logic)
  $utm_only_params = [];
  foreach ($utm_params as $param) {
    if (isset($query_params[$param]) && $query_params[$param] !== '') {
      $utm_only_params[$param] = $query_params[$param];
    }
  }

  // Build content URL with only UTM parameters (RFC 3986 encoding)
  $content_url = $base_url;
  if (!empty($utm_only_params)) {
    $rfc3986_params = [];
    foreach ($utm_only_params as $key => $value) {
      $rfc3986_params[] = rawurlencode($key) . '=' . rawurlencode($value);
    }
    $content_url .= '?' . implode('&', $rfc3986_params);
  }

  return [
    'title' => $base_url,
    'content' => $content_url,
    'url' => $full_url,
  ];
}

/**
 * Get WhatsApp template url from config
 *
 * @param array $utms_whatsapp The UTMs WhatsApp field from ACF
 * @param int $page_id The current page ID
 * @return string|false Template string or false if not found
 */
function unw_get_whatsapp_template($utms_whatsapp, $page_id)
{
  if (!$utms_whatsapp || empty($utms_whatsapp['code_message_generic'])) {
    error_log('UTM WhatsApp: code_message_generic field not found in ACF options');
    return '';
  }

  // Get the template by default
  $template = $utms_whatsapp['code_message_generic'];

  // Search if the post ID is in the list of custom UTMs
  if (!empty($utms_whatsapp['utms']) && $page_id) {
    foreach ($utms_whatsapp['utms'] as $utm_item) {
      if (strval($utm_item['page']) === strval($page_id) && !empty($utm_item['message'])) {
        $template = $utm_item['message'];
        break;
      }
    }
  }

  return $template;
}

/**
 * Get UTMs WhatsApp configuration
 *
 * @param int $page_id The current page ID
 * @return array ['active' => bool, 'template' => string]
 */
function unw_get_utms_whatsapp($page_id)
{
  $field = get_field('utms_whatsapp', 'options');

  if (!$field || $field['active'] !== true) {
    return [
      'active' => false,
      'template' => '',
    ];
  }

  return [
    'active' => true,
    'template' => unw_get_whatsapp_template($field, $page_id),
  ];
}

/**
 * Generate WhatsApp link from current URL
 *
 */
function unw_generate_whatsapp_link($data,  $utms_whatsapp)
{
  $title = $data['title'];
  $content = $data['content'];
  $url = $data['url'];

  // Determine code format based on URL parameters
  $code_format = unw_determine_code_format($content);

  // Try to find existing UTM
  $utm_data = unw_find_utm_by_content($content, $code_format);

  // Determine UTM code - either from existing or create new
  if ($utm_data && !empty($utm_data['utm_code'])) {
    $utm_code = $utm_data['utm_code'];
  } else {
    // Create new UTM
    $result = unw_create_utm($title, $content, $url, $code_format);

    if (is_wp_error($result)) {
      return false;
    }

    $utm_code = $result['utm_code'];
  }

  // Replace placeholder with actual UTM code
  $whatsapp_link = str_replace('{utm_code}', $utm_code, $utms_whatsapp['template']);

  return $whatsapp_link;
}

/**
 * API handler for frontend UTM creation
 *
 */
add_action('wp_ajax_create_utm_whatsapp', 'unw_ajax_create_utm_whatsapp');
add_action('wp_ajax_nopriv_create_utm_whatsapp', 'unw_ajax_create_utm_whatsapp');

function unw_ajax_create_utm_whatsapp()
{
  // Verify nonce
  check_ajax_referer('utm_whatsapp_nonce', 'nonce');

  // Collect and sanitize inputs
  $page = isset($_POST['page']) ? intval($_POST['page']) : 0;
  $title = isset($_POST['title']) ? trim($_POST['title']) : '';
  $content = isset($_POST['content']) ? trim($_POST['content']) : '';
  $url = isset($_POST['url']) ? trim($_POST['url']) : '';

  if (
    $page < 0 ||
    !$title || !filter_var($title, FILTER_VALIDATE_URL) ||
    !$content || !filter_var($content, FILTER_VALIDATE_URL) ||
    !$url || !filter_var($url, FILTER_VALIDATE_URL)
  ) {
    wp_send_json_error([
      'message' => 'Datos inválidos proporcionados. Verifica la página, título y URLs.',
    ], 400);
  }

  // Determine code format based on URL parameters
  $code_format = unw_determine_code_format($content);

  // Try to find existing UTM
  $utm_data = unw_find_utm_by_content($content, $code_format);

  // Determine UTM code - either from existing or create new
  if ($utm_data && !empty($utm_data['utm_code'])) {
    $utm_code = $utm_data['utm_code'];
    $action = 'found';
  } else {
    // Create new UTM
    $result = unw_create_utm($title, $content, $url, $code_format);

    if (is_wp_error($result)) {
      wp_send_json_error([
        'message' => $result->get_error_message(),
      ], 500);
    }

    $utm_code = $result['utm_code'];
    $action = 'created';
  }

  // Get template for WhatsApp
  $utm_result = unw_get_utms_whatsapp($page);

  // Replace placeholder with actual UTM code
  $whatsapp_link = str_replace('{utm_code}', $utm_code, $utm_result['template']);

  wp_send_json_success([
    'action' => $action,
    'utm_whatsapp_link' => $whatsapp_link,
  ]);
}

/**
 * Add export to Excel button with filters in UTM post type admin screen
 */
add_action('manage_posts_extra_tablenav', 'unw_utm_add_export_button');

function unw_utm_add_export_button($which)
{
  global $typenow;

  // Only show on UTM post type and on top position
  if ($typenow !== UNW_UTM_POST_TYPE || $which !== 'top') {
    return;
  }

  // Get available years from UTM posts
  global $wpdb;
  $years = $wpdb->get_col("
    SELECT DISTINCT YEAR(post_date) as year
    FROM {$wpdb->posts}
    WHERE post_type = '" . UNW_UTM_POST_TYPE . "'
    AND post_status = 'publish'
    ORDER BY year DESC
  ");

  $current_year = isset($_GET['export_year']) ? intval($_GET['export_year']) : '';
  $current_month = isset($_GET['export_month']) ? intval($_GET['export_month']) : '';
  $current_format = isset($_GET['filter_code_format']) ? sanitize_text_field($_GET['filter_code_format']) : '';
?>

<!-- Filtros de UTM - UI Mejorada -->
<div class="alignleft actions" style="margin-bottom: 10px;">
  <div style="display: inline-flex; gap: 10px; align-items: center; background: #f0f0f1; padding: 8px 12px; border-radius: 4px; flex-wrap: wrap;">

    <!-- Formato de Código -->
    <div style="display: flex; align-items: center; gap: 6px;">
      <label for="filter_code_format" style="font-weight: 600; color: #1d2327; margin: 0; font-size: 13px;">Formato:</label>
      <select name="filter_code_format" id="filter_code_format" style="min-width: 140px;">
        <option value="">Todos</option>
        <option value="<?php echo esc_attr(UNW_UTM_FORMAT_PAUTA); ?>" <?php selected($current_format, UNW_UTM_FORMAT_PAUTA); ?>>
          PAUTA (<?php echo UNW_UTM_FORMAT_PAUTA; ?>)
        </option>
        <option value="<?php echo esc_attr(UNW_UTM_FORMAT_ORGANICO); ?>" <?php selected($current_format, UNW_UTM_FORMAT_ORGANICO); ?>>
          ORGÁNICO (<?php echo UNW_UTM_FORMAT_ORGANICO; ?>)
        </option>
      </select>
    </div>

    <!-- Año -->
    <div style="display: flex; align-items: center; gap: 6px;">
      <label for="export_year" style="font-weight: 600; color: #1d2327; margin: 0; font-size: 13px;">Año:</label>
      <select name="export_year" id="export_year" style="min-width: 90px;">
        <option value="">Todos</option>
        <?php foreach ($years as $year) : ?>
        <option value="<?php echo esc_attr($year); ?>" <?php selected($current_year, $year); ?>>
          <?php echo esc_html($year); ?>
        </option>
        <?php endforeach; ?>
      </select>
    </div>

    <!-- Mes -->
    <div style="display: flex; align-items: center; gap: 6px;">
      <label for="export_month" style="font-weight: 600; color: #1d2327; margin: 0; font-size: 13px;">Mes:</label>
      <select name="export_month" id="export_month" style="min-width: 110px;">
        <option value="">Todos</option>
        <option value="1" <?php selected($current_month, 1); ?>>Enero</option>
        <option value="2" <?php selected($current_month, 2); ?>>Febrero</option>
        <option value="3" <?php selected($current_month, 3); ?>>Marzo</option>
        <option value="4" <?php selected($current_month, 4); ?>>Abril</option>
        <option value="5" <?php selected($current_month, 5); ?>>Mayo</option>
        <option value="6" <?php selected($current_month, 6); ?>>Junio</option>
        <option value="7" <?php selected($current_month, 7); ?>>Julio</option>
        <option value="8" <?php selected($current_month, 8); ?>>Agosto</option>
        <option value="9" <?php selected($current_month, 9); ?>>Septiembre</option>
        <option value="10" <?php selected($current_month, 10); ?>>Octubre</option>
        <option value="11" <?php selected($current_month, 11); ?>>Noviembre</option>
        <option value="12" <?php selected($current_month, 12); ?>>Diciembre</option>
      </select>
    </div>

    <!-- Botones -->
    <div style="display: inline-flex; gap: 6px; margin-left: 8px;">
      <button type="submit" class="button" style="height: 32px;">
        <span class="dashicons dashicons-filter" style="margin-top: 4px;"></span>
        Filtrar
      </button>
      <?php if ($current_year || $current_month || $current_format): ?>
      <a href="<?php echo admin_url('edit.php?post_type=' . UNW_UTM_POST_TYPE); ?>" class="button" style="height: 32px; line-height: 30px;">
        <span class="dashicons dashicons-image-rotate" style="margin-top: 4px;"></span>
        Limpiar
      </a>
      <?php endif; ?>
      <button type="button" id="export_utms_btn" class="button button-primary" style="height: 32px;">
        <span class="dashicons dashicons-download" style="margin-top: 4px;"></span>
        Exportar
      </button>
    </div>
  </div>
</div>

<!-- Ocultar filtro de Rank Math -->
<style>
  /* Ocultar el dropdown de Rank Math en la lista de UTMs */
  .post-type-unw_utm #posts-filter .tablenav.top .actions:not(.alignleft) select[name*="rank"] {
    display: none !important;
  }
</style>

<script>
jQuery(document).ready(function($) {
  // Validación: Si se selecciona mes, año es obligatorio
  $('#export_month').on('change', function() {
    var month = $(this).val();
    var $yearSelect = $('#export_year');

    if (month && !$yearSelect.val()) {
      // Si hay mes seleccionado pero no año, marcar año como requerido
      $yearSelect.css('border', '2px solid #d63638');
      $yearSelect.focus();
    } else {
      $yearSelect.css('border', '');
    }
  });

  // Limpiar el borde rojo cuando se selecciona un año
  $('#export_year').on('change', function() {
    $(this).css('border', '');
  });

  $('#export_utms_btn').on('click', function(e) {
    e.preventDefault();

    var year = $('#export_year').val();
    var month = $('#export_month').val();

    // Validación: Si hay mes seleccionado, año es obligatorio
    if (month && !year) {
      $('#export_year').css('border', '2px solid #d63638');
      $('#export_year').focus();
      alert('Por favor selecciona un año cuando filtres por mes.');
      return;
    }

    var exportUrl = '<?php echo admin_url('admin-post.php'); ?>';
    var params = new URLSearchParams({
      action: 'export_utms_excel',
      _wpnonce: '<?php echo wp_create_nonce('export_utms_excel'); ?>'
    });

    if (year) {
      params.append('export_year', year);
    }

    if (month) {
      params.append('export_month', month);
    }

    window.location.href = exportUrl + '?' + params.toString();
  });
});
</script>
<?php
}

/**
 * Handle Excel export with year/month filters
 */
add_action('admin_post_export_utms_excel', 'unw_utm_export_to_excel');

function unw_utm_export_to_excel()
{
  // Check user capabilities
  if (!current_user_can('edit_posts')) {
    wp_die('No tienes permisos para exportar UTMs.');
  }

  // Verify nonce
  if (!isset($_GET['_wpnonce']) || !wp_verify_nonce($_GET['_wpnonce'], 'export_utms_excel')) {
    wp_die('Solicitud inválida.');
  }

  // Get filter values
  $filter_year = isset($_GET['export_year']) ? intval($_GET['export_year']) : 0;
  $filter_month = isset($_GET['export_month']) ? intval($_GET['export_month']) : 0;

  // Build query args
  $args = array(
    'post_type' => UNW_UTM_POST_TYPE,
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
  );

  // Apply date filter if year or month is selected
  if ($filter_year || $filter_month) {
    $date_query = array();

    if ($filter_year && $filter_month) {
      // Specific year and month
      $date_query['year'] = $filter_year;
      $date_query['month'] = $filter_month;
    } elseif ($filter_year) {
      // Only year
      $date_query['year'] = $filter_year;
    } elseif ($filter_month) {
      // Only month (current year)
      $date_query['year'] = date('Y');
      $date_query['month'] = $filter_month;
    }

    $args['date_query'] = array($date_query);
  }

  $utms = get_posts($args);

  // Generate filename with filter info
  $filename_parts = array('utms-export');

  if ($filter_year && $filter_month) {
    $month_names = array(
      1 => 'enero',
      2 => 'febrero',
      3 => 'marzo',
      4 => 'abril',
      5 => 'mayo',
      6 => 'junio',
      7 => 'julio',
      8 => 'agosto',
      9 => 'septiembre',
      10 => 'octubre',
      11 => 'noviembre',
      12 => 'diciembre'
    );
    $filename_parts[] = $month_names[$filter_month] . '-' . $filter_year;
  } elseif ($filter_year) {
    $filename_parts[] = 'año-' . $filter_year;
  } elseif ($filter_month) {
    $month_names = array(
      1 => 'enero',
      2 => 'febrero',
      3 => 'marzo',
      4 => 'abril',
      5 => 'mayo',
      6 => 'junio',
      7 => 'julio',
      8 => 'agosto',
      9 => 'septiembre',
      10 => 'octubre',
      11 => 'noviembre',
      12 => 'diciembre'
    );
    $filename_parts[] = $month_names[$filter_month];
  } else {
    $filename_parts[] = 'todos';
  }

  $filename_parts[] = date('Y-m-d-His');
  $filename = implode('-', $filename_parts) . '.csv';

  // Set headers for CSV download
  header('Content-Type: text/csv; charset=utf-8');
  header('Content-Disposition: attachment; filename="' . $filename . '"');
  header('Pragma: no-cache');
  header('Expires: 0');

  // Create output stream
  $output = fopen('php://output', 'w');

  // Add BOM for proper UTF-8 encoding in Excel
  fprintf($output, chr(0xEF) . chr(0xBB) . chr(0xBF));

  // Add header row
  fputcsv($output, array(
    'Título',
    'Código UTM',
    'Formato',
    'URL de UTM',
    'URL Completa',
    'Fecha de Publicación'
  ));

  // Add data rows
  foreach ($utms as $utm) {
    $utm_code = get_field('utm_code', $utm->ID);
    $code_format = get_field('code_format', $utm->ID);
    $utm_url = get_field('utm_url', $utm->ID);
    $location_href = get_field('location_href', $utm->ID);

    // Format code_format value
    $format_label = '';
    if ($code_format === UNW_UTM_FORMAT_PAUTA) {
      $format_label = 'PAUTA';
    } elseif ($code_format === UNW_UTM_FORMAT_ORGANICO) {
      $format_label = 'ORGÁNICO';
    }

    fputcsv($output, array(
      $utm->post_title,
      $utm_code,
      $format_label,
      $utm_url,
      $location_href,
      get_the_date('Y-m-d H:i:s', $utm->ID)
    ));
  }

  fclose($output);
  exit;
}

/**
 * Validate UTM code uniqueness before saving
 * Prevents duplicate UTM codes across all UTM posts
 */
add_filter('acf/validate_value/key=field_68ef1390b2cab', 'unw_validate_unique_utm_code', 10, 4);

function unw_validate_unique_utm_code($valid, $value, $field, $input_name)
{
  // Si ya hay un error, no validar
  if (!$valid) {
    return $valid;
  }

  // Si no hay valor, retornar (el campo es requerido, ACF lo maneja)
  if (empty($value)) {
    return $valid;
  }

  global $wpdb;

  // Obtener el ID del post actual (si existe)
  $post_id = 0;
  if (isset($_POST['post_ID'])) {
    $post_id = intval($_POST['post_ID']);
  } elseif (isset($_POST['post_id'])) {
    $post_id = intval($_POST['post_id']);
  }

  // Buscar si ya existe otro post con el mismo código UTM
  $query = $wpdb->prepare("
    SELECT p.ID, p.post_title
    FROM {$wpdb->posts} p
    INNER JOIN {$wpdb->postmeta} pm
      ON p.ID = pm.post_id
      AND pm.meta_key = 'utm_code'
    WHERE p.post_type = %s
      AND p.post_status != 'trash'
      AND pm.meta_value = %s
      AND p.ID != %d
    LIMIT 1
  ", UNW_UTM_POST_TYPE, $value, $post_id);

  $existing = $wpdb->get_row($query);

  // Si existe otro post con el mismo código, retornar error
  if ($existing) {
    $valid = sprintf(
      'El código UTM "%s" ya está siendo utilizado por "%s" (ID: %d). Por favor, utiliza un código diferente.',
      esc_html($value),
      esc_html($existing->post_title),
      $existing->ID
    );
  }

  return $valid;
}

/**
 * Validate UTM URL + code_format uniqueness before saving
 * Prevents duplicate URLs with the same code_format
 */
add_filter('acf/validate_value/key=field_690a550143d1f', 'unw_validate_unique_utm_url_format', 10, 4);

function unw_validate_unique_utm_url_format($valid, $value, $field, $input_name)
{
  // Si ya hay un error, no validar
  if (!$valid) {
    return $valid;
  }

  // Si no hay valor, retornar (el campo es requerido, ACF lo maneja)
  if (empty($value)) {
    return $valid;
  }

  global $wpdb;

  // Obtener el ID del post actual
  $post_id = 0;
  if (isset($_POST['post_ID'])) {
    $post_id = intval($_POST['post_ID']);
  } elseif (isset($_POST['post_id'])) {
    $post_id = intval($_POST['post_id']);
  }

  // Obtener el code_format del formulario actual
  $current_code_format = '';
  if (isset($_POST['acf']['field_68ef132eb2caa'])) {
    $current_code_format = sanitize_text_field($_POST['acf']['field_68ef132eb2caa']);
  }

  // Si no hay code_format seleccionado, no podemos validar aún
  if (empty($current_code_format)) {
    return $valid;
  }

  // Limpiar la URL para comparación
  $clean_url = trim($value);

  // Buscar si ya existe otro post con la misma URL + code_format
  $query = $wpdb->prepare("
    SELECT p.ID, p.post_title, pm_code.meta_value AS utm_code
    FROM {$wpdb->posts} p
    INNER JOIN {$wpdb->postmeta} pm_url
      ON p.ID = pm_url.post_id
      AND pm_url.meta_key = 'utm_url'
    INNER JOIN {$wpdb->postmeta} pm_format
      ON p.ID = pm_format.post_id
      AND pm_format.meta_key = 'code_format'
    INNER JOIN {$wpdb->postmeta} pm_code
      ON p.ID = pm_code.post_id
      AND pm_code.meta_key = 'utm_code'
    WHERE p.post_type = %s
      AND p.post_status != 'trash'
      AND pm_url.meta_value = %s
      AND pm_format.meta_value = %s
      AND p.ID != %d
    LIMIT 1
  ", UNW_UTM_POST_TYPE, $clean_url, $current_code_format, $post_id);

  $existing = $wpdb->get_row($query);

  // Si existe otro post con la misma URL y formato, es un error
  if ($existing) {
    $format_label = $current_code_format === UNW_UTM_FORMAT_PAUTA ? 'PAUTA' : 'ORGÁNICO';
    $valid = sprintf(
      'Esta URL ya está registrada con el formato "%s" (código: %s) en "%s" (ID: %d). No puedes duplicar la misma URL con el mismo formato.',
      $format_label,
      esc_html($existing->utm_code),
      esc_html($existing->post_title),
      $existing->ID
    );
  }

  return $valid;
}
/**
 * Filter UTMs by code_format in admin list
 */
add_filter('pre_get_posts', 'unw_utm_filter_by_code_format');

function unw_utm_filter_by_code_format($query)
{
  // Only run in admin and for UTM post type main query
  if (!is_admin() || !$query->is_main_query()) {
    return;
  }

  global $pagenow, $typenow;

  // Only on edit.php page for UTM post type
  if ($pagenow !== 'edit.php' || $typenow !== UNW_UTM_POST_TYPE) {
    return;
  }

  // Check if code_format filter is set
  if (isset($_GET['filter_code_format']) && !empty($_GET['filter_code_format'])) {
    $code_format = sanitize_text_field($_GET['filter_code_format']);

    // Validate format
    if (in_array($code_format, [UNW_UTM_FORMAT_PAUTA, UNW_UTM_FORMAT_ORGANICO])) {
      // Add meta query to filter by code_format
      $meta_query = $query->get('meta_query') ?: [];

      $meta_query[] = [
        'key' => 'code_format',
        'value' => $code_format,
        'compare' => '='
      ];

      $query->set('meta_query', $meta_query);
    }
  }
}
