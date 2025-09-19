<?php

add_action('init', 'register_post_type_carreras_a_distancia');
function register_post_type_carreras_a_distancia() {
  $labels = [
    'name'               => 'Carreras a Distancia',
    'singular_name'      => 'Carrera a Distancia',
    'menu_name'          => 'Carreras a Distancia',
    'name_admin_bar'     => 'Carrera a Distancia',
    'add_new'            => 'Añadir nueva',
    'add_new_item'       => 'Añadir nueva carrera a distancia',
    'new_item'           => 'Nueva carrera a distancia',
    'edit_item'          => 'Editar carrera a distancia',
    'view_item'          => 'Ver carrera a distancia',
    'all_items'          => 'Todas las carreras a distancia',
    'search_items'       => 'Buscar carreras a distancia',
    'not_found'          => 'No se encontraron carreras a distancia',
    'not_found_in_trash' => 'No hay carreras a distancia en la papelera'
  ];

  $args = [
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => false, // manejamos nosotros la URL
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => 5,
    'menu_icon'          => 'dashicons-book',
    'supports'           => ['title', 'excerpt', 'thumbnail'],
    'show_in_rest'       => true
  ];

  register_post_type('carreras-a-distancia', $args);
}
