<?php

add_action('wp_enqueue_scripts', 'pba_enqueue_page_scripts');
function pba_enqueue_page_scripts()
{
  wp_enqueue_script('globe-gl', '//cdn.jsdelivr.net/npm/globe.gl', [], null, true);
}

function enqueue_custom_scripts() {
    wp_enqueue_script(
        'powered-by-asu-bundle',
        get_template_directory_uri() . '/dist/powered-by-asu.js',
        array(),
        '1.0.0',
        true
    );

    wp_localize_script(
        'powered-by-asu-bundle',
        'themeData',
        array(
            'themeUrl' => get_template_directory_uri(),
            'uploadUrl' => get_template_directory_uri() . '/upload'
        )
    );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
