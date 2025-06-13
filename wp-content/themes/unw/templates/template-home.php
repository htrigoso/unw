<?php
/**
 * Template Name: Home Template
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'home'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>

<?php get_header(); ?>

<?php
  // get_template_part('content-parts/content', 'navbar');

?>

<main>
  <?php get_template_part('content-parts/pages/home/content', 'guidance-steps'); ?>
  <?php get_template_part('content-parts/pages/home/content', 'why-wiener'); ?>
  <?php get_template_part('content-parts/pages/home/content', 'impact-results'); ?>

</main>

<?php
  // get_template_part('content-parts/content', 'footer');
?>

<?php get_footer(); ?>
