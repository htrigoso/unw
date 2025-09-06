<?php

/**
 * Template Name: Gracias Template
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'thanks'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header();?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main>
  <?php get_template_part(THANKS_CONTENT_PATH, 'thanks'); ?>
</main>
<?php get_footer(); ?>
