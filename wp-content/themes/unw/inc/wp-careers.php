<?php

function uw_get_modalities_options()
{
  return [
    '' => '--Seleccione--',
    'presencial' => 'Presencial',
    'semipresencial' => '100% virtual',
    'presencial_semipresencial' => 'Presencial, 100% virtual',
  ];
}

add_filter('acf/load_field/name=modalities', function ($field) {
  $field['choices'] = uw_get_modalities_options();
  return $field;
});

function uw_terms_to_string($terms)
{
  if (empty($terms) || !is_array($terms)) {
    return '';
  }

  // Extraer solo los nombres
  $names = wp_list_pluck($terms, 'name');

  // Unir todos los nombres con comas
  return implode(', ', $names);
}

function render_html_all_careers($args = [])
{

  // Valores por defecto
  $defaults = [
    'current_faculty_id' => 0,
    'post_type'          => 'carreras',
    'taxonomy'           => 'categoria-carrera',
    'title_global'       => 'Carreras',
  ];


  // Mezclamos defaults con los valores recibidos
  $args = wp_parse_args($args, $defaults);

  extract($args);
  // Ahora tienes disponibles:
  // $current_faculty_id, $post_type, $taxonomy, $title_global

  $base_url = $post_type === 'carreras'
    ? home_url('/carreras-uwiener')
    : home_url('/carreras-a-distancia');

  // 👉 Hero
  $hero_img_desktop = null;
  $hero_img_mobile  = null;
  $hero_title       = null;

  if ($current_faculty_id == 0) {
    $hero_data = get_field('hero');
    if (!empty($hero_data)) {
      $hero_title       = $title_global;
      $hero_img_desktop = $hero_data['images']['desktop']['url'] ?? '';
      $hero_img_mobile  = $hero_data['images']['mobile']['url'] ?? '';
    }
  } else {
    $images = get_field('hero_slider', $taxonomy . '_' . $current_faculty_id);

    if (!empty($images['list_of_files'])) {
      $first_file = $images['list_of_files'][0] ?? null;
      if ($first_file && !empty($first_file['images'])) {
        $hero_img_desktop = $first_file['images']['desktop']['url'] ?? '';
        $hero_img_mobile  = $first_file['images']['mobile']['url'] ?? '';
      }

      $term_obj = get_term($current_faculty_id, $taxonomy);

      if (empty($hero_title) && $term_obj && !is_wp_error($term_obj)) {
        $hero_title = $term_obj->description;
      }
    }
  }

  // 👉 Query de carreras
  $query_args = [
    'post_type'      => $post_type,
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'orderby'        => 'title',
    'order'          => 'ASC',
  ];

  if ($current_faculty_id > 0) {
    $query_args['tax_query'] = [[
      'taxonomy' => $taxonomy,
      'field'    => 'term_id',
      'terms'    => (int) $current_faculty_id,
    ]];
  }

  $careers_query = new WP_Query($query_args);

  // 👉 Tabs
  $facultades = get_terms([
    'taxonomy'   => $taxonomy,
    'hide_empty' => true,
  ]);

  $tabs = [[
    'id'     => 0,
    'label'  => 'Todas las carreras',
    'status' => true,
    'target' => 'todas-las-carreras',
    'url'    => $base_url . '/',
  ]];

  if (!is_wp_error($facultades) && !empty($facultades)) {
    foreach ($facultades as $facultad) {
      $tabs[] = [
        'id'     => $facultad->term_id,
        'label'  => $facultad->name,
        'target' => $facultad->slug,
        'status' => true,
        'url'    => $base_url . '/' . $facultad->slug,
      ];
    }
  }

  // 👉 Breadcrumb
  $breadcrumb = [
    ['label' => 'Inicio', 'href' => home_url('/')],
    ['label' => $title_global, 'href' => $base_url],
  ];

  if ($current_faculty_id > 0) {
    $term_obj = get_term($current_faculty_id, $taxonomy);
    if ($term_obj && !is_wp_error($term_obj)) {
      $breadcrumb[] = [
        'label' => $term_obj->name,
        'href'  => '',
      ];
    }
  }

  // 👉 Render hero
  get_template_part(ALL_CAREERS_CONTENT_PATH, 'hero', [
    'hero_slide' => [
      'img_desktop' => $hero_img_desktop,
      'img_mobile'  => $hero_img_mobile,
      'alt'         => $hero_title,
      'title'       => $hero_title,
      'breadcrumbs' => $breadcrumb,
      'variant'     => 'primary'
    ]
  ]);

  // 👉 Render tabs
  get_template_part(ALL_CAREERS_TABS_PATH, 'tabs', [
    'tabs'              => $tabs,
    'mode'              => $post_type === 'carreras-a-distancia' ? 'virtual' : 'presencial',
    'current_faculty_id' => $current_faculty_id,
    'careers_posts'     => $careers_query->posts,
  ]);
}



