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
    'menu_icon'          => 'dashicons-book',
    'supports'           => ['title',  'thumbnail']
  ];

  register_post_type('carreras', $args);
}



//***************** */
// Metabox con radio buttons para MODALIDAD
// Metabox con radio buttons para MODALIDAD (SIN opción "Ninguna")
// Metabox con radio buttons para MODALIDAD (Presencial por defecto y primero)
function modalidad_meta_box_radio($post, $box) {
 $defaults = ['taxonomy' => 'modalidad'];
 if (!isset($box['args']) || !is_array($box['args'])) {
   $args = [];
 } else {
   $args = $box['args'];
 }

 $r = wp_parse_args($args, $defaults);
 $tax_name = esc_attr($r['taxonomy']);
 $taxonomy = get_taxonomy($r['taxonomy']);
 $terms = wp_get_post_terms($post->ID, $tax_name);
 $current_term = !empty($terms) ? $terms[0]->term_id : 0;
 $all_terms = get_terms(['taxonomy' => $tax_name, 'hide_empty' => false]);

 echo '<div id="taxonomy-' . $tax_name . '">';
 echo '<ul>';

 // Buscar término "presencial" y mostrarlo primero
 $presencial_term = null;
 $otros_terms = [];

 foreach ($all_terms as $term) {
   if ($term->slug === 'presencial') {
     $presencial_term = $term;
   } else {
     $otros_terms[] = $term;
   }
 }

 // Mostrar presencial primero y seleccionado por defecto si no hay selección
 if ($presencial_term) {
   $is_checked = ($current_term == $presencial_term->term_id) || ($current_term == 0);
   echo '<li><label><input type="radio" name="tax_input[' . $tax_name . '][]" value="' . $presencial_term->term_id . '" ' . checked(true, $is_checked, false) . '> ' . $presencial_term->name . '</label></li>';
 }

 // Mostrar el resto de términos
 foreach ($otros_terms as $term) {
   echo '<li><label><input type="radio" name="tax_input[' . $tax_name . '][]" value="' . $term->term_id . '" ' . checked($term->term_id, $current_term, false) . '> ' . $term->name . '</label></li>';
 }

 echo '</ul>';
 echo '</div>';
}

// La taxonomía categoria_carrera usará el metabox de checkboxes por defecto de WordPress



// PERMALINKS PERSONALIZADOS basados en modalidad
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

// REWRITE RULES
add_action('init', 'custom_carreras_rewrite_rules');
function custom_carreras_rewrite_rules() {
  // Virtuales: carreras-a-distancia
  add_rewrite_rule('^carreras-a-distancia/([^/]+)/?$', 'index.php?carreras=$matches[1]', 'top');

  // Presenciales: carreras
  add_rewrite_rule('^carreras/([^/]+)/?$', 'index.php?carreras=$matches[1]', 'top');


  add_rewrite_rule('^carreras-uwiener/([^/]+)/?$', 'index.php?pagename=carreras-uwiener&facultad_filter=$matches[1]', 'top');
}



// FUNCIÓN HELPER para obtener carreras por modalidad y categoría(s)
function get_carreras_by_filters($modalidad = '', $categorias = []) {
  $args = [
    'post_type' => 'carreras',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'tax_query' => []
  ];

  if ($modalidad) {
    $args['tax_query'][] = [
      'taxonomy' => 'modalidad',
      'field'    => 'slug',
      'terms'    => $modalidad,
    ];
  }

  if (!empty($categorias)) {
    // Si es string, convertir a array
    if (is_string($categorias)) {
      $categorias = [$categorias];
    }

    $args['tax_query'][] = [
      'taxonomy' => 'categoria_carrera',
      'field'    => 'slug',
      'terms'    => $categorias,
      'operator' => 'IN' // Cualquiera de las categorías (OR)
      // Usar 'AND' si quieres que tenga TODAS las categorías
    ];
  }

  if (count($args['tax_query']) > 1) {
    $args['tax_query']['relation'] = 'AND';
  }

  return new WP_Query($args);
}

// FUNCIÓN HELPER para obtener carreras que tengan TODAS las categorías especificadas
function get_carreras_with_all_categories($modalidad = '', $categorias = []) {
  if (empty($categorias)) {
    return get_carreras_by_filters($modalidad);
  }

  $args = [
    'post_type' => 'carreras',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'tax_query' => []
  ];

  if ($modalidad) {
    $args['tax_query'][] = [
      'taxonomy' => 'modalidad',
      'field'    => 'slug',
      'terms'    => $modalidad,
    ];
  }

  // Si es string, convertir a array
  if (is_string($categorias)) {
    $categorias = [$categorias];
  }

  $args['tax_query'][] = [
    'taxonomy' => 'facultad',
    'field'    => 'slug',
    'terms'    => $categorias,
    'operator' => 'AND' // Debe tener TODAS las categorías
  ];

  if (count($args['tax_query']) > 1) {
    $args['tax_query']['relation'] = 'AND';
  }

  return new WP_Query($args);
}

// FUNCIÓN HELPER para obtener todas las categorías de una carrera
function get_carrera_categories($post_id) {
  $terms = wp_get_post_terms($post_id, 'facultad');
  if (empty($terms) || is_wp_error($terms)) {
    return [];
  }
  return $terms;
}

// FUNCIÓN HELPER para verificar si una carrera pertenece a una categoría específica
function carrera_has_category($post_id, $category_slug) {
  return has_term($category_slug, 'facultad', $post_id);
}


/////*****otros ******/////


// Agregar query var para el filtro de facultad
add_filter('query_vars', 'add_facultad_query_var');
function add_facultad_query_var($vars) {
    $vars[] = 'facultad_filter';
    return $vars;
}

// Función para obtener el filtro actual desde la URL
function get_current_facultad_filter() {
    return get_query_var('facultad_filter');
}

// Función para generar URL de filtro por facultad
function get_carreras_filter_url($facultad_slug, $base_page = 'carreras-uwiener') {
    return home_url("/{$base_page}/{$facultad_slug}/");
}

// Función para obtener carreras filtradas por facultad
function get_carreras_by_facultad_filter($facultad_slug = '', $modalidad = '') {
    $args = [
        'post_type' => 'carreras',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'tax_query' => []
    ];

    if ($facultad_slug) {
        $args['tax_query'][] = [
            'taxonomy' => 'facultad',
            'field'    => 'slug',
            'terms'    => $facultad_slug,
        ];
    }

    if ($modalidad) {
        $args['tax_query'][] = [
            'taxonomy' => 'modalidad',
            'field'    => 'slug',
            'terms'    => $modalidad,
        ];
    }

    if (count($args['tax_query']) > 1) {
        $args['tax_query']['relation'] = 'AND';
    }

    return new WP_Query($args);
}