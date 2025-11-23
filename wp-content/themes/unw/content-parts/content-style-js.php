<?php

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




  // Verificar si DelayJS está activo para NO hacer preload de scripts retrasados
  $delay_js_active = function_exists('is_delay_js_active') && is_delay_js_active();

  if (!empty($assets)) {
    foreach ($assets as $key => $val) {
      switch ($key) {
        case 'app':
          {
            if (array_key_exists('js', $val)) {
              $style_url = ($env === 'production') ? $themePath . '/' . $val['css'] : null;
              $script_url = ($env === 'production') ? $themePath . '/' . $val['js'] : $val['js'];

              echo "<link rel='preload' href='{$style_url}' as='style' onload=\"this.onload=null;this.rel='stylesheet'\" media='all'>\n";
              echo "<noscript><link rel='stylesheet' href='{$style_url}' media='all'></noscript>\n";

              echo "<script type='module' src='{$script_url}'></script>";
            }
          }
          break;
        case $vars['ASSETS_CHUNK_NAME']:
          {
            if (array_key_exists('js', $val)) {
              $style_url = ($env === 'production') ? $themePath . '/' . $val['css'] : null;
              $script_url = ($env === 'production') ? $themePath . '/' . $val['js'] : $val['js'];

              echo "<link rel='stylesheet' href='{$style_url}' media='print' onload=\"this.media='all'\">\n";
              echo "<noscript><link rel='stylesheet' href='{$style_url}' media='all'></noscript>\n";

              // NO hacer modulepreload si DelayJS está activo (evita warnings)
              if (!$delay_js_active) {
                echo "<link rel='modulepreload' href='" . esc_url($script_url) . "'>\n";
              }
              echo "<script type='module'>import('" . esc_url($script_url) . "');</script>\n";

            }
          }
          break;
      }
    }
  }
