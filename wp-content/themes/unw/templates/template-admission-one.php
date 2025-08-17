<?php
/**
 * Template Name: Admisión uno Template
 */
?>
<?php set_query_var('ASSETS_CHUNK_NAME', 'admission-one'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>

<main>
  <?php get_template_part(ADMISSION_CONTENT_PATH, 'admission-one'); ?>
</main>

<?php get_footer(); ?>
