<?php
add_action('init', 'register_taxonomy_categoria_novedad');
function register_taxonomy_categoria_novedad() {
  $labels = [
    'name'              => 'Categorías de Novedades',
    'singular_name'     => 'Categoría de Novedad',
    'search_items'      => 'Buscar categoría',
    'all_items'         => 'Todas las categorías',
    'edit_item'         => 'Editar categoría',
    'update_item'       => 'Actualizar categoría',
    'add_new_item'      => 'Agregar nueva categoría',
    'new_item_name'     => 'Nueva categoría',
    'menu_name'         => 'Categorías'
  ];

  $args = [
    'hierarchical'      => true, // true = funciona como categorías jerárquicas
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => ['slug' => 'categoria-novedad'],
  ];

  register_taxonomy('categoria_novedad', ['novedades'], $args);
}
