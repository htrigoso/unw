<?php
/**
 * Template Name: Todas las Carreras Virtuales Template
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

  // ACF: imágenes para hero por término (cuando hay facultad) o hero global (cuando no hay filtro)
  $images = get_field('images', 'facultad_' . $current_id_term);

  $hero_title = '';
  $hero_img_desktop = '';
  $hero_img_mobile = '';

  if ($current_id_term == 0) {
    // Hero global (página)
    $hero_data = get_field('hero');
    if (!empty($hero_data)) {
      $hero_title       = $hero_data['title'] ?? $hero_title;
      $hero_img_desktop = $hero_data['images']['desktop']['url'] ?? $hero_img_desktop;
      $hero_img_mobile  = $hero_data['images']['mobile']['url']  ?? $hero_img_mobile;
    }
  } else {
    // Hero por facultad (término)
    if (!empty($images)) {
      $hero_img_desktop = $images['desktop']['url'] ?? $hero_img_desktop;
      $hero_img_mobile  = $images['mobile']['url']  ?? $hero_img_mobile;
      // Título del hero: si quieres usar el nombre del término
      if (empty($hero_title) && !empty($term_obj->name)) {
        $hero_title = $term_obj->name;
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
      'url'    => home_url('/carreras/')
    ]
  ];

  if (!is_wp_error($facultades) && !empty($facultades)) :
    foreach ($facultades as $facultad) :
      $tabs[] = [
        'id'     => $facultad->term_id,
        'label'  => $facultad->name,
        'target' => $facultad->slug,
        'url'    => get_carreras_filter_url($facultad->slug) // /carreras/facultad/{slug}/
      ];
    endforeach;
  endif;

  $breadcrumb = [
    ['label' => 'Inicio',   'href' => home_url('/')],
    ['label' => 'Carreras a Distancia', 'href' => home_url('/carreras/')],
  ];
  if ($current_id_term > 0) {
  $breadcrumb[] = [
    'label' => get_the_title(),
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
    'mode' => 'virtual'
  ]); ?>
</main>
<?php get_footer(); ?>
