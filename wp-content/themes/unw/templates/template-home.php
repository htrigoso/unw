<?php
/**
 * Template Name: Home Template
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'home'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>

<?php get_header(); ?>

<?php
  // get_template_part('content-parts/content', 'top-bar');
?>
<?php
// get_template_part('content-parts/content', 'navbar');
?>

<?php
  define('HOME_CONTENT_PATH', 'content-parts/pages/home/content');
?>

<main>
  <?php get_template_part(HOME_CONTENT_PATH, 'hero'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'why-wiener'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'programs'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'impact-results'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'testimonial'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'guidance-steps'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'international-agreements'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'last-news'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'featured-events'); ?>
</main>

<?php
  // get_template_part('content-parts/content', 'footer');
?>

<?php get_footer(); ?>
