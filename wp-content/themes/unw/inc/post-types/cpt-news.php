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
        'supports'     => array('title','thumbnail', 'editor'),
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