<?php

/**
 * Template Name: Facultad Template
 */
?>

<?php
add_action('wp_head', function () {
  $list = get_field('hero_slider')['list_of_files'] ?? [];

  if (empty($list)) {
    return;
  }

  $image_items = array_filter(
    $list,
    fn($item) => strtolower($item['images']['type'] ?? 'imagen') === 'imagen'
  );

  if (empty($image_items)) {
    return;
  }

  $images_to_preload = array_map(
    fn($item) => [
      'url'         => $item['images']['mobile']['url'] ?? null,
      'url_desktop' => $item['images']['desktop']['url'] ?? null,
    ],
    $image_items
  );

  uw_preload_responsive_images($images_to_preload);
});
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'faculty'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main>
  <?php

  $current_term = get_queried_object();


  $sliders = get_field('hero_slider');

  $breadcrumb = [
    ['label' => 'Inicio', 'href' => home_url('/')],
    ['label' => 'Facultad', 'href' => home_url('/facultad/')],
    ['label' => $current_term->post_title, 'href' => '']
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
  <?php get_template_part(FACULTY_TABS_PATH, 'tabs'); ?>
</main>
<?php get_footer(); ?>
