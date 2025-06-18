<?php
/**
 * Template Name: Carreras Template
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'home'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>
<?php get_template_part(GENERAL_CONTENT_PATH, 'top-bar');?>
<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar');?>
<main>
  <?php get_template_part(HOME_CONTENT_PATH, 'hero'); ?>

</main>
<?php get_footer(); ?>
