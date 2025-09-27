<?php
function register_post_type_novedades() {
    $labels = array(
        'name'          => 'Noticias',
        'singular_name' => 'Noticia',
        'menu_name'     => 'Noticias',
        'add_new_item'  => 'Añadir nueva noticia',
        'edit_item'     => 'Editar noticia',
        'view_item'     => 'Ver noticia',
        'all_items'     => 'Todas las noticias',
        'search_items'  => 'Buscar noticias',
        'not_found'     => 'No se encontraron noticias.',
    );

    $args = array(
        'labels'       => $labels,
        'public'       => true,
        'has_archive'  => true,
        'rewrite'      => array('slug' => 'noticias'),
        'menu_icon'    => 'dashicons-megaphone',
        'supports'     => array('title','thumbnail'),
        'show_in_rest' => true,
    );

    register_post_type('novedades', $args);
}
add_action('init', 'register_post_type_novedades');


function uw_get_first_slider_image($post_id = null, $size = 'full') {
    if (!$post_id) {
        $post_id = get_the_ID();
    }

    $slider = get_field('slider', $post_id);

    if (empty($slider) || !is_array($slider)) {
        return '';
    }

    $image = $slider[0]['image'] ?? null;

    if (!$image || !is_array($image)) {
        return '';
    }

    // Si existe el tamaño pedido
    if (!empty($image['sizes'][$size])) {
        return $image['sizes'][$size];
    }

    // Si no, intenta la URL completa
    return !empty($image['url']) ? $image['url'] : '';
}



add_action('template_redirect', function () {
    global $wp;

    $current_url = home_url(add_query_arg([], $wp->request));

    // Redirigir single de novedades solo si URL contiene /novedades/
    if (is_singular('novedades') && strpos($current_url, '/novedades/') !== false) {
        $new_url = str_replace('/novedades/', '/noticias/', $current_url);
        wp_redirect($new_url, 301);
        exit;
    }

    // Redirigir archivo de novedades → noticias
    if (is_post_type_archive('novedades') && strpos($current_url, '/novedades') !== false) {
        $new_url = str_replace('/novedades', '/noticias', $current_url);
        wp_redirect($new_url, 301);
        exit;
    }

    // Redirigir taxonomía categoria_novedad → categoria-noticia
    if (is_tax('categoria_novedad') && strpos($current_url, '/categoria-novedad/') !== false) {
        $new_url = str_replace('/categoria-novedad/', '/categoria-noticia/', $current_url);
        wp_redirect($new_url, 301);
        exit;
    }
});
