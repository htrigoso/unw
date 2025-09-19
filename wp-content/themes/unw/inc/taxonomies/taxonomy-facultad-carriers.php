<?php
// Taxonomía "Facultad" para Carreras presenciales
add_action('init', 'register_taxonomy_facultad_presencial');
function register_taxonomy_facultad_presencial() {
  $labels = [
    'name'              => 'Facultades',
    'singular_name'     => 'Facultad',
    'menu_name'         => 'Facultades',
    'all_items'         => 'Todas las Facultades',
    'edit_item'         => 'Editar Facultad',
    'view_item'         => 'Ver Facultad',
    'update_item'       => 'Actualizar Facultad',
    'add_new_item'      => 'Agregar Facultad',
    'new_item_name'     => 'Nueva Facultad',
    'search_items'      => 'Buscar Facultades',
    'not_found'         => 'No se encontraron Facultades'
  ];

  $args = [
    'labels'            => $labels,
    'hierarchical'      => true, // se comporta como categorías
    'show_ui'           => true,
    'show_admin_column' => true,
    'show_in_nav_menus' => true,
    'show_tagcloud'     => false,
    'show_in_rest'      => true,
    'public'       => true,
    'rewrite'           => false,
    'rewrite'           => [
        'slug'         => 'carreras-uwiener',
        'with_front'   => true,
    ],
  ];

  register_taxonomy('categoria-carrera', ['carreras'], $args);
}

// Taxonomía "Facultad" para Carreras a Distancia
add_action('init', 'register_taxonomy_facultad_distancia');


function register_taxonomy_facultad_distancia() {
  $labels = [
    'name'              => 'Facultades',
    'singular_name'     => 'Facultad',
    'menu_name'         => 'Facultades',
    'all_items'         => 'Todas las Facultades',
    'edit_item'         => 'Editar Facultad',
    'view_item'         => 'Ver Facultad',
    'update_item'       => 'Actualizar Facultad',
    'add_new_item'      => 'Agregar Facultad',
    'new_item_name'     => 'Nueva Facultad',
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
    'show_in_rest'      => true,
    'rewrite'           => [
        'slug'         => 'carreras-a-distancia',
        'with_front'   => false,
        'hierarchical' => true,
    ],
  ];

  // 👉 slug único para distancia
  register_taxonomy('categoria-carrera-distancia', ['carreras-a-distancia'], $args);
}