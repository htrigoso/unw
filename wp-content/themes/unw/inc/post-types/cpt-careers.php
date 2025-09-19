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

    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => 5,
    'menu_icon'          => 'dashicons-book',
    'supports'           => ['title', 'excerpt', 'thumbnail'],
    'show_in_rest'       => true
  ];

  register_post_type('carreras', $args);
}


function unw_get_faculty_term() {
    $facultad_slug = get_query_var('facultad');
    if ( ! $facultad_slug ) {
        return null;
    }
    $term = get_term_by('slug', $facultad_slug, 'facultad');
    return ($term && ! is_wp_error($term)) ? $term : null;
}



add_filter('admin_post_thumbnail_html', function($content, $post_id) {
    if (get_post_type($post_id) === 'carreras') {
        $content .= '<p><em>Tamaño recomendado: 315×186px</em></p>';
    }
    return $content;
}, 10, 2);




/// No tocar
function get_facultad_taxonomy_name( $post_id = null ) {
     if ( ! $post_id ) {
        $post_id = get_the_ID();
    }

    // Detectar el post type
    $post_type = get_post_type( $post_id );

    // Escoger la taxonomía según el CPT
    $taxonomy = $post_type === 'carreras-a-distancia'
        ? 'categoria-carrera-distancia'
        : 'categoria-carrera';

    // Obtener los términos
    $terms = get_the_terms( $post_id, $taxonomy );

    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
        return $terms[0]->name; // solo el primero
    }

    return '';
}

function get_current_page_title() {
    if ( is_singular() ) {
        // Para posts, páginas o CPT
        return get_the_title();
    } elseif ( is_home() || is_front_page() ) {
        // Página de inicio o blog
        return get_bloginfo( 'name' );
    } elseif ( is_category() || is_tag() || is_tax() ) {
        // Términos de taxonomía
        return single_term_title( '', false );
    } elseif ( is_post_type_archive() ) {
        // Archivo de CPT
        return post_type_archive_title( '', false );
    } elseif ( is_archive() ) {
        // Archivos en general (fecha, autor, etc.)
        return get_the_archive_title();
    } elseif ( is_search() ) {
        // Página de búsqueda
        return sprintf( 'Resultados de búsqueda para: %s', get_search_query() );
    } elseif ( is_404() ) {
        return 'Página no encontrada';
    }

    return '';
}













function get_campus_by_carrera_id($carrera_id) {
    if (empty($carrera_id) || !is_numeric($carrera_id)) {
        return [];
    }

    $terms = get_the_terms($carrera_id, 'campus');
    if (!$terms || is_wp_error($terms)) {
        return [];
    }

    $result = [];
    foreach ($terms as $term) {
        $result[] = [
            'code'   => $term->description ?: '',
            'campus' => $term->name,
        ];
    }

    return $result;
}
