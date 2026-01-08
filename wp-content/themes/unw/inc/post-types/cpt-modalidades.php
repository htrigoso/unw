<?php
function register_post_type_modalidades() {
  $labels = array(
    'name'               => 'Modalidades',
    'singular_name'      => 'Modalidad',
    'menu_name'          => 'Modalidades',
    'name_admin_bar'     => 'Modalidad',
    'add_new'            => 'Añadir nueva',
    'add_new_item'       => 'Añadir nueva modalidad',
    'new_item'           => 'Nueva modalidad',
    'edit_item'          => 'Editar modalidad',
    'view_item'          => 'Ver modalidad',
    'all_items'          => 'Todas las modalidades',
    'search_items'       => 'Buscar modalidades',
    'not_found'          => 'No se encontraron modalidades.',
    'not_found_in_trash' => 'No hay modalidades en la papelera.',
  );

  $args = array(
    'labels'              => $labels,
    'public'              => true,
    'menu_icon'           => 'dashicons-category',
    'supports'            => array('title', 'thumbnail', 'excerpt'),
    'has_archive'         => false,
    'rewrite'             => array('slug' => 'modalidades'),
    'show_in_rest'        => true,
    'exclude_from_search' => true,
  );

  register_post_type('modalidades', $args);
}
add_action('init', 'register_post_type_modalidades');
