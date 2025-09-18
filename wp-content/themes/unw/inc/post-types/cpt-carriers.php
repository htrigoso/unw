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
    'supports'           => ['title', 'editor', 'excerpt', 'thumbnail'],
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

add_filter( 'rank_math/frontend/title', function( $title ) {
    global $post;

    // Solo procesar si estamos en una entrada/página individual
    if ( ! is_singular() || ! $post ) {
        return $title;
    }

    // 1. Verificar si hay título manual en Rank Math
    $manual_title = get_post_meta( $post->ID, 'rank_math_title', true );
    if ( ! empty( $manual_title ) ) {
        // Si hay título manual, aplicar las variables de Rank Math
        return \RankMath\Helper::replace_vars( $manual_title, $post );
    }

    // 2. Si no hay título manual, usar plantilla personalizada
    $template = '%title% %sep% %sitename%';

    // Verificar que la clase Helper existe antes de usarla
    if ( class_exists( '\RankMath\Helper' ) ) {
        return \RankMath\Helper::replace_vars( $template, $post );
    }

    // 3. Fallback manual si Helper no está disponible
    $site_title = get_bloginfo( 'name' );
    $separator = '|'; // o el separador que uses
    $post_title = get_the_title( $post->ID );

    return $post_title . ' ' . $separator . ' ' . $site_title;
}, 10, 1 );

add_filter( 'rank_math/frontend/description', function( $desc ) {
    global $post;

    // --- 1) Si es página/post/CPT ---
    if ( $post && is_singular( get_post_types( [ 'public' => true ] ) ) ) {
        // 1. Meta description manual escrita en Rank Math
        $manual_desc = get_post_meta( $post->ID, 'rank_math_description', true );
        if ( ! empty( $manual_desc ) ) {
            return $manual_desc;
        }

        // 2. Excerpt si existe
        if ( has_excerpt( $post->ID ) ) {
            return get_the_excerpt( $post->ID );
        }

        // 3. Fallback genérico
        return $desc;
    }


    // --- 2) Si es taxonomía (ej. facultad) ---
    $term = unw_get_faculty_term();
    if ( $term ) {
        $custom_desc = get_term_meta( $term->term_id, 'rank_math_description', true );
        if ( $custom_desc ) {
            return $custom_desc;
        }
        if ( ! empty( $term->description ) ) {
            return $term->description;
        }
        return 'Descubre todas las carreras de la facultad de ' . $term->name . ' en UNW.';
    }

    // --- 3) Si nada aplica, devolver lo que Rank Math ya traía ---
    return $desc;
});

add_filter( 'rank_math/frontend/canonical', function( $canonical ) {
    global $post;

    if ( $post ) {
        // Siempre devolver la URL real del post/página/CPT
        return get_permalink( $post->ID );
    }

    // Si no hay post en contexto, dejar lo que Rank Math defina
    return $canonical;
});

add_filter( 'wp_unique_post_slug', function( $slug, $post_ID, $post_status, $post_type, $post_parent, $original_slug ) {
    if ( $post_type === 'carreras' ) {
        // No alteres el slug, aunque exista duplicado
        return $original_slug;
    }
    return $slug;
}, 10, 6 );

add_filter('admin_post_thumbnail_html', function($content, $post_id) {
    if (get_post_type($post_id) === 'carreras') {
        $content .= '<p><em>Tamaño recomendado: 315×186px</em></p>';
    }
    return $content;
}, 10, 2);


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

add_filter('query_vars', function ($vars) {
  $vars[] = 'carrera_slug';
   $vars[] = 'facultad';
    $vars[] = 'modalidad_slug';
  return $vars;
});


