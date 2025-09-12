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
  $sliders = get_field('hero_slider');

  if (isset($sliders['list_of_files']) && is_array($sliders['list_of_files'])) {
    $tabs_items = get_field('tabs');
    foreach ($sliders['list_of_files'] as $i => $slide) {
      if (!isset($sliders['list_of_files'][$i]['title'])) {
        $sliders['list_of_files'][$i]['title'] = $tabs_items[$i]->post_title;
      }
      if (isset($tabs_items[$i])) {
        $sliders['list_of_files'][$i]['label'] = $tabs_items[$i]->post_title;
      }
    }
  }

  $base_breadcrumb = [
    ['label' => 'Inicio', 'href' => home_url('/')],
    ['label' => 'Facultad', 'href' => '/facultad'],
  ];

  get_template_part(
    COMMON_CONTENT_PATH,
    'swiper-hero',
    [
      'sliders' => $sliders,
      'base_breadcrumbs' => $base_breadcrumb,
      'extra_class' => 'faculty-hero'
    ]
  ); ?>
  <?php get_template_part(FACULTY_TABS_PATH, 'tabs'); ?>
</main>
<?php get_footer(); ?>
