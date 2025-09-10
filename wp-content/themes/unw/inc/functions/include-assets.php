<?php




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
    if (is_front_page()) {
        return home_url('/');
    } elseif (is_home()) {
        return get_permalink(get_option('page_for_posts'));
    } elseif (is_single() || is_page()) {
        return get_permalink();
    } elseif (is_category()) {
        return get_category_link(get_query_var('cat'));
    } elseif (is_tag()) {
        return get_tag_link(get_query_var('tag_id'));
    } elseif (is_author()) {
        return get_author_posts_url(get_query_var('author'));
    } else {
        return home_url(add_query_arg(array()));
    }
}


function placeholder() {
  echo 'data:image/jpeg;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAECAYAAABGM/VAAAAABHNCSVQICAgIfAhkiAAAAF1JREFUCFtjvP/m1n8GIPj64TzD5f+GDJ8+/WBgrDp767+DKAOD1K/zDEpShgxbH/xhYFx+59Z/LW5Ghg9//zMoMd5mePJZiYHxxMsH2w6+BhnAwJAo9pvh5GcmBgCRxSUqb+IRJgAAAABJRU5ErkJggg==';
}

function get_placeholder() {
  return 'data:image/jpeg;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAECAYAAABGM/VAAAAABHNCSVQICAgIfAhkiAAAAF1JREFUCFtjvP/m1n8GIPj64TzD5f+GDJ8+/WBgrDp767+DKAOD1K/zDEpShgxbH/xhYFx+59Z/LW5Ghg9//zMoMd5mePJZiYHxxMsH2w6+BhnAwJAo9pvh5GcmBgCRxSUqb+IRJgAAAABJRU5ErkJggg==';
}
add_action('wp_enqueue_scripts', 'include_assets');

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
