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
  // === Term actual por slug de query var 'facultad' (nuevo esquema de URL) ===
  $facultad_slug = get_query_var('facultad');

  if ($facultad_slug) {
    $term_obj = get_term_by('slug', $facultad_slug, 'facultad');
    $current_id_term = ($term_obj && !is_wp_error($term_obj)) ? (int) $term_obj->term_id : 0;
  } else {
    $current_id_term = 0; // "Todas las carreras"
  }

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
            $hero_title = $term_obj->description;
        }
    }
  }

  // Construcción de tabs (Todas + cada facultad)
  $facultades = get_terms([
    'taxonomy'   => 'facultad',
    'hide_empty' => false,
  ]);

  $tabs = [
    [
      'id'     => 0,
      'label'  => 'Todas las carreras',
      'target' => 'todas-las-carreras',
      'url'    => home_url('/carreras-wiener/')
    ]
  ];

  if (!is_wp_error($facultades) && !empty($facultades)) :
    foreach ($facultades as $facultad) :
      $tabs[] = [
        'id'     => $facultad->term_id,
        'label'  => $facultad->name,
        'target' => $facultad->slug,
        'url'    => get_carreras_filter_url($facultad->slug)
      ];
    endforeach;
  endif;

  $modality_slug = get_query_var('modalidad_slug') ?: 'presencial';

  $modality = get_carrera_modality_info_from_slug($modality_slug);
  $breadcrumb = [
    ['label' => 'Inicio',   'href' => home_url('/')],
    ['label' => $modality['label'], 'href' =>$modality['url']],

  ];
  if ($current_id_term > 0) {
  $breadcrumb[] = [
    'label' => $term_obj->description,
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
     'mode' => 'presencial'
  ]); ?>
</main>
<?php get_footer(); ?>