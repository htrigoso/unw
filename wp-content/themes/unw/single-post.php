<?php set_query_var('ASSETS_CHUNK_NAME', 'blog-detail'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>
<script data-no-delay>
  window.unwContentData = {
    content_type: 'Blog',
    content_id: '<?php echo get_the_ID(); ?>',
    content_title: '<?php echo esc_js(get_the_title()); ?>'
  };
</script>
<?php
  get_template_part(GENERAL_CONTENT_PATH, 'navbar');
  set_post_views(get_the_ID());
?>
<main>
  <?php get_template_part(BLOG_DETAIL_CONTENT_PATH, 'blog-detail'); ?>
</main>
<?php get_footer(); ?>
