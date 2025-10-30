<?php
// add_filter( 'automatic_updates_is_vcs_checkout', '__return_false', 1 );

if (!is_admin()) {
  add_action('wp_enqueue_scripts', 'wp_jquery_enqueue');
  function wp_jquery_enqueue()
  {
    wp_deregister_script('wp-embed');
    wp_deregister_script('jquery');
    wp_deregister_style('svg-attachment.css');
  }
}


add_filter('wp_default_scripts', 'remove_jquery_migrate');
function remove_jquery_migrate(&$scripts)
{
  if (!is_admin()) {
    $scripts->remove('jquery');
  }
}

function allinone_image_tag($id, $lazyload = true, $classimg = '', $title = '', $hide = false, $responsive = true)
{
  if (empty($id)) {
    return false;
  }

  global $site_name;

  if ($title == '') {
    $title = $site_name;
  }

  $classimgfinal = '';

  if ($classimg != "") {
    $classimgfinal = $classimgfinal . ' ' . $classimg;
  }

  $image_tag = '<img ';
  $imagen_src = wp_get_attachment_url($id);
  $imagen_srcset = wp_get_attachment_image_srcset($id, 'fullsize');

  if ($lazyload) {
    $classimgfinal = $classimgfinal . ' lazy-load';
    $placeholder = get_template_directory_uri() . '/upload/placeholder.png';
    $image_tag .= 'src="' . $placeholder . '" ';
    $image_tag .= 'class="' . $classimgfinal . '" data-src="' . $imagen_src . '" ';
    if ($responsive) {
      $image_tag .= 'data-srcset="' . $imagen_srcset . '" ';
    }
  } else {
    $image_tag .= 'class="' . $classimgfinal . '" src="' . $imagen_src . '" ';
    if ($responsive) {
      $image_tag .= 'srcset="' . $imagen_srcset . '" ';
    }
  }

  $image_tag .= 'alt="' . $title . '" ';

  if ($hide) {
    $image_tag .= 'style="display:none" ';
  }

  $image_tag .= '/>';

  echo $image_tag;
}


function allinone_image_tag_with_url($url, $lazyload = true, $classimg = '', $title = '', $hide = false)
{
  global $site_name;

  if (empty($url)) {
    return false;
  }

  if ($title == '') {
    $title = $site_name;
  }

  $classimgfinal = '';

  if ($classimg != "") {
    $classimgfinal = $classimgfinal . ' ' . $classimg;
  }

  $image_tag = '<img ';
  $imagen_src = $url;

  if ($lazyload) {
    $classimgfinal = $classimgfinal . ' lazy-load';
    $placeholder = get_template_directory_uri() . '/upload/placeholder.png';
    $image_tag .= 'src="' . $placeholder . '" ';
    $image_tag .= 'class="' . $classimgfinal . '" data-src="' . $imagen_src . '" ';
  } else {
    $image_tag .= 'class="' . $classimgfinal . '" src="' . $imagen_src . '" ';
  }

  $image_tag .= 'alt="' . $title . '" ';

  if ($hide) {
    $image_tag .= 'style="display:none" ';
  }

  $image_tag .= '/>';
  echo $image_tag;
}


function allinone_buttons($field, $opt = '')
{
  if (!empty($opt)) {
    $settings = $opt == 'sub_field' ? get_sub_field($field) : get_field($field, $opt);
  } else {
    $settings = get_field($field);
  }

  if (isset($settings) && $settings['add_links'] != 1) {
    return;
  }

  if (empty($settings)) {
    return;
  }

  $alignment = $settings['alignment'];

  echo '<div class="x-btn-group ' . $alignment . '">';

  foreach ($settings['links'] as $link) {
    $color = $link['color'];
    $label = $link['link_label'];

    if ($link['type'] == 'internal' || $link['type'] == 'external') {
      $target = home_url();

      if ($link['type'] == 'internal') {
        $target = get_the_permalink($link['internal_link']);
      } elseif ($link['type'] == 'external') {
        $target = $link['external_link'];
      }

      echo '<a href="' . $target . '" class="x-btn ' . $color . '">' . $label . '</a>';
    } elseif ($link['type'] == 'anchor') {
      $target = '.' . $link['anchor_link'];
      echo '<button type="button" class="x-btn ' . $color . '" data-scroll-to-target=' . $target . '>' . $label . '</button>';
    }
  }

  echo '</div>';
}

function allinone_image_svg($svg_file)
{
  if (!empty($svg_file)) {
    $svg_file_path = get_attached_file($svg_file);
    echo file_get_contents($svg_file_path);
  }
}

function allinone_icon_svg($name, $loading = 'lazy')
{
  if (empty($name) || $name === '') {
    return '';
  }

  $icons = get_field('icons', 'options');

  if (empty($icons) && empty($icons[$name])) {
    return '';
  }

  $icon = $icons[$name];

  if ($icon['mime_type'] === 'image/svg+xml') {
    $path = wp_get_original_image_path($icon['id']);
    return file_get_contents($path);
  } else {
    return '<img
            class="' . $loading . '"
            src="' . get_placeholder() . '"
            data-src="' . $icon['url'] . '"
            alt="' . $icon['url'] . '"
          />';
  }
}



