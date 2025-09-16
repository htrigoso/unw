<?php
add_action('init', 'register_taxonomy_facultad');
function register_taxonomy_facultad() {
  $labels = [
    'name'              => 'Facultades',
    'singular_name'     => 'Facultad',
    'menu_name'         => 'Facultades',
    'all_items'         => 'Todas las Facultades',
    'edit_item'         => 'Editar Facultad',
    'view_item'         => 'Ver Facultad',
    'update_item'       => 'Actualizar Facultad',
    'add_new_item'      => 'Agregar Facultad',
    'new_item_name'     => 'Nuevo nombre de Facultad',
    'search_items'      => 'Buscar Facultades',
    'not_found'         => 'No se encontraron Facultades'
  ];

  $args = [
    'labels'            => $labels,
    'hierarchical'      => true,
    'public'            => true,
    'show_ui'           => true,
    'show_admin_column' => true,
    'show_in_nav_menus' => true,
    'show_tagcloud'     => false,

  ];

  register_taxonomy('facultad', ['carreras'], $args);
}