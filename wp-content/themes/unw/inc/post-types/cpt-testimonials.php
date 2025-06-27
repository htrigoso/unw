<?php
function register_post_type_testimonios() {
    $labels = array(
        'name' => 'Testimonios',
        'singular_name' => 'Testimonio',
        'menu_name' => 'Testimonios',
        'name_admin_bar' => 'Testimonio',
        'add_new' => 'Añadir nuevo',
        'add_new_item' => 'Añadir nuevo testimonio',
        'new_item' => 'Nuevo testimonio',
        'edit_item' => 'Editar testimonio',
        'view_item' => 'Ver testimonio',
        'all_items' => 'Todos los testimonios',
        'search_items' => 'Buscar testimonios',
        'not_found' => 'No se encontraron testimonios.',
        'not_found_in_trash' => 'No hay testimonios en la papelera.',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-format-quote',
        'supports' => array('title', 'thumbnail'), // Solo título e imagen destacada
        'has_archive' => true,
        'rewrite' => array('slug' => 'testimonios'),
        'show_in_rest' => true,
    );

    register_post_type('testimonios', $args);
}
add_action('init', 'register_post_type_testimonios');
