<?php
add_action('wp_enqueue_scripts', function () {
    global $post;

    if (!$post instanceof WP_Post) {
        return;
    }

    // Verificar si es powered-by-asu (ES)
    $is_asu_page = is_page('powered-by-asu');

    // Verificar si es powered-by-asu/en
    if ($post->post_name === 'en' && $post->post_parent) {
        $parent = get_post($post->post_parent);
        if ($parent && $parent->post_name === 'powered-by-asu') {
            $is_asu_page = true;
        }
    }

    if ($is_asu_page) {
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
        $tag = '<script src="' . esc_url($src) . '" defer id="' . esc_attr($handle) . '"></script>';
    }
    return $tag;
}, 10, 3);
