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
  <?php
   $page_title = get_the_title();
  render_html_all_careers([
      'current_faculty_id' => 0,
       'title_global'       => $page_title,
      'post_type'          => 'carreras',
      'taxonomy'           => 'categoria-carrera',
  ]);
  ?>
</main>
<?php get_footer(); ?>
