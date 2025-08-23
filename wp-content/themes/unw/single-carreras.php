<?php set_query_var('ASSETS_CHUNK_NAME', 'careers'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>
<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main>
  <?php
  $sliders = get_field('sliders', get_the_ID());
  $default_title = get_the_title();

  if (isset($sliders['list_of_files']) && is_array($sliders['list_of_files'])) {
    foreach ($sliders['list_of_files'] as $i => $slide) {
      if (!isset($sliders['list_of_files'][$i]['title'])) {
        $sliders['list_of_files'][$i]['title'] = $default_title;
      }
      if (!isset($sliders['list_of_files'][$i]['label'])) {
        $sliders['list_of_files'][$i]['label'] = $default_title;
      }
    }
  }

  $base_breadcrumbs = [
    ['label' => 'Inicio', 'href' => home_url('/')],
    ['label' => 'Ciencias de la Salud', 'href' => '']
  ];

  get_template_part(
    COMMON_CONTENT_PATH,
    'swiper-hero',
    [
      'sliders' => $sliders,
      'base_breadcrumbs' => $base_breadcrumbs
    ]
  ); ?>
  <?php get_template_part(CAREERS_TABS_PATH, 'tabs'); ?>
</main>
<?php get_footer(); ?>
