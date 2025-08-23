<?php
add_action('wp_enqueue_scripts', function() {
    if ( is_page('powered-by-asu') ) {
        wp_enqueue_script(
            'globe-gl-js',
            '//cdn.jsdelivr.net/npm/globe.gl',
            [],
            null,
            false // false = lo carga en <head>
        );
    }
});

// Agregar atributo defer solo a este script
add_filter('script_loader_tag', function($tag, $handle, $src) {
    if ( $handle === 'globe-gl-js' ) {
        // Insertamos defer en la etiqueta
        $tag = str_replace(' src', ' defer src', $tag);
    }
    return $tag;
}, 10, 3);
