<?php
add_action('wp_head', function () {
  $hero = get_field('hero-news', 'option');

  if (empty($hero['images'])) {
    return;
  }

  $images_to_preload = [
    [
      'url'         => $hero['images']['mobile']['url'] ?? null,
      'url_desktop' => $hero['images']['desktop']['url'] ?? null,
    ]
  ];

  uw_preload_responsive_images($images_to_preload);
});
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'news'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main>
  <?php get_template_part(NEWS_CONTENT_PATH, 'news-hero'); ?>
  <?php get_template_part(NEWS_TABS_PATH, 'tabs'); ?>
</main>
<?php get_footer(); ?>
