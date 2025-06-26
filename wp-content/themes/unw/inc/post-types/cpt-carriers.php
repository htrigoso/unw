<?php

add_action('init', 'register_post_type_carreras');
function register_post_type_carreras() {
  $labels = [
    'name'               => 'Carreras',
    'singular_name'      => 'Carrera',
    'menu_name'          => 'Carreras',
    'name_admin_bar'     => 'Carrera',
    'add_new'            => 'Añadir nueva',
    'add_new_item'       => 'Añadir nueva carrera',
    'new_item'           => 'Nueva carrera',
    'edit_item'          => 'Editar carrera',
    'view_item'          => 'Ver carrera',
    'all_items'          => 'Todas las carreras',
    'search_items'       => 'Buscar carreras',
    'not_found'          => 'No se encontraron carreras',
    'not_found_in_trash' => 'No hay carreras en la papelera'
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
    'menu_icon'          => 'dashicons-welcome-learn-more',
    'supports'           => ['title', 'editor', 'thumbnail', 'excerpt']
  ];

  register_post_type('carreras', $args);
}



add_filter('post_type_link', 'custom_carrera_permalink_by_tax', 10, 2);
function custom_carrera_permalink_by_tax($post_link, $post) {
  if ($post->post_type === 'carreras') {
    $terms = wp_get_post_terms($post->ID, 'modalidad');

    if (!empty($terms) && !is_wp_error($terms)) {
      $slug = $terms[0]->slug;

      $base = ($slug === 'virtual') ? 'carreras-a-distancia' : 'carreras';

      return home_url("/{$base}/{$post->post_name}/");
    }
  }
  return $post_link;
}


add_action('init', 'custom_carreras_rewrite_rules');
function custom_carreras_rewrite_rules() {
  // Virtuales: carreras-a-distancia
  add_rewrite_rule('^carreras-a-distancia/([^/]+)/?$', 'index.php?carreras=$matches[1]', 'top');

  // Presenciales: carreras
  add_rewrite_rule('^carreras/([^/]+)/?$', 'index.php?carreras=$matches[1]', 'top');
}