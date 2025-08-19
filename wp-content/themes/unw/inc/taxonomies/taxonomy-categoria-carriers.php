<?php
add_action('init', 'register_taxonomy_categoria_carrera');
function register_taxonomy_categoria_carrera() {
  $labels = [
    'name'              => 'Categorías de Carreras',
    'singular_name'     => 'Categoría de Carrera',
    'menu_name'         => 'Categorías',
    'all_items'         => 'Todas las categorías',
    'edit_item'         => 'Editar categoría',
    'view_item'         => 'Ver categoría',
    'update_item'       => 'Actualizar categoría',
    'add_new_item'      => 'Añadir nueva categoría',
    'new_item_name'     => 'Nuevo nombre de categoría',
    'search_items'      => 'Buscar categorías',
    'not_found'         => 'No se encontraron categorías'
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
  ];

  register_taxonomy('categoria_carrera', ['carreras'], $args);
}
