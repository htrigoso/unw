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
  <?php get_template_part(PBA_CONTENT_PATH, 'pba-hero', [
    "img_desktop" => UPLOAD_PATH . "/powered-by-asu/hero/hero-desktop.png",
    "img_mobile" => UPLOAD_PATH . "/powered-by-asu/hero/hero-mobile.png",
    "alt" => "Powered by ASU",
    "title" => "Una experiencia de aprendizaje de clase mundial",
    "description" => "respaldada por el liderazgo en innovación de una de las principales universidades de EE.UU.",
  ]); ?>
  <?php get_template_part(PBA_CONTENT_PATH, 'pba'); ?>
</main>
<?php get_footer(); ?>
