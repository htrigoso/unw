<?php

/**
 * Template Name: Facultad Template
 */
?>



<?php set_query_var('ASSETS_CHUNK_NAME', 'faculty'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main>
  <?php

  $current_term = get_queried_object();

  $sliders = get_field('hero_slider', 'facultad_' . $current_term->term_id);

  $breadcrumb = [
    ['label' => 'Inicio', 'href' => home_url('/')],
    ['label' => 'Facultad', 'href' => home_url('/facultad/')],
    ['label' => $current_term->name, 'href' => '']
  ];

  get_template_part(
    COMMON_CONTENT_PATH,
    'swiper-hero',
    [
      'sliders' => $sliders,
      'base_breadcrumbs' => $breadcrumb,
      'extra_class' => 'faculty-hero'
    ]
  ); ?>
  <?php get_template_part(FACULTY_TABS_PATH, 'tabs', [
    'term_id' => $current_term->term_id
  ]); ?>
</main>
<?php get_footer(); ?>