function render_only_careers($args = [])
{
  // Valores por defecto
  $defaults = [
    'mode'         => 'presencial',
    'title_global' => 'Carreras',
    'base_url'     => home_url('/carreras-uwiener/'),
    'data_form'    => [
      'desktop' => 'careers-desktop',
      'mobile'  => 'careers-mobile'
    ],
  ];

  // Mezclar defaults con lo recibido
  $args = wp_parse_args($args, $defaults);
  extract($args);

  // Hero
  get_template_part(CAREERS_CONTENT_PATH, 'hero', [
    'data-form' => $data_form,
    'mode'      => $mode,
    'title'     => $title_global,
    'url'       => $base_url,
  ]);

  // Tabs
  get_template_part(CAREERS_TABS_PATH, 'tabs', [
    'data-form' => $data_form,
    'mode'      => $mode,
    'title'     => $title_global,
    'url'       => $base_url,
  ]);
}


/**
 * Obtiene carreras filtradas por facultad
 *
 * @param int $term_id ID del término de la facultad
 * @param string $modalidad 'pregrado', 'virtual', o null para ambas
 * @return array Carreras filtradas
 */
function get_carreras_by_facultad($term_id = null, $modalidad = null) {
  if (!$term_id) {
    return get_carreras();
  }

  $tax_args = [
    'post_type'              => ['carreras', 'carreras-a-distancia'],
    'posts_per_page'         => -1,
    'post_status'            => 'publish',
    'orderby'                => 'title',
    'order'                  => 'ASC',
    'fields'                 => 'ids',
    'no_found_rows'          => true,
    'update_post_term_cache' => true,
    'update_post_meta_cache' => false,
    'tax_query'              => [
      'relation' => 'OR',
      [
        'taxonomy' => 'categoria-carrera',
        'field'    => 'term_id',
        'terms'    => $term_id,
      ],
      [
        'taxonomy' => 'categoria-carrera-distancia',
        'field'    => 'term_id',
        'terms'    => $term_id,
      ],
    ],
  ];

  $filtered_carreras = get_posts($tax_args);

  $result = [
    'pregrado' => [],
    'virtual'  => [],
  ];

  foreach ($filtered_carreras as $id) {
    $title = get_the_title($id);
    $slug  = get_post_field('post_name', $id);
    $post_type = get_post_type($id);

    $mod = $post_type === 'carreras-a-distancia' ? 'virtual' : 'pregrado';

    // Filtrar por modalidad si se especifica
    if ($modalidad && $modalidad !== $mod) {
      continue;
    }

    $taxonomy = $mod === 'virtual' ? 'categoria-carrera-distancia' : 'categoria-carrera';
    $facultades = get_the_terms($id, $taxonomy);
    $facultad = ($facultades && !is_wp_error($facultades)) ? $facultades[0]->name : 'Sin facultad';

    $code_pre = get_post_meta($id, 'crm_code', true);
    $code_vir = get_post_meta($id, 'crm_code_virtual', true);

    $result[$mod][$facultad][] = [
      'id'        => $id,
      'slug'      => $slug,
      'title'     => $title,
      'modalidad' => $mod,
      'code'      => $mod === 'pregrado' ? $code_pre : $code_vir,
    ];
  }

  return $result;
}


function get_carreras()
{
  // Traemos todos los posts de ambos CPT
  $all_carreras = get_posts([
    'post_type'              => ['carreras', 'carreras-a-distancia'],
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
    'pregrado' => [], // carreras presenciales
    'virtual'  => [], // carreras a distancia
  ];

  foreach ($all_carreras as $id) {
    $title = get_the_title($id);
    $slug  = get_post_field('post_name', $id);
    $post_type = get_post_type($id);


    // Modalidad según el CPT
    $modalidad = $post_type === 'carreras-a-distancia' ? 'virtual' : 'pregrado';

    // Taxonomía correspondiente
    $taxonomy = $modalidad === 'virtual' ? 'categoria-carrera-distancia' : 'categoria-carrera';

    // Facultad
    $facultades = get_the_terms($id, $taxonomy);
    $facultad   = ($facultades && !is_wp_error($facultades))
      ? $facultades[0]->name
      : 'Sin facultad';

    // Código CRM (ACF/meta)
    $code_pre = get_post_meta($id, 'crm_code', true);
    $code_vir = get_post_meta($id, 'crm_code_virtual', true);


    // Agrupar en el array final
    $result[$modalidad][$facultad][] = [
      'id'        => $id,
      'slug'      => $slug,
      'title'     => $title,
      'modalidad' => $modalidad,
      'code'      => $modalidad === 'pregrado' ? $code_pre : $code_vir,
    ];
  }

  return $result;
}



function get_carreras_campus_modalidad()
{
  $carreras = get_posts([
    'post_type'              => ['carreras', 'carreras-a-distancia'],
    'posts_per_page'         => -1,
    'post_status'            => 'publish',
    'fields'                 => 'ids',
    'no_found_rows'          => true,
    'update_post_term_cache' => true,
    'update_post_meta_cache' => false,
  ]);

  $result = [];

  foreach ($carreras as $id) {
    $slug      = get_post_field('post_name', $id);
    $post_type = get_post_type($id);

    // Modalidad según CPT
    $modalidad = ($post_type === 'carreras-a-distancia') ? 'virtual' : 'pregrado';

    // Campus (taxonomía compartida)
    $campus_terms = get_the_terms($id, 'campus');

    if ($campus_terms && !is_wp_error($campus_terms)) {
      foreach ($campus_terms as $term) {
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
