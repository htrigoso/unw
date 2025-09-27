<?php

/**
 * Template Name: 404 Template
 */
?>
<?php set_query_var('ASSETS_CHUNK_NAME', '404'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>

<main>
  <?php get_template_part(ERROR_CONTENT_PATH, 'error'); ?>
</main>

<?php get_footer(); ?>
