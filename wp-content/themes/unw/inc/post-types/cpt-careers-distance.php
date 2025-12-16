<?php

add_action('init', 'register_post_type_carreras_a_distancia', 10);
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
    'rewrite'           => [
       'slug'         => 'carreras-a-distancia', // 👈 AGREGADO /carrera
      'with_front'   => false,
     ],
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




// 👇 CUSTOM REWRITE RULES para manejar el conflicto
add_action('init', 'custom_carreras_distancia_rewrite_rules', 11);

function custom_carreras_distancia_rewrite_rules() {
  // Primero: intentar matching con términos de taxonomía existentes
  $terms = get_terms([
    'taxonomy'   => 'categoria-carrera-distancia',
    'hide_empty' => false,
  ]);

  if (!is_wp_error($terms) && !empty($terms)) {
    foreach ($terms as $term) {
      add_rewrite_rule(
        '^carreras-a-distancia/' . $term->slug . '/?$',
        'index.php?categoria-carrera-distancia=' . $term->slug,
        'top'
      );

      // Paginación para términos
      add_rewrite_rule(
        '^carreras-a-distancia/' . $term->slug . '/page/?([0-9]{1,})/?$',
        'index.php?categoria-carrera-distancia=' . $term->slug . '&paged=$matches[1]',
        'top'
      );
    }
  }

  // Segundo: cualquier otra cosa bajo carreras-a-distancia/ es un post
  add_rewrite_rule(
    '^carreras-a-distancia/([^/]+)/?$',
    'index.php?carreras-a-distancia=$matches[1]',
    'top'
  );
}


add_rewrite_rule(
    '^carreras-a-distancia/([^/]+)/schema-preview/?$',
    'index.php?carreras-a-distancia=$matches[1]&schema-preview=1',
    'top'
  );

// 👇 Regenerar reglas cuando se crea/actualiza un término
add_action('created_categoria-carrera-distancia', 'flush_rewrite_rules');
add_action('edited_categoria-carrera-distancia', 'flush_rewrite_rules');
add_action('delete_categoria-carrera-distancia', 'flush_rewrite_rules');


// Agregar clase del slug de página al body del admin
add_filter('admin_body_class', function($classes) {
  $screen = get_current_screen();
  if ($screen && $screen->base === 'post' && $screen->post_type === 'page') {
    global $post;
    if ($post && $post->post_name) {
      $classes .= ' page-slug-' . $post->post_name;
    }
  }
  return $classes;
});
