<?php
/**
 * Template Name: Todas las Carreras Template
 */
?>
<?php set_query_var('ASSETS_CHUNK_NAME', 'all-careers'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main>
  <?php
  // === Term actual por slug de query var 'facultad' ===
  $facultad_slug = get_query_var('facultad');
  $term_obj = null;
  $current_id_term = 0;

  if ($facultad_slug) {
    $term_obj = get_term_by('slug', $facultad_slug, 'facultad');
    $current_id_term = ($term_obj && !is_wp_error($term_obj)) ? (int) $term_obj->term_id : 0;
  }


  // === Detectar modalidad (virtual por defecto para este template) ===
  $modality_slug = get_query_var('modalidad_slug') ?: 'virtual';

  // === Hero configuration ===
  $hero_img_desktop = null;
  $hero_img_mobile = null;
  $hero_title = null;

  if ($current_id_term == 0) {
    // Hero global (página)
    $hero_data = get_field('hero');
    if (!empty($hero_data)) {
      $hero_title       = $hero_data['title'] ?? $hero_title;
      $hero_img_desktop = $hero_data['images']['desktop']['url'];
      $hero_img_mobile  = $hero_data['images']['mobile']['url'];
    }
  } else {
    // Hero por facultad (término)
    $images = get_field('hero_slider', 'facultad_' . $current_id_term);


    if ( ! empty( $images )
         && is_array( $images )
         && ! empty( $images['list_of_files'] )
         && is_array( $images['list_of_files'] )
    ) {
        $first_file = $images['list_of_files'][0] ?? null;

        if ( $first_file && ! empty( $first_file['images'] ) ) {
            $hero_img_desktop = $first_file['images']['desktop']['url'] ?? '';
            $hero_img_mobile  = $first_file['images']['mobile']['url'] ?? '';
        }

        // Título del hero → usar el nombre del término si aún no se definió
        if ( empty( $hero_title ) && ! empty( $term_obj->name ) ) {
            $hero_title = $term_obj->name;
        }
    }
  }

  // === Construcción de tabs para modalidad virtual ===

  // Obtener solo facultades que tengan carreras virtuales
  $virtual_career_ids = get_posts([
    'post_type'      => 'carreras',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'fields'         => 'ids',
    'tax_query'      => [[
      'taxonomy' => 'modalidad',
      'field'    => 'slug',
      'terms'    => 'virtual',
    ]],
  ]);

  $facultades_with_virtual = [];
  if (!empty($virtual_career_ids)) {
    $facultades_with_virtual = wp_get_object_terms($virtual_career_ids, 'facultad', [
      'hide_empty' => true,
      'orderby'    => 'name',
      'order'      => 'ASC'
    ]);
  }

  // Tab "Todas las carreras" para modalidad virtual
  $tabs = [
    [
      'id'     => 0,
      'label'  => 'Todas las carreras',
      'target' => 'todas-las-carreras',
      'url'    => home_url('/carreras-a-distancia/')
    ]
  ];

  // Tabs por facultad (solo las que tienen carreras virtuales)
  if (!is_wp_error($facultades_with_virtual) && !empty($facultades_with_virtual)) {
    foreach ($facultades_with_virtual as $facultad) {
      $tabs[] = [
        'id'     => $facultad->term_id,
        'label'  => $facultad->name,
        'target' => $facultad->slug,
        'url'    => home_url("/carreras-a-distancia/{$facultad->slug}/")
      ];
    }
  }

  // === Breadcrumbs ===
  $modality = get_carrera_modality_info_from_slug($modality_slug);
  $breadcrumb = [
    ['label' => 'Inicio', 'href' => home_url('/')],
    ['label' => $modality['label'], 'href' => $modality['url']],
  ];

  // Si estamos viendo una facultad específica, agregar al breadcrumb
  if ($current_id_term > 0 && $term_obj) {
    $breadcrumb[] = [
      'label' => $term_obj->name,
      'href'  => '',
    ];
  }
  ?>

  <?php get_template_part(COMMON_CONTENT_PATH, 'hero-slide', [
    'img_desktop' => $hero_img_desktop,
    'img_mobile'  => $hero_img_mobile,
    'alt'         => $hero_title,
    'title'       => $hero_title,
    'breadcrumbs' => $breadcrumb,
    'variant'     => 'primary'
  ]); ?>

  <?php get_template_part(ALL_CAREERS_TABS_PATH, 'tabs', [
    'tabs' => $tabs,
    'mode' => 'virtual',
    'active_id' => $current_id_term // Para que marque el tab activo
  ]); ?>
</main>
<?php get_footer(); ?>
