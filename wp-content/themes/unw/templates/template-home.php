<?php

/**
 * Template Name: Inicio Template
 */
?>

<?php
add_action('wp_head', function () {
    $hero_list = get_field('hero')['list'] ?? [];

    if (empty($hero_list)) { return; }

    $images_to_preload = array_map(
        fn($item) => [
            'url'         => $item['images']['mobile']['url'] ?? null,
            'url_desktop' => $item['images']['desktop']['url'] ?? null,
        ],
        $hero_list
    );
    uw_preload_responsive_images($images_to_preload);
});
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'home'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header();?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main id="home-page" class="home-page">
  <?php get_template_part(HOME_CONTENT_PATH, 'more-info-form'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'home-hero'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'why-wiener'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'programs'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'impact-results'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'testimonial'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'guidance-steps'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'international-agreements'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'last-news'); ?>
  <?php get_template_part(HOME_CONTENT_PATH, 'featured-events'); ?>
</main>
<?php get_footer(); ?>
