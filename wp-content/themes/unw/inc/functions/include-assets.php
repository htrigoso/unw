<?php

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
  if ($env === 'production') {
    // $plyr_style = $themePath . '/build/plyr/plyr.min.css';
    if (ALLOW_GZIP) {
      // $plyr_style = $themePath . '/build/plyr/plyr.min.css.gz';
    }
    if (is_page_template('page-about_us.php') || is_front_page() || is_home() || is_singular(['post', 'project'])) {
      //wp_enqueue_style('plyr', $plyr_style);
    }
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


add_filter('clean_url', 'addAttrs', 11, 1);
function addAttrs($url)
{
  if (false === strpos($url, '.js')) {
    return $url;
  }

  return "$url' defer";
}


function placeholder() {
  echo 'data:image/jpeg;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAECAYAAABGM/VAAAAABHNCSVQICAgIfAhkiAAAAF1JREFUCFtjvP/m1n8GIPj64TzD5f+GDJ8+/WBgrDp767+DKAOD1K/zDEpShgxbH/xhYFx+59Z/LW5Ghg9//zMoMd5mePJZiYHxxMsH2w6+BhnAwJAo9pvh5GcmBgCRxSUqb+IRJgAAAABJRU5ErkJggg==';
}

function get_placeholder() {
  return 'data:image/jpeg;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAECAYAAABGM/VAAAAABHNCSVQICAgIfAhkiAAAAF1JREFUCFtjvP/m1n8GIPj64TzD5f+GDJ8+/WBgrDp767+DKAOD1K/zDEpShgxbH/xhYFx+59Z/LW5Ghg9//zMoMd5mePJZiYHxxMsH2w6+BhnAwJAo9pvh5GcmBgCRxSUqb+IRJgAAAABJRU5ErkJggg==';
}
