<?php
add_action('wp_enqueue_scripts', function () {
    global $post;

    if (!$post instanceof WP_Post) {
        return;
    }

    $is_asu_page = false;

    // Verificar si es la página "powered-by-asu"
    if ($post->post_name === 'powered-by-asu') {
        $is_asu_page = true;
    }

    // Verificar si es la versión en inglés (slug "en" y padre "powered-by-asu")
    if ($post->post_name === 'en' && $post->post_parent) {
        $parent = get_post($post->post_parent);
        if ($parent && $parent->post_name === 'powered-by-asu') {
            $is_asu_page = true;
        }
    }

    // Si coincide, cargar el script de Globe
    if ($is_asu_page) {
        wp_enqueue_script(
            'globe-gl-js',
            'https://cdn.jsdelivr.net/npm/globe.gl',
            [],
            null,
            false // cargar en el footer
        );
    }
});

add_filter('script_loader_tag', function ($tag, $handle, $src) {
    if ($handle === 'globe-gl-js') {
        $tag = '<script src="' . esc_url($src) . '" defer id="' . esc_attr($handle) . '"></script>';
    }
    return $tag;
}, 10, 3);