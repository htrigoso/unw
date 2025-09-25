<?php

add_filter('the_posts', function($posts, $query) {
    if ( $query->is_search() && $query->is_main_query() ) {

        // Palabras clave que deben mostrar el libro
        $keywords = ['libro', 'reclamaciones', 'queja'];

        foreach ( $keywords as $kw ) {
            if ( stripos( $query->query_vars['s'], $kw ) !== false ) {

                // Crear un "post falso"
                $fake_post = new stdClass();
                $fake_post->ID = -9999; // ID ficticio
                $fake_post->post_title = 'Libro de Reclamaciones';
                $fake_post->post_excerpt = 'Accede a nuestro Libro de Reclamaciones en línea.';
                $fake_post->post_content = '';
                $fake_post->post_status = 'publish';
                $fake_post->post_type = 'custom';
                $fake_post->filter = 'raw';
                $fake_post->guid = 'https://librodereclamaciones.uwiener.edu.pe/?_gl=1*jxf9yi*_gcl_au*MjU3MzU1MTk5LjE3NTc0NTc3MzI.';

                // Inyectar al inicio
                array_unshift($posts, $fake_post);

                break;
            }
        }
    }
    return $posts;
}, 10, 2);


add_filter( 'big_image_size_threshold', '__return_false' );

add_action('wp_footer', 'include_the_json_settings');
function include_the_json_settings()
{
  $settings = [
    'ajaxUrl' => admin_url('admin-ajax.php'),
    'themePath' => THEME_PATH,
    'siteUrl' => site_url(),
    'gmapsUrl' => '//maps.googleapis.com/maps/api/js?key=AIzaSyC2dSaHMoRmFncykyFghoLozdWO_MNq1wM&libraries=places&language=es_PE',
  ];

  echo '<script id="themeSettings" type="application/json">';
  echo json_encode($settings);
  echo '</script>';
}





add_filter('clean_url', 'addAttrs', 11, 1);
function addAttrs($url)
{
  if (false === strpos($url, '.js')) {
    return $url;
  }

   return $url ;
}




if (!function_exists('vdebug')) {
    function vdebug($hero) {
        static $vdebug_id = 0;
        $vdebug_id++;

        $output = print_r($hero, true); // Captura el contenido en string

        echo '
        <div style="position:relative; margin:10px 0; border:1px solid #ccc; border-radius:8px; background:#f9f9f9;">
            <button onclick="vdebugCopy(\'vdebug-' . $vdebug_id . '\')"
                style="position:absolute; top:5px; right:5px; padding:4px 8px; font-size:12px; cursor:pointer; border:none; border-radius:4px; background:#0073aa; color:#fff;">
                📋 Copiar
            </button>
            <pre id="vdebug-' . $vdebug_id . '" style="margin:0; padding:10px; overflow:auto; max-height:400px;">' . esc_html($output) . '</pre>
        </div>
        <script>
        function vdebugCopy(id) {
            var el = document.getElementById(id);
            var range = document.createRange();
            range.selectNode(el);
            var sel = window.getSelection();
            sel.removeAllRanges();
            sel.addRange(range);
            try {
                document.execCommand("copy");
             } catch(e) {
                alert("❌ No se pudo copiar");
            }
            sel.removeAllRanges();
        }
        </script>';
    }
}


function get_current_page_url() {
    global $wp;

    // URL base según contexto
    if (is_front_page()) {
        $url = home_url('/');
    } elseif (is_home()) {
        $url = get_permalink(get_option('page_for_posts'));
    } elseif (is_single() || is_page()) {
        $url = get_permalink();
    } elseif (is_category()) {
        $url = get_category_link(get_query_var('cat'));
    } elseif (is_tag()) {
        $url = get_tag_link(get_query_var('tag_id'));
    } elseif (is_author()) {
        $url = get_author_posts_url(get_query_var('author'));
    } else {
        $url = home_url(add_query_arg(array(), $wp->request));
    }

    // 🔹 Agregar parámetros de la URL actual (UTMs, etc.)
    if (!empty($_GET)) {
        $url = add_query_arg($_GET, $url);
    }

    return esc_url($url);
}


function placeholder() {
  echo 'data:image/jpeg;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAECAYAAABGM/VAAAAABHNCSVQICAgIfAhkiAAAAF1JREFUCFtjvP/m1n8GIPj64TzD5f+GDJ8+/WBgrDp767+DKAOD1K/zDEpShgxbH/xhYFx+59Z/LW5Ghg9//zMoMd5mePJZiYHxxMsH2w6+BhnAwJAo9pvh5GcmBgCRxSUqb+IRJgAAAABJRU5ErkJggg==';
}

function get_placeholder() {
  return 'data:image/jpeg;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAECAYAAABGM/VAAAAABHNCSVQICAgIfAhkiAAAAF1JREFUCFtjvP/m1n8GIPj64TzD5f+GDJ8+/WBgrDp767+DKAOD1K/zDEpShgxbH/xhYFx+59Z/LW5Ghg9//zMoMd5mePJZiYHxxMsH2w6+BhnAwJAo9pvh5GcmBgCRxSUqb+IRJgAAAABJRU5ErkJggg==';
}
add_action('wp_enqueue_scripts', 'include_assets', 20);

