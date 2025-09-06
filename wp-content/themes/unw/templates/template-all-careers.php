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
  $current_id_term = get_current_term_id();
  $images = get_field('images', 'facultad_' . $current_id_term);

  $hero_title = '';
  $hero_img_desktop = '';
  $hero_img_mobile = '';

  if ($current_id_term == 0) {
    $hero_data = get_field('hero');
    if (!empty($hero_data)) {
      $hero_title = $hero_data['title'] ?: $hero_title;
      $hero_img_desktop = $hero_data['images']['desktop']['url'] ?: $hero_img_desktop;
      $hero_img_mobile = $hero_data['images']['mobile']['url'] ?: $hero_img_mobile;
    }
  } else {
    if (!empty($images)) {
      $hero_img_desktop = $images['desktop']['url'] ?: $hero_img_desktop;
      $hero_img_mobile = $images['mobile']['url'] ?: $hero_img_mobile;
    }
  }

  $facultades = get_terms([
    'taxonomy'   => 'facultad',
    'hide_empty' => false,
  ]);
  $tabs = [
    [
      'id' => 0,
      'label' => 'Todas las carreras',
      'target' => 'todas-las-carreras',
      'url'   => get_permalink() // URL de la página actual
    ]
  ];

  if (!is_wp_error($facultades) && !empty($facultades)):
    foreach ($facultades as $facultad):
      $tabs[] = [
        'id' => $facultad->term_id,
        'label'  => $facultad->name,
        'target' => $facultad->slug,
        'url'   =>  get_carreras_filter_url($facultad->slug)
      ];
    endforeach;
  endif;

  $breadcrumb = [
    ['label' => 'Inicio', 'href' => home_url('/')],
    ['label' => 'Carreras', 'href' => ''],
    ['label' => get_the_title(), 'href' => ''],
  ];
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
    'tabs' => $tabs
  ]); ?>
</main>
<?php get_footer(); ?>
