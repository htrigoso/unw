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
 * @param string $url
 * @return string
 */
function unw_determine_code_format($url)
{
  $parsed_url = parse_url($url);

  return !empty($parsed_url['query']) ? UNW_UTM_FORMAT_PAUTA : UNW_UTM_FORMAT_ORGANICO;
}

/**
 * Find existing UTM post by URL and code format
 *
 * @param string $url The URL to search for
 * @param string $code_format
 * @return WP_Post|null
 */
function unw_find_utm_by_url($url, $code_format)
{
  $args = [
    'post_type' => UNW_UTM_POST_TYPE,
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'meta_query' => [
      [
        'key' => 'code_format',
        'value' => $code_format,
        'compare' => '=',
      ],
    ],
    's' => $url,
    'search_columns' => ['post_content'],
  ];

  $posts = get_posts($args);

  // Search for exact URL match in post content (description)
  foreach ($posts as $post) {
    if (trim($post->post_content) === trim($url)) {
      return $post;
    }
  }

  return null;
}

/**
 * Create new UTM post with auto-generated code
 *
 * @param string $title The title to associate with the UTM
 * @param string $url The URL to associate with the UTM
 * @param string $code_format
 * @param int $current_post_id The post ID to use as context for the template
 * @return array|WP_Error ['utm_id', 'utm_code', 'whatsapp_link'] or WP_Error
 */
function unw_create_utm($title, $url, $code_format, $current_post_id)
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

  // Parse URL to get domain for title
  // $parsed_url = wp_parse_url($url);
  // $domain = isset($parsed_url['host']) ? $parsed_url['host'] : 'Unknown';
  // $path = isset($parsed_url['path']) ? $parsed_url['path'] : '';

  // Create post
  $post_data = [
    'post_type' => UNW_UTM_POST_TYPE,
    'post_status' => 'publish',
    'post_title' => $utm_code . ' - ' . $title,
    'post_content' => trim($url), // Store full URL in content/description
    'post_author' => get_current_user_id() ?: 1,
  ];

  $post_id = wp_insert_post($post_data, true);

  if (is_wp_error($post_id)) {
    return new WP_Error(
      'post_creation_failed',
      'No se pudo crear el post UTM: ' . $post_id->get_error_message(),
      ['status' => 500]
    );
  }

  // Update ACF fields
  update_field('code_format', $code_format, $post_id);
  update_field('utm_code', $utm_code, $post_id);

  // Generate WhatsApp link
  $whatsapp_link = unw_generate_whatsapp_link($utm_code, $current_post_id);

  if (!$whatsapp_link) {
    // Rollback: delete the post if WhatsApp link generation fails
    wp_delete_post($post_id, true);

    return new WP_Error(
      'whatsapp_config_missing',
      'No se pudo generar el link de WhatsApp. Verifica que el campo "code_message_generic" exista en ACF Options > utms_whatsapp.',
      ['status' => 500]
    );
  }

  return [
    'utm_id' => $post_id,
    'utm_code' => $utm_code,
    'whatsapp_link' => $whatsapp_link,
  ];
}

/**
 * Generate unique UTM code
 *
 * Reuses the same logic as the UTM Code Generator plugin
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

  // Get the highest numbered code for this format
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

  // Generate code with 5-digit zero-padding
  return $format . str_pad($number, UNW_UTM_CODE_PADDING, '0', STR_PAD_LEFT);
}

/**
 * Generate WhatsApp link from template
 *
 * Retrieves the template from ACF Options and replaces {utm_code} placeholder
 *
 * @param string $utm_code The UTM code to insert
 * @param int $current_post_id The post ID to use as context for the template
 * @return string|false WhatsApp link or false if template not found
 */
function unw_generate_whatsapp_link($utm_code, $current_post_id)
{
  // Get ACF options group
  $utms_whatsapp = get_field('utms_whatsapp', 'options');

  if (!$utms_whatsapp || empty($utms_whatsapp['code_message_generic'])) {
    error_log('UTM WhatsApp: code_message_generic field not found in ACF options');
    return false;
  }

  // Get the template by default
  $template = $utms_whatsapp['code_message_generic'];

  // Search if the post ID is in the list of custom UTMs
  if (!empty($utms_whatsapp['utms']) && ($current_post_id)) {
    foreach ($utms_whatsapp['utms'] as $utm_item) {
      if (
        $utm_item['page'] instanceof WP_Post
        && $utm_item['page']->ID === $current_post_id
        && !empty($utm_item['message'])
      ) {
        $template = $utm_item['message'];
        break;
      }
    }
  }

  // Replace placeholder with actual UTM code
  $whatsapp_link = str_replace('{utm_code}', $utm_code, $template);

  return $whatsapp_link;
}

/**
 * Get UTM WhatsApp link by URL
 *
 * Returns WhatsApp link if UTM exists, false otherwise
 *
 * @param string $url The URL to search for
 * @param int $current_post_id The post ID to use as context for the template
 * @return string|false WhatsApp link if found, false otherwise
 */
function get_utm_by_url($url, $current_post_id)
{
  // Validate URL
  if (!filter_var($url, FILTER_VALIDATE_URL)) {
    return false;
  }

  // Determine format
  $code_format = unw_determine_code_format($url);

  // Find existing UTM
  $utm_post = unw_find_utm_by_url($url, $code_format);

  if (!$utm_post) {
    return false;
  }

  // Get UTM code
  $utm_code = get_field('utm_code', $utm_post->ID);

  if (!$utm_code) {
    return false;
  }

  // Generate and return WhatsApp link
  return unw_generate_whatsapp_link($utm_code, $current_post_id);
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

  $title = isset($_POST['title']) ? esc_attr($_POST['title']) : '';
  $url = isset($_POST['url']) ? esc_url_raw($_POST['url']) : '';
  $post_id = isset($_POST['post_id']) ? intval($_POST['post_id']) : null;

  // Validate Title
  if (!$title || !filter_var($title, FILTER_VALIDATE_URL)) {
    wp_send_json_error([
      'message' => 'Título inválido o no proporcionado.',
    ], 400);
  }

  // Validate URL
  if (!$url || !filter_var($url, FILTER_VALIDATE_URL)) {
    wp_send_json_error([
      'message' => 'URL inválida o no proporcionada.',
    ], 400);
  }

  // Validate Post ID
  if (!$post_id || $post_id === 0) {
    wp_send_json_error([
      'message' => 'Post ID inválido o no proporcionado.',
    ], 400);
  }

  // Determine code format based on URL parameters
  $code_format = unw_determine_code_format($url);

  // Try to find existing UTM
  $utm_post = unw_find_utm_by_url($url, $code_format);

  if ($utm_post) {
    // UTM exists - retrieve code and generate WhatsApp link
    $utm_code = get_field('utm_code', $utm_post->ID);

    if (!$utm_code) {
      wp_send_json_error([
        'message' => 'El UTM existe pero no tiene código asignado.',
      ], 500);
    }

    $whatsapp_link = unw_generate_whatsapp_link($utm_code, $post_id);

    wp_send_json_success([
      'action' => 'found',
      'utm_code' => $utm_code,
      'whatsapp_link' => $whatsapp_link,
    ]);
  } else {
    $result = unw_create_utm($title, $url, $code_format, $post_id);

    if (is_wp_error($result)) {
      wp_send_json_error([
        'message' => $result->get_error_message(),
      ], 500);
    }

    wp_send_json_success([
      'action' => 'created',
      'utm_code' => $result['utm_code'],
      'whatsapp_link' => $result['whatsapp_link'],
    ]);
  }
}
