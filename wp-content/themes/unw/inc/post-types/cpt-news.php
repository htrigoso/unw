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
