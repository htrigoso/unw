<?php
add_action('wp_enqueue_scripts', function () {
  if (is_page('powered-by-asu')) {
    wp_enqueue_script(
      'globe-gl-js',
      '//cdn.jsdelivr.net/npm/globe.gl',
      [],
      null,
      false
    );
  }
});

add_filter('script_loader_tag', function ($tag, $handle, $src) {
  if ($handle === 'globe-gl-js') {
    $tag = '<script type="text/javascript" src="' . '//cdn.jsdelivr.net/npm/globe.gl' . '" defer id="' . esc_attr($handle) . '"></script>';
  }
  return $tag;
}, 10, 3);