function include_assets()
{
  global $wp_query;

  $assetsJsonFile = "";
  if (file_exists(get_template_directory() . '/build/assets.json')) {
    $assetsJsonFile = file_get_contents(get_template_directory() . '/build/assets.json');
  } elseif (file_exists(get_template_directory() . '/public/assets.json')) {
    $assetsJsonFile = file_get_contents(get_template_directory() . '/public/assets.json');
  }

  if (!empty($assetsJsonFile)) {
    $assets = json_decode($assetsJsonFile, true);
    $vars = $wp_query->query_vars;
    $themePath = get_template_directory_uri();
    $env = $assets['env'];
    unset($assets['env']);
  }



  if (!empty($assets)) {
    foreach ($assets as $key => $val) {
      switch ($key) {
        case 'app':
          {
            if (array_key_exists('js', $val)) {
              $style_url = ($env === 'production') ? $themePath . '/' . $val['css'] : null;
              $script_url = ($env === 'production') ? $themePath . '/' . $val['js'] : $val['js'];

              if (ALLOW_GZIP) {
                $script_url = $script_url . '.gz';
              }

              if ($env === 'production') {
                // Aquí se agrega la acción para precargar el CSS.
                add_action('wp_head', function() use ($style_url) {
                  echo '<link rel="preload" href="' . esc_url($style_url) . '" as="style">';
                }, 1);

                // Luego, encolamos el estilo de forma normal para que se aplique.
                wp_enqueue_style($key, $style_url);
              }

              wp_enqueue_script($key, $script_url, [], '', true);
            }
          }
          break;
        case $vars['ASSETS_CHUNK_NAME']:
          {
            if (array_key_exists('js', $val)) {
              $style_url = ($env === 'production') ? $themePath . '/' . $val['css'] : null;
              $script_url = ($env === 'production') ? $themePath . '/' . $val['js'] : $val['js'];

              if (ALLOW_GZIP) {
                $style_url = $style_url . '.gz';
                $script_url = $script_url . '.gz';
              }

              if ($env === 'production') {
                wp_enqueue_style($key, $style_url);
              }

              wp_enqueue_script($key, $script_url, ['app'], '', true);
            }
          }
          break;
      }
    }
  }
}




function get_value_or_default($value,$escape_function = false, $default = 'Por definir') {
    // Verificar si es null, vacío o contiene solo espacios en blanco
    if ($value === null || $value === '' || trim($value) === '') {
        $result = $default;
    } else {
        $result = $value;
    }

    // Aplicar función de escape si se solicita
    if ($escape_function) {
        // Si es true, usar esc_html por defecto
        if ($escape_function === true) {
            $escape_function = 'esc_html';
        }

        // Verificar que la función existe y aplicarla
        if (is_string($escape_function) && function_exists($escape_function)) {
            return $escape_function($result);
        }
    }

    return $result;
}

function wp_is_nonempty_array( $value ) {
    return ( is_array( $value ) && ! empty( $value ) );
}



function uw_get_lang_urls() {
    if ( !is_singular() ) return null;

    global $post;
    if ( ! $post instanceof WP_Post ) return null;

    // ¿Estoy en la versión EN? (página hija con slug 'en')
    $is_en = ( $post->post_parent > 0 && $post->post_name === 'en' );

    if ( $is_en ) {
        // EN actual → el padre es ES
        $es_post = get_post( $post->post_parent );
        if ( ! $es_post ) return null;

        $es_url = get_permalink( $es_post );
        $en_url = get_permalink( $post );
        $current = 'en';

    } else {
        // ES actual → buscar hijo 'en'
        $es_post = $post;
        $es_url  = get_permalink( $es_post );

        // Busca un hijo con slug EXACTO 'en'
        $en_child = get_children([
            'post_parent' => $es_post->ID,
            'post_type'   => 'page',
            'name'        => 'en',
            'numberposts' => 1,
            'post_status' => 'publish',
        ]);

        if ( ! empty($en_child) ) {
            $en_page = array_shift($en_child);
            $en_url  = get_permalink( $en_page );
        } else {
            // Fallback: construye /en sin depender de barra final
            $en_url = trailingslashit( $es_url ) . 'en';
        }

        $current = 'es';
    }

    return [
        'es'      => $es_url,
        'en'      => $en_url,
        'current' => $current, // 'es' o 'en'
    ];
}
// http://unw.loc/powered-by-asu/en
// es

function uw_output_lang_switcher() {
    $urls = uw_get_lang_urls();
    if ( ! $urls ) return;

    $is_es = ($urls['current'] === 'es');
    $is_en = ($urls['current'] === 'en');

    echo '<nav class="language-switcher">';
    echo '<a href="' . esc_url($urls['es']) . '" class="' . ($is_es ? 'current-lang' : '') . '">ES</a>';
    echo '<a href="' . esc_url($urls['en']) . '" class="' . ($is_en ? 'current-lang' : '') . '">EN</a>';
    echo '</nav>';
}




/**
 * Devuelve un extracto del contenido del post con un límite de palabras.
 *
 * @param int $post_id  ID del post
 * @param int $limit    Número máximo de palabras
 * @return string
 */
function get_trimmed_content($post_id, $limit = 40) {
    $content = get_post_field('post_content', $post_id);

    if (empty($content)) {
        return '';
    }

    // Limpiar HTML y shortcodes
    $content = strip_shortcodes(strip_tags($content));
    $words   = preg_split('/\s+/', $content);

    if (count($words) > $limit) {
        $content = implode(' ', array_slice($words, 0, $limit)) . '...';
    }

    return trim($content);
}
