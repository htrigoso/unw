<?php
/**
 * Template Name: Admisión Convalidación Template
 */
?>
<?php set_query_var('ASSETS_CHUNK_NAME', 'admission'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>

<main>
  <?php get_template_part(ADMISSION_CONTENT_PATH,'shared-admission');?>
</main>

<?php get_footer(); ?>
