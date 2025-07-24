<?php

/**
 * Template Name: Detalle de Noticia Template
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'news-detail'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main>
  <?php get_template_part(NEWS_DETAIL_CONTENT_PATH, 'header'); ?>
  <?php get_template_part(NEWS_DETAIL_CONTENT_PATH, 'news-detail'); ?>
</main>
<?php get_footer(); ?>