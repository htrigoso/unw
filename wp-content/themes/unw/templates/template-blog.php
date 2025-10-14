<?php

/**
 * Template Name: Blog Template
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'blog'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar');?>
<main>
  <?php
  $acf_hero = get_field('hero-slide');
  $img_desktop = $acf_hero['images']['desktop']['url'] ?? '';
  $img_mobile = $acf_hero['images']['mobile']['url'] ?? '';
  $alt = $acf_hero['images']['desktop']['alt'] ?? '';
  $title = $acf_hero['title'] ?? 'Tendencias y novedades';
  $breadcrumbs = [
    [
      'label' => 'Inicio',
      'href' => home_url('/'),
    ],
    [
      'label' => 'Blog',
      'href'  => home_url('/blog/'),
    ],
  ];

  get_template_part(COMMON_CONTENT_PATH, 'hero-slide', [
    'img_desktop' => $img_desktop,
    'img_mobile' => $img_mobile,
    'alt' => $alt,
    'title' => $title,
    'breadcrumbs' => $breadcrumbs,
    'variant' => 'primary',
  ]);
  ?>

  <?php get_template_part(BLOG_CONTENT_PATH, 'blog'); ?>
</main>

<?php get_footer(); ?>