<?php

/**
 * Template Name: Buscador Template
 */
?>
<?php set_query_var('ASSETS_CHUNK_NAME', 'search'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar');?>
<main>
  <?php get_template_part(SEARCH_CONTENT_PATH, 'search-section'); ?>
  <?php get_template_part(SEARCH_CONTENT_PATH, 'search-results'); ?>
</main>
<?php get_footer(); ?>