// REWRITE RULES
add_action('init', 'custom_carreras_rewrite_rules');
function custom_carreras_rewrite_rules() {
  // SINGLE carrera presencial
  add_rewrite_rule(
    '^carreras/([^/]+)/?$',
    'index.php?post_type=carreras&carrera_slug=$matches[1]&modalidad_slug=presencial',
    'top'
  );

  // SINGLE carrera virtual
  add_rewrite_rule(
    '^carreras-a-distancia/([^/]+)/?$',
    'index.php?post_type=carreras&carrera_slug=$matches[1]&modalidad_slug=virtual',
    'top'
  );


  // LISTADO por facultad presencial
  add_rewrite_rule(
    '^carreras-uwiener/([^/]+)/?$',
    'index.php?pagename=carreras-uwiener&facultad=$matches[1]&modalidad_slug=presencial',
    'top'
  );


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
function get_carreras_filter_url($facultad_slug, $base_page = 'carreras') {
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

//////******* */
// Función para obtener el ID del término de facultad actual
function get_current_facultad_id() {
    $facultad_slug = get_query_var('facultad_filter');
    if (empty($facultad_slug)) {
        return 0;
    }

    $term = get_term_by('slug', $facultad_slug, 'facultad');
    return ($term && !is_wp_error($term)) ? $term->term_id : 0;
}


// Función para obtener el ID del término de modalidad actual
function get_current_modalidad_id() {
    $modalidad_slug = get_query_var('modalidad_filter');
    if (empty($modalidad_slug)) {
        return 0;
    }

    $term = get_term_by('slug', $modalidad_slug, 'modalidad');
    return ($term && !is_wp_error($term)) ? $term->term_id : 0;
}

function get_current_term_id() {
    // Prioridad: facultad primero, luego modalidad
    $facultad_id = get_current_facultad_id();
    if ($facultad_id > 0) {
        return $facultad_id;
    }

    return get_current_modalidad_id();
}


// Función para obtener el slug de facultad actual
function get_current_facultad_slug() {
    return get_query_var('facultad');
}

// Función para obtener el slug de modalidad actual
function get_current_modalidad_slug() {
    return get_query_var('modalidad');
}


// Función para obtener el slug del término activo (cualquier taxonomía)
function get_current_term_slug() {
    // Prioridad: facultad primero, luego modalidad
    $facultad_slug = get_current_facultad_slug();
    if (!empty($facultad_slug)) {
        return $facultad_slug;
    }

    return get_current_modalidad_slug();
}



function get_facultad_taxonomy_name( $post_id = null ) {
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }

    $terms = get_the_terms( $post_id, 'facultad' );

    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
        return $terms[0]->name; // devuelve solo el nombre del primer término
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

//////////
// 1) Reemplaza la columna automática por una personalizada "Facultades"
add_filter('manage_edit-carreras_columns', function ($cols) {
  if (isset($cols['taxonomy-facultad'])) {
    unset($cols['taxonomy-facultad']); // quitar la generada por WP
  }
  // Inserta nuestra columna en una posición razonable (después del título)
  $new = [];
  foreach ($cols as $k => $v) {
    $new[$k] = $v;
    if ($k === 'title') {
      $new['facultad_col'] = 'Facultades';
    }
  }
  return $new;
});

// 2) Contenido de la columna: enlaces que filtran con taxonomy=facultad&term=<slug>
add_action('manage_carreras_posts_custom_column', function ($col, $post_id) {
  if ($col !== 'facultad_col') return;

  $terms = get_the_terms($post_id, 'facultad');
  if (empty($terms) || is_wp_error($terms)) {
    echo '<span style="opacity:.6">—</span>';
    return;
  }

  $links = [];
  foreach ($terms as $t) {
    $url = add_query_arg(
      [
        'post_type' => 'carreras',
        'taxonomy'  => 'facultad',
        'term'      => $t->slug,
      ],
      admin_url('edit.php')
    );
    $links[] = sprintf('<a href="%s">%s</a>', esc_url($url), esc_html($t->name));
  }
  echo implode(', ', $links);
}, 10, 2);

// 3) (Opcional pero útil) Aceptar &facultad=slug y también taxonomy/term al listar
add_action('parse_query', function ($query) {
  if (!is_admin()) return;
  global $pagenow;
  if ($pagenow !== 'edit.php') return;
  if ($query->get('post_type') !== 'carreras') return;

  // Soporta ?facultad=slug
  if (!empty($_GET['facultad'])) {
    $slug = sanitize_text_field(wp_unslash($_GET['facultad']));
    $tax_query = (array) $query->get('tax_query');
    $tax_query[] = [
      'taxonomy' => 'facultad',
      'field'    => 'slug',
      'terms'    => $slug,
    ];
    $query->set('tax_query', $tax_query);
  }

  // Soporta ?taxonomy=facultad&term=slug (lo que generan nuestros enlaces)
  if (!empty($_GET['taxonomy']) && $_GET['taxonomy'] === 'facultad' && !empty($_GET['term'])) {
    $slug = sanitize_text_field(wp_unslash($_GET['term']));
    $tax_query = (array) $query->get('tax_query');
    $tax_query[] = [
      'taxonomy' => 'facultad',
      'field'    => 'slug',
      'terms'    => $slug,
    ];
    $query->set('tax_query', $tax_query);
  }
});

////////


function get_carrera_id_by_slug($slug) {
    if (empty($slug)) return 0;

    $query = new WP_Query([
        'post_type'      => 'carreras',
        'post_status'    => 'publish',
        'name'           => $slug,
        'posts_per_page' => 1,
        'fields'         => 'ids'
    ]);

    return $query->have_posts() ? $query->posts[0] : 0;
}

function get_carrera_id_by_slug_and_modalidad($slug, $modalidad_slug) {
  if (empty($slug) || empty($modalidad_slug)) return 0;

  $query = new WP_Query([
    'post_type'      => 'carreras',
    'post_status'    => 'publish',
    'posts_per_page' => -1, // Traer todos
    'tax_query' => [[
      'taxonomy' => 'modalidad',
      'field'    => 'slug',
      'terms'    => $modalidad_slug,
    ]]
  ]);

  if ($query->have_posts()) {
    foreach ($query->posts as $post) {
      if ($post->post_name === $slug) {
        return $post->ID;
      }
    }
  }

  return 0; // No encontrado
}

add_action('template_redirect', function () {

    $post_type    = get_query_var('post_type');
    $carrera_slug = get_query_var('carrera_slug');
    $modalidad_slug = get_query_var('modalidad_slug');

    if ($post_type === 'carreras' && $carrera_slug) {

        // 1) Buscar si existe carrera con ese slug
        $query = new WP_Query([
            'post_type'      => 'carreras',
            'name'           => $carrera_slug,
            'post_status'    => 'publish',
            'posts_per_page' => 1,
            'fields'         => 'ids',
            'tax_query'      => [[
                'taxonomy' => 'modalidad',
                'field'    => 'slug',
                'terms'    => $modalidad_slug,
            ]]
        ]);



        if ($query->have_posts()) {
            $post_id   = $query->posts[0];
            $canonical = get_permalink($post_id);

            // Forzar single-carreras.php
            global $wp_query, $post;
            $post = get_post($post_id);
            setup_postdata($post);

            $wp_query->is_single         = true;
            $wp_query->is_singular       = true;
            $wp_query->queried_object    = $post;
            $wp_query->queried_object_id = $post_id;
            $wp_query->post              = $post;
            $wp_query->posts             = [$post];
            $wp_query->post_count        = 1;
            $wp_query->found_posts       = 1;

            $template = get_single_template();
            if ($template) {
                include $template;
                exit;
            }
        }

        // 2) Si no es carrera, probar como facultad
        $term = get_term_by('slug', $carrera_slug, 'facultad');



        if ($term && !is_wp_error($term)) {
            // ✅ ES UNA FACULTAD - Mostrar listado filtrado

            // Configurar variables globales para el template
            global $wp_query, $post;

            // Crear un post dummy completo usando WP_Post
            $post_data = [
                'ID' => 0,
                'post_title' => $term->name,
                'post_name' => $term->slug,
                'post_type' => 'page',
                'post_status' => 'publish',
                'post_author' => 1,
                'post_date' => current_time('mysql'),
                'post_date_gmt' => current_time('mysql', 1),
                'post_content' => '',
                'post_excerpt' => '',
                'post_parent' => 0,
                'menu_order' => 0,
                'post_mime_type' => '',
                'comment_count' => 0,
                'filter' => 'raw'
            ];

            $post = new WP_Post((object) $post_data);

            // Configurar query vars que usa tu template
            set_query_var('facultad', $term->slug);
            set_query_var('modalidad_slug', $modalidad_slug);

            // Configurar WP_Query para que el template piense que está en una página
            $wp_query->is_page = true;
            $wp_query->is_singular = true;
            $wp_query->queried_object = $post;
            $wp_query->queried_object_id = 0;
            $wp_query->post = $post;
            $wp_query->posts = [$post];
            $wp_query->post_count = 1;
            $wp_query->found_posts = 1;

            // Cargar template de carreras virtuales

            $template_path = get_template_directory() . '/templates/template-careers-for-working-people.php';


            if (file_exists($template_path)) {
                include $template_path;
                exit;
            }
            return;

        }

        // 3) Ni carrera ni facultad -> 404 con fallbacks
        global $wp_query;
        $wp_query->set_404();
        status_header(404);
        nocache_headers();

        $template = get_404_template();
        if (!$template) {
            $template = locate_template(['404.php','index.php']);
        }
        if ($template) {
            include $template;
            exit;
        }
    }
});

add_action('pre_get_posts', function ($query) {
  global $pagenow;

  // Solo aplicar en admin, listado principal de carreras
  if (is_admin() && $pagenow === 'edit.php' && $query->get('post_type') === 'carreras' && !$query->get('orderby')) {
    $query->set('orderby', 'date');
    $query->set('order', 'DESC');
  }
});

function get_carreras_campus_modalidad() {
    $carreras = get_posts([
        'post_type'              => 'carreras',
        'posts_per_page'         => -1,
        'post_status'            => 'publish',
        'fields'                 => 'ids',
        'no_found_rows'          => true,
        'update_post_term_cache' => false,
        'update_post_meta_cache' => false,
    ]);

    $result = [];

    foreach ($carreras as $id) {
        $slug = get_post_field('post_name', $id);

        // Modalidad
        $modalidades = get_the_terms($id, 'modalidad');
        $modalidad   = ($modalidades && !is_wp_error($modalidades))
            ? sanitize_title($modalidades[0]->slug)
            : 'sin-modalidad';

        // 👇 Renombrar presencial → pregrado
        if ($modalidad === 'presencial') {
            $modalidad = 'pregrado';
        }

        // Campus
        $terms = get_the_terms($id, 'campus');

        if ($terms && !is_wp_error($terms)) {
            foreach ($terms as $term) {
                $result[$slug][$modalidad][] = [
                    'code'   => $term->description ?: '',
                    'campus' => $term->name,
                ];
            }
        } else {
             if (!isset($result[$slug][$modalidad])) {
                $result[$slug][$modalidad] = [];
            }
        }
    }

    return $result;
}


function get_carreras() {
    $carreras = get_posts([
        'post_type'              => 'carreras',
        'posts_per_page'         => -1,
        'post_status'            => 'publish',
        'orderby'                => 'title',
        'order'                  => 'ASC',
        'fields'                 => 'ids',
        'no_found_rows'          => true,
        'update_post_term_cache' => true,
        'update_post_meta_cache' => false,
    ]);

    $result = [
        'pregrado' => [],
        'virtual'  => [],
    ];

    foreach ($carreras as $id) {
        $title = get_the_title($id);
        $slug  = get_post_field('post_name', $id);

        // Facultad
        $facultades = get_the_terms($id, 'facultad');
        $facultad   = ($facultades && !is_wp_error($facultades))
            ? $facultades[0]->name
            : 'Sin facultad';

        // Modalidad
        $modalidades = get_the_terms($id, 'modalidad');
        $modalidad   = ($modalidades && !is_wp_error($modalidades))
            ? $modalidades[0]->slug
            : 'sin-modalidad';

        // Renombrar presencial → pregrado
        if ($modalidad === 'presencial') {
            $modalidad = 'pregrado';
        }

        // Si no es una modalidad esperada, lo mandamos a 'pregrado' por defecto
        if (!in_array($modalidad, ['pregrado', 'virtual'], true)) {
            $modalidad = 'pregrado';
        }

        // Campo ACF crm_code
        $code = get_post_meta($id, 'crm_code', true);

        // Agrupación: modalidad > facultad > carreras
        $result[$modalidad][$facultad][] = [
            'id'        => $id,
            'slug'      => $slug,
            'title'     => $title,
            'code'      => $code ?: '',
            'modalidad' => $modalidad,
        ];
    }

    return $result;
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

function get_carrera_modality_info($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }

    $terms = get_the_terms($post_id, 'modalidad');

    if ($terms && !is_wp_error($terms)) {
        $slugs = wp_list_pluck($terms, 'slug');

        if (in_array('virtual', $slugs, true)) {
            return [
                'label' => 'Carreras a distancia',
                'url'   => home_url('/carreras-a-distancia/'),
            ];
        }

        if (in_array('presencial', $slugs, true)) {
            return [
                'label' => 'Carreras',
                'url'   => home_url('/carreras-uwiener/'),
            ];
        }
    }

    // Fallback por defecto
    return [
        'label' => 'Carreras',
        'url'   => home_url('/carreras-uwiener/'),
    ];
}
/**
 * Construye la URL de listado de carreras por facultad
 *
 * @param string $faculty_slug    Slug de la facultad (ej: 'ingenieria')
 * @param string $modality_slug   Slug de la modalidad ('presencial' | 'virtual')
 * @return string URL final
 */
function _carreras_url_facultad($faculty_slug, $modality_slug = 'presencial') {
    if ($modality_slug === 'virtual') {
        return home_url("/carreras-a-distancia/{$faculty_slug}/");
    }
    return home_url("/carreras-uwiener/{$faculty_slug}/");
}


/**
 * Devuelve info de modalidad: label + url
 *
 * @param string|null $slug Slug de modalidad (presencial | virtual)
 * @return array {label, url}
 */
function get_carrera_modality_info_from_slug($slug = null) {
    if ($slug === 'virtual') {
        return [
            'label' => 'Carreras a distancia',
            'url'   => home_url('/carreras-a-distancia/'),
        ];
    }

    // fallback = presencial
    return [
        'label' => 'Carreras',
        'url'   => home_url('/carreras/'),
    ];
}

function render_careers_tabs_by_modality($modality_slug = 'presencial') {
    // =========================
    // Detectar facultad activa desde query var
    // =========================
    $current_faculty_id   = 0;
    $current_faculty_slug = get_query_var('facultad');

    if ($current_faculty_slug) {
        $term_obj = get_term_by('slug', $current_faculty_slug, 'facultad');
        if ($term_obj && !is_wp_error($term_obj)) {
            $current_faculty_id = (int) $term_obj->term_id;
        }
    }

    // =========================
    // Detectar modalidad desde query_var si existe
    // =========================
    $qv_modality = get_query_var('modalidad_slug');
    if (!empty($qv_modality)) {
        $modality_slug = $qv_modality;
    }

    // =========================
    // Helper para URLs limpias
    // =========================
    $build_faculty_url = function($faculty_slug, $modality_slug) {
        if ($modality_slug === 'virtual') {
            return home_url("/carreras-a-distancia/{$faculty_slug}/");
        }
        return home_url("/carreras-uwiener/{$faculty_slug}/");
    };

    // =========================
    // Construcción de Tabs
    // =========================
    $tabs = [
        [
            'id'     => 0,
            'label'  => 'Todas las carreras',
            'target' => 'todas-las-carreras',
             'status' => true,
            'url'    => ($modality_slug === 'virtual')
                          ? home_url('/carreras-a-distancia/')
                          : home_url('/carreras-uwiener/'),
        ],
    ];

    // 1. Obtener carreras de la modalidad
    $career_ids = get_posts([
        'post_type'      => 'carreras',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'fields'         => 'ids',
        'tax_query'      => [[
            'taxonomy' => 'modalidad',
            'field'    => 'slug',
            'terms'    => $modality_slug,
        ]],
    ]);

    // 2. Obtener facultades asociadas a esas carreras
    $faculties = [];
    if (!empty($career_ids)) {
        $faculties = wp_get_object_terms($career_ids, 'facultad', ['hide_empty' => true]);
    }

    if (!is_wp_error($faculties) && !empty($faculties)) {
        foreach ($faculties as $f) {
            $tabs[] = [
                'id'     => (int) $f->term_id,
                'label'  => $f->name,
                 'status' => true,
                'target' => $f->slug,
                'url'    => $build_faculty_url($f->slug, $modality_slug),
            ];
        }
    }

    // =========================
    // Query de carreras por modalidad + facultad (si aplica)
    // =========================
    $tax_query = [
        [
            'taxonomy' => 'modalidad',
            'field'    => 'slug',
            'terms'    => $modality_slug,
        ],
        [
            'taxonomy' => 'facultad',
            'operator' => 'EXISTS',
        ],
    ];

    if ($current_faculty_slug) {
        $tax_query[] = [
            'taxonomy' => 'facultad',
            'field'    => 'slug',
            'terms'    => $current_faculty_slug,
        ];
    }

    $careers_query = new WP_Query([
        'post_type'           => 'carreras',
        'post_status'         => 'publish',
        'posts_per_page'      => -1,
        'orderby'             => 'date',
        'order'               => 'DESC',
        'ignore_sticky_posts' => true,
        'tax_query'           => $tax_query,
    ]);

    $careers_posts = $careers_query->posts;
    ?>
<div class="all-careers-tabs">
  <div class="x-container all-careers-tabs__container">
    <?php
        get_template_part(COMMON_CONTENT_PATH, 'nav-tabs', [
            'nav_tabs'  => $tabs,
            'is_url'    => true,

            'active_id' => $current_faculty_id,
            'show_controls' => true
        ]);
        ?>
  </div>

  <div class="x-container x-container--pad-213">
    <div class="all-careers-tabs__content">
      <div class="tab__content" role="tabpanel" aria-labelledby="tab">
        <?php
            $cards = [];
            foreach ($careers_posts as $career) {
                $img = get_the_post_thumbnail_url($career->ID, 'full');
                $cards[] = [
                    'image'       => $img,
                    'image_alt'   => $career->post_title,
                    'title'       => $career->post_title,
                    'link'        => get_permalink($career->ID),
                    'link_title'  => 'Ver carrera',
                    'link_target' => '_blank',
                ];
            }
            get_template_part(ALL_CAREERS_TABS_PATH, 'body', ['cards' => $cards]);
            ?>
      </div>
    </div>
  </div>
</div>
<?php
}
