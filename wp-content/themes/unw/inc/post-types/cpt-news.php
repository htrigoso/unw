<?php
function register_post_type_novedades() {
    $labels = array(
        'name' => 'Novedades',
        'singular_name' => 'Novedad',
        'menu_name' => 'Novedades',
        'name_admin_bar' => 'Novedad',
        'add_new' => 'Añadir nueva',
        'add_new_item' => 'Añadir nueva novedad',
        'new_item' => 'Nueva novedad',
        'edit_item' => 'Editar novedad',
        'view_item' => 'Ver novedad',
        'all_items' => 'Todas las novedades',
        'search_items' => 'Buscar novedades',
        'not_found' => 'No se encontraron novedades.',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'novedades'),
        'menu_icon' => 'dashicons-megaphone',
        'supports' => array('title','thumbnail'),
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
