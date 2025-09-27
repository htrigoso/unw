<?php set_query_var('ASSETS_CHUNK_NAME', 'all-careers'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main>
  <?php
  $term = get_queried_object();
  $current_faculty_id = $term->term_id;
  render_html_all_careers([
      'current_faculty_id' => $current_faculty_id,
      'title_global'       => 'Carreras',
  ]);
  ?>
</main>
<?php get_footer(); ?>