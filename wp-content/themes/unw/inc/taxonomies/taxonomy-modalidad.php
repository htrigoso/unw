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
    'hierarchical'      => false,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => false
  ];

  register_taxonomy('modalidad', ['carreras'], $args);
}