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
}

/**
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
  // Generate unique UTM code
  $utm_code = unw_generate_utm_code($code_format);

  if (!$utm_code) {
    return new WP_Error(
      'code_generation_failed',
      'No se pudo generar el código UTM.',
      ['status' => 500]
    );
  }

  $post_data = [
    'post_type' => UNW_UTM_POST_TYPE,
    'post_status' => 'publish',
    'post_title' => $utm_code . ' - ' . $title,
    // 'post_content' => '',
    'post_author' => 0,
    'meta_input' => [
      'utm_url' => $content,
      'code_format' => $code_format,
      'utm_code' => $utm_code,
      'location_href' => $url, // Store full URL in content/description
    ],
  ];

  $post_id = wp_insert_post($post_data, true);

  if (is_wp_error($post_id)) {
    // Delete UTM code from cache
    delete_utm_transients();

    return new WP_Error(
      'post_creation_failed',
      'No se pudo crear el post UTM: ' . $post_id->get_error_message(),
      ['status' => 500]
    );
  }

  return [
    'utm_id' => $post_id,
    'utm_code' => $utm_code,
  ];
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
