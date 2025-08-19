<?php
// Ensure global post object is set to prevent comment_count errors
global $post;
if (!$post && is_search()) {
    $post = new stdClass();
    $post->ID = 0;
    $post->post_type = 'post';
    $post->comment_count = 0;
}

set_query_var('ASSETS_CHUNK_NAME', 'blog');
set_query_var('NAVBAR_COLOR', '');
get_header();
?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>

<main>
  <?php
    $acf_hero = get_field('hero-slide');

    $img_desktop = $acf_hero['images']['desktop']['url'] ?? '';
    $img_mobile = $acf_hero['images']['mobile']['url'] ?? '';
    $alt = $acf_hero['images']['desktop']['alt'] ?? '';
    $title = $acf_hero['title'] ?? 'Tendencias y novedades';
    $breadcrumbs = [
        [
          'label' => 'Inicio',
          'href' => home_url('/'),
        ],
        [
          'label' => 'Blog',
          'href' => '/blog/',
        ],
      ];

    get_template_part(COMMON_CONTENT_PATH, 'hero-slide', [
      'img_desktop' => $img_desktop,
      'img_mobile' => $img_mobile,
      'alt' => $alt,
      'title' => $title,
      'breadcrumbs' => $breadcrumbs,
      'variant' => 'primary',
    ]);
  ?>

  <?php
    // Ensure we have a proper query and global post object
    $search_query = get_query_var('s');
    if (!empty($search_query)) {
      get_template_part(BLOG_CONTENT_PATH, 'blog');
    }
  ?>
</main>

<?php get_footer(); ?>
