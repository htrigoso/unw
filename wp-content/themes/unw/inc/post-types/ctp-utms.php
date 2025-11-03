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
    'supports'           => array('title', 'editor'),
  );

  register_post_type(UNW_UTM_POST_TYPE, $args);
}
add_action('init', 'register_cpt_utm');

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
 * @return WP_Post|null
 */
function unw_find_utm_by_content($content, $code_format)
{
  global $wpdb;

  $query = $wpdb->prepare("
    SELECT p.ID
    FROM {$wpdb->posts} p
    INNER JOIN {$wpdb->postmeta} pm ON p.ID = pm.post_id
    WHERE p.post_type = %s
    AND p.post_status = 'publish'
    AND p.post_content = %s
    AND pm.meta_key = 'code_format'
    AND pm.meta_value = %s
    LIMIT 1
  ", UNW_UTM_POST_TYPE, trim($content), $code_format);

  $post_id = $wpdb->get_var($query);

  return $post_id ? get_post($post_id) : null;
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
    'post_content' => trim($content),
    'post_author' => 1,
    'meta_input' => [
      'code_format' => $code_format,
      'utm_code' => $utm_code,
      'location_href' => trim($url), // Store full URL in content/description
    ],
  ];

  $post_id = wp_insert_post($post_data, true);

  if (is_wp_error($post_id)) {
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


  // Calculate next number
  $number = 1;
  if ($last_code) {
    $current_number = intval(substr($last_code, strlen($format)));
    $number = $current_number + 1;
  }

  // Generate code
  $new_code = $format . str_pad($number, UNW_UTM_CODE_PADDING, '0', STR_PAD_LEFT);

  return $new_code;
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
      if ($utm_item['page'] === $page_id && !empty($utm_item['message'])) {
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

  if (!$field) {
    return [
      'active' => false,
      'template' => '',
    ];
  }

  return [
    'active' => $field['active'] === true,
    'template' => unw_get_whatsapp_template($field, $page_id),
  ];
}

/**
 * Generate WhatsApp link from template
 *
 * Retrieves the template from ACF Options and replaces {utm_code} placeholder
 *
 * @param string $page_id The page ID to search for
 * @param int $utm_code The UTM code to insert
 * @return string WhatsApp link
 */
function unw_generate_whatsapp_link($page_id, $utm_code )
{
  $result = unw_get_utms_whatsapp($page_id);

  // Replace placeholder with actual UTM code
  $whatsapp_link = str_replace('{utm_code}', $utm_code, $result['template']);

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

  $page = isset($_POST['page']) ? intval($_POST['page']) : 0;
  $title = isset($_POST['title']) ? esc_attr($_POST['title']) : '';
  $content = isset($_POST['content']) ? esc_url_raw($_POST['content']) : '';
  $url = isset($_POST['url']) ? esc_url_raw($_POST['url']) : '';

  // Validate Page
  if (!$page || $page < 1) {
    wp_send_json_error([
      'message' => 'Página inválida o no proporcionada.',
    ], 400);
  }

  // Validate Title
  if (!$title || !filter_var($title, FILTER_VALIDATE_URL)) {
    wp_send_json_error([
      'message' => 'Título inválido o no proporcionado.',
    ], 400);
  }

  // Validate URL
  if ((!$content || !filter_var($content, FILTER_VALIDATE_URL) || (!$url || !filter_var($url, FILTER_VALIDATE_URL))) ) {
    wp_send_json_error([
      'message' => 'URL inválida o no proporcionada.',
    ], 400);
  }

  // Determine code format based on URL parameters
  $code_format = unw_determine_code_format($content);

  // Try to find existing UTM
  $utm_post = unw_find_utm_by_content($content, $code_format);

  if ($utm_post) {
    // UTM exists - retrieve code and generate WhatsApp link
    $utm_code = get_field('utm_code', $utm_post->ID);

    if (!$utm_code) {
      wp_send_json_error([
        'message' => 'El UTM existe pero no tiene código asignado.',
      ], 500);
    }

    $whatsapp_link = unw_generate_whatsapp_link($page, $utm_code);

    wp_send_json_success([
      'action' => 'found',
      // 'utm_code' => $utm_code,
      'utm_whatsapp_link' => $whatsapp_link,
    ]);
  } else {
    $result = unw_create_utm($title, $content, $url, $code_format);

    if (is_wp_error($result)) {
      wp_send_json_error([
        'message' => $result->get_error_message(),
      ], 500);
    }

    $whatsapp_link = unw_generate_whatsapp_link($page, $result['utm_code']);

    wp_send_json_success([
      'action' => 'created',
      // 'utm_code' => $result['utm_code'],
      'utm_whatsapp_link' => $whatsapp_link,
    ]);
  }
}
