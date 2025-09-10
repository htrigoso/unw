<?php
// =========================
// Resolver término activo (ID) desde helper o desde el slug actual
// =========================
$current_id = get_current_term_id();
if (!$current_id) {
  $slug_actual = get_current_facultad_slug(); // lee query var 'facultad'
  if ($slug_actual) {
    $term_obj   = get_term_by('slug', $slug_actual, 'facultad');
    $current_id = ($term_obj && !is_wp_error($term_obj)) ? (int) $term_obj->term_id : 0;
  }
}

// =========================
// Filtros activos (slugs)
// =========================
$facultad_slug  = get_current_facultad_slug();   // ej: comunicaciones (para el query de cards)
$modalidad_slug = get_current_modalidad_slug();  // ej: presencial | virtual

// =========================
// Construir TABS por FACULTAD
// - Si NO hay modalidad => mostrar TODAS las facultades
// - Si hay modalidad    => mostrar solo facultades que tengan carreras en esa modalidad
// =========================

// Helper URL: /carreras/facultad/{slug}/ y si hay modalidad activa: ?modalidad=...
function _carreras_url_facultad($slug_fac, $slug_mod_actual = '') {
  $url = home_url("/carreras/facultad/{$slug_fac}/");
  if (!empty($slug_mod_actual)) {
    $url = add_query_arg('modalidad', $slug_mod_actual, $url);
  }
  return $url;
}

// Tab inicial "Todas las carreras"
$tabs = [
  [
    'id'     => 0,
    'label'  => 'Todas las carreras',
    'target' => 'todas-las-carreras',
    'url'    => !empty($modalidad_slug)
                  ? add_query_arg('modalidad', $modalidad_slug, home_url('/carreras/'))
                  : home_url('/carreras/')
  ],
];

if (empty($modalidad_slug)) {
  // ---- Caso base: /carreras/ (sin modalidad) => mostrar TODAS las facultades
  $facultades = get_terms([
    'taxonomy'   => 'facultad',
    'hide_empty' => false, // muéstralas todas; pon true si quieres ocultar las sin posts
  ]);

  if (!is_wp_error($facultades) && !empty($facultades)) {
    foreach ($facultades as $f) {
      $tabs[] = [
        'id'     => (int) $f->term_id,
        'label'  => $f->name,
        'target' => $f->slug,
        'url'    => _carreras_url_facultad($f->slug, /* no hay modalidad */ ''),
      ];
    }
  }
} else {
  // ---- Con modalidad activa => solo facultades con carreras en esa modalidad
  // 1) Buscar carreras con la modalidad seleccionada
  $q_fac_for_tabs = new WP_Query([
    'post_type'      => 'carreras',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'fields'         => 'ids',
    'tax_query'      => [
      [
        'taxonomy' => 'modalidad',
        'field'    => 'slug',
        'terms'    => $modalidad_slug,
      ],
    ],
  ]);


  // 2) Recolectar IDs de términos 'facultad' presentes en esas carreras
  $facultad_ids_for_tabs = [];
  if (!empty($q_fac_for_tabs->posts)) {
    foreach ($q_fac_for_tabs->posts as $pid) {
      $terms = wp_get_post_terms($pid, 'facultad');
      if (!empty($terms) && !is_wp_error($terms)) {
        foreach ($terms as $t) {
          $facultad_ids_for_tabs[$t->term_id] = true;
        }
      }
    }
  }
  $facultad_ids_for_tabs = array_keys($facultad_ids_for_tabs);

  // 3) Cargar SOLO las facultades detectadas
  if (!empty($facultad_ids_for_tabs)) {
    $facultades = get_terms([
      'taxonomy'   => 'facultad',
      'hide_empty' => false,
      'include'    => $facultad_ids_for_tabs,
    ]);
  } else {
    $facultades = [];
  }

  if (!is_wp_error($facultades) && !empty($facultades)) {
    foreach ($facultades as $f) {
      $tabs[] = [
        'id'     => (int) $f->term_id,
        'label'  => $f->name,
        'target' => $f->slug,
        'url'    => _carreras_url_facultad($f->slug, $modalidad_slug),
      ];
    }
  }
}

// =========================
// Query de cards: por facultad + modalidad (si la hay en URL)
// - Y si no hay filtros, exigir que tengan facultad y modalidad
// =========================
$tax_query = ['relation' => 'AND'];

if ($facultad_slug && $modalidad_slug) {
  $tax_query[] = [
    'taxonomy' => 'facultad',
    'field'    => 'slug',
    'terms'    => $facultad_slug,
  ];
  $tax_query[] = [
    'taxonomy' => 'modalidad',
    'field'    => 'slug',
    'terms'    => $modalidad_slug,
  ];
} elseif ($facultad_slug) {
  $tax_query[] = [
    'taxonomy' => 'facultad',
    'field'    => 'slug',
    'terms'    => $facultad_slug,
  ];
  $tax_query[] = [
    'taxonomy' => 'modalidad',
    'operator' => 'EXISTS',
  ];
} elseif ($modalidad_slug) {
  $tax_query[] = [
    'taxonomy' => 'modalidad',
    'field'    => 'slug',
    'terms'    => $modalidad_slug,
  ];
  $tax_query[] = [
    'taxonomy' => 'facultad',
    'operator' => 'EXISTS',
  ];
} else {
  // Sin filtros: exigir que tenga facultad y modalidad
  $tax_query[] = [
    'taxonomy' => 'facultad',
    'operator' => 'EXISTS',
  ];
  $tax_query[] = [
    'taxonomy' => 'modalidad',
    'operator' => 'EXISTS',
  ];
}

$carreras_query = new WP_Query([
  'post_type'      => 'carreras',
  'post_status'    => 'publish',
  'posts_per_page' => -1,
  'tax_query'      => $tax_query,
  'orderby' => 'date',
  'order'          => 'DESC'
]);

$carreras_posts = !empty($carreras_query->posts) ? $carreras_query->posts : [];

?>

<div class="all-careers-tabs">
  <div class="x-container all-careers-tabs__container">
    <?php
    get_template_part(COMMON_CONTENT_PATH, 'nav-tabs', [
      'nav_tabs'  => $tabs,
      'is_url'    => true,
      'active_id' => $current_id, // activa la facultad actual (o 0 para "todas")
    ]);
    ?>
  </div>

  <div class="x-container x-container--pad-213">
    <div class="all-careers-tabs__content">
      <div class="tab__content" role="tabpanel" aria-labelledby="tab">
        <?php
        $cards = [];
        foreach ($carreras_posts as $carrera) {
          $img = get_the_post_thumbnail_url($carrera->ID, 'full');
          $cards[] = [
            'image'       => $img, // sin fallback: si no hay, que tu partial 'body' lo maneje
            'image_alt'   => $carrera->post_title,
            'title'       => $carrera->post_title,
            'link'        => get_permalink($carrera->ID),
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