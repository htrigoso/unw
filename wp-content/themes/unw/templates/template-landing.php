<?php

/**
 * Template Name: Landing Template
 */
?>



<?php set_query_var('ASSETS_CHUNK_NAME', 'about-us'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main>
  <h1>laging</h1>
</main>
<?php get_footer(); ?>
