<?php

add_action('init', 'register_taxonomy_modalidad');
function register_taxonomy_modalidad() {
  $labels = [
    'name'              => 'Modalidades',
    'singular_name'     => 'Modalidad',
    'search_items'      => 'Buscar modalidad',
    'all_items'         => 'Todas las modalidades',
    'edit_item'         => 'Editar modalidad',
    'update_item'       => 'Actualizar modalidad',
    'add_new_item'      => 'Agregar nueva modalidad',
    'new_item_name'     => 'Nueva modalidad',
    'menu_name'         => 'Modalidades'
  ];

  $args = [
   'labels'            => $labels,
    'hierarchical'      => true,
    'public'            => true,
    'show_ui'           => true,
    'show_admin_column' => true,
    'show_in_nav_menus' => true,
    'show_tagcloud'     => false,
    'rewrite'           => false,
    'meta_box_cb'       => 'modalidad_meta_box_radio'
  ];

  register_taxonomy('modalidad', ['carreras'], $args);
}
