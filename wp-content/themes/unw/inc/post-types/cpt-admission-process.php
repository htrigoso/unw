<?php
function register_post_type_proceso_admision() {
    $labels = array(
        'name'                  => 'Procesos de Admisión',
        'singular_name'         => 'Proceso de Admisión',
        'menu_name'             => 'Proceso de Admisión',
        'name_admin_bar'        => 'Proceso de Admisión',
        'add_new'               => 'Añadir nuevo',
        'add_new_item'          => 'Añadir nuevo proceso',
        'new_item'              => 'Nuevo proceso',
        'edit_item'             => 'Editar proceso',
        'view_item'             => 'Ver proceso',
        'all_items'             => 'Todos los procesos',
        'search_items'          => 'Buscar procesos',
        'not_found'             => 'No se encontraron procesos de admisión.',
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'has_archive'           => false,
        'rewrite'               => array('slug' => 'proceso-admision'),
        'menu_icon'             => 'dashicons-welcome-learn-more',
        'supports'              => array('title', 'editor', 'excerpt'), // usas excerpt como resumen visible
        'show_in_rest'          => true,
        'exclude_from_search' => true,
    );

    register_post_type('proceso_admision', $args);
}
add_action('init', 'register_post_type_proceso_admision');
