<?php

/**
 * Template Name: Todas las Carreras Template
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'all-careers'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main>
  <?php get_template_part(COMMON_CONTENT_PATH, 'swiper-hero'); ?>
  <?php get_template_part(ALL_CAREERS_TABS_PATH, 'tabs'); ?>
</main>
<?php get_footer(); ?>
