<?php

/**
 * Template Name: Powered By ASU Template
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'powered-by-asu'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(PBA_CONTENT_PATH, 'pba-navbar'); ?>
<main>
  <?php
  $slide_hero = get_field('slide-hero');

  get_template_part(PBA_CONTENT_PATH, 'pba-hero', [
    "img_desktop" => $slide_hero['images']['desktop']['url'],
    "img_mobile"  => $slide_hero['images']['mobile']['url'],
    "alt"         => $slide_hero['images']['desktop']['alt'] ?? 'Powered by ASU',
    "title"       => $slide_hero['title'],
    "description" => $slide_hero['description'],
  ]);
  ?>

  <?php get_template_part(PBA_CONTENT_PATH, 'pba-presentation'); ?>
  <?php get_template_part(PBA_CONTENT_PATH, 'pba-recognitions'); ?>
  <?php get_template_part(PBA_CONTENT_PATH, 'pba-powered'); ?>
  <?php get_template_part(PBA_CONTENT_PATH, 'pba-benefits'); ?>
  <?php get_template_part(PBA_CONTENT_PATH, 'pba-mastery'); ?>
  <?php get_template_part(PBA_CONTENT_PATH, 'pba-highlights'); ?>
  <?php get_template_part(PBA_CONTENT_PATH, 'pba-network'); ?>
  <?php get_template_part(PBA_CONTENT_PATH, 'pba-testimonials'); ?>
  <?php get_template_part(PBA_CONTENT_PATH, 'pba-cta'); ?>
</main>
<?php get_footer(); ?>
