<?php set_query_var('ASSETS_CHUNK_NAME', 'careers'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>
<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main>
  <?php
  $sliders = get_field('sliders', get_the_ID());
  $breadcrumbs = [
    ['label' => 'Inicio', 'href' => home_url('/')],
    ['label' => 'Ciencias de la Salud', 'href' => '/salud'],
    ['label' => get_the_title()]
  ];
  get_template_part(
    COMMON_CONTENT_PATH,
    'swiper-hero',
    [
      'sliders' => $sliders,
      'breadcrumbs' => $breadcrumbs,
      'hero_title' => get_the_title(),
      'extra_class' => 'careers-hero-swiper'
    ]
  ); ?>
  <?php get_template_part(CAREERS_TABS_PATH, 'tabs'); ?>
</main>
<?php get_footer(); ?>