function allinone_get_pages_by_template($template = 'page.php', $post_type = 'page', $multi = false)
{
  $args = [
    'post_type' => $post_type,
    'fields' => 'ids',
    'nopaging' => true,
    'meta_key' => '_wp_page_template',
    'meta_value' => $template
  ];

  $pages = get_posts($args);

  if (!empty($pages)) {
    if ($multi == false) {
      $page_id = $pages[0];
      $translated_pid = allinone_get_translate_object_id($page_id, 'page');
      $page = get_post($translated_pid);

      return $page;
    } else {
      $multi_pages = [];

      foreach ($pages as $pid) {
        $translated_pid = allinone_get_translate_object_id($pid, 'page');
        $page = get_post($translated_pid);
        $multi_pages[] = $page;

        return $multi_pages;
      }
    }
  }

  return null;
}


function allinone_highlight_txt($str = '')
{
  if (!empty($str) && !is_null($str)) {
    $str = str_replace('[', '<span>', $str);
    $result = str_replace(']', '</span>', $str);

    return $result;
  }

  return '';
}


function allinone_pagination_bar()
{
  global $wp_query;

  $total_pages = $wp_query->max_num_pages;

  if ($total_pages > 1) {
    $current_page = max(1, get_query_var('paged'));

    echo '<div class="x-pagination fx-m-x">';

    echo paginate_links(array(
      'base' => get_pagenum_link(1) . '%_%',
      'format' => '?paged=%#%',
      'prev_text' => false,
      'next_text' => false,
      'current' => $current_page,
      'total' => $total_pages,
    ));

    echo '</div>';
  }
}

function allinone_video($enlace = "", $tipo = "archivo", $poster = "", $archivo = "", $id = "player")
{
  if ($tipo == "archivo") {
    if (!empty($poster)) {
      if (is_numeric($poster)) {
        $poster = wp_get_attachment_image_src($poster, 'full');
      }
    }
    if (!empty($archivo)) {
      if (is_numeric($archivo)) {
        $archivo = wp_get_attachment_url($archivo);
      }
    }
    echo '<video id="' . $id . '" controls crossorigin playsinline data-poster="' . $poster[0] . '" class="videoreproductor">';
    echo '<source src="' . $archivo . '">';
    echo '</video>';
  } else if ($tipo == "youtube") {
    if (!empty($enlace)) {
      echo '<div id="' . $id . '" data-plyr-provider="' . $tipo . '" data-plyr-embed-id="' . $enlace . '" class="videoreproductor"></div>';
    }
  } else if ($tipo == "vimeo") {
    if (!empty($enlace)) {
      echo '<div id="' . $id . '" data-plyr-provider="' . $tipo . '" data-plyr-embed-id="' . $enlace . '" class="videoreproductor"></div>';
    }
  }
}

add_action('admin_head', 'favicon_for_admin');
function favicon_for_admin()
{
  echo '<link rel="Shortcut Icon" type="image/x-icon" href="' . THEME_PATH . '/upload/favicon/favicon.ico" />';
}

function wpml_lang_desktop() {
  $langs = [
    'es' => 'ESP',
    'en' => 'ENG',
  ];
  $languages = icl_get_languages('skip_missing=0');
  if (1 < count($languages)) {
    $c = 0;
    foreach ($languages as $key => $lang) {
      $active = $lang['active'] ? 'is-active' : '';
      $margin = $c > 0 ? 'class="m-l-12"' : '';
      if (array_key_exists($lang['code'], $langs )) {
        $html[] = '<li ' . $margin . '>
                    <a href="' . $lang['url'] . '" class="lang-link pointer upper ' . $active . '">
                      ' . $langs[$lang['code']] . '
                    </a>
                  </li>';
      }
      $c++;
    }
    echo join('', $html);
  }
}

/**
 * Get current page full URL with all parameters
 *
 * @param array $exclude_params Array of query parameter keys to exclude
 * @return string Full URL
 */
function unw_get_current_url($exclude_params = []) {
    $protocol = is_ssl() ? 'https://' : 'http://';
    $host = $_SERVER['HTTP_HOST'];
    $request_uri = strtok($_SERVER['REQUEST_URI'], '?');

    $current_url = $protocol . $host . $request_uri;

    // Get query string
    if (!empty($_SERVER['QUERY_STRING'])) {
        // Parse query string into array
        parse_str($_SERVER['QUERY_STRING'], $query_params);

        // Remove excluded parameters
        if (!empty($exclude_params)) {
            foreach ($exclude_params as $param) {
                unset($query_params[$param]);
            }
        }

        // Rebuild query string if parameters remain
        if (!empty($query_params)) {
            $current_url .= '?' . http_build_query($query_params);
        }
    }

    return $current_url;
}
