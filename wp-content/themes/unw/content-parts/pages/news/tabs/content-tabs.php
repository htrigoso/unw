<?php

$current_term = get_queried_object();
$current_id = null;

if ($current_term && isset($current_term->term_id) && is_tax('categoria_novedad')) {
  $current_id = $current_term->term_id;
} else {
  $current_id = 'all';
}

$terms = get_terms([
  'taxonomy' => 'categoria_novedad',
  'hide_empty' => true,
]);

$tabs = [];
$archive_url = get_post_type_archive_link('novedades');

if ($archive_url) {
  $tabs[] = [
    'id' => 'all',
    'label'  => 'Todas las noticias',
    'url'    => $archive_url,
    'status' => true,
    'target' => '',
  ];
}

if (!empty($terms) && !is_wp_error($terms)) {
  foreach ($terms as $term) {
    $tabs[] = [
      'id' => $term->term_id,
      'label'  => $term->name,
      'url'    => get_term_link($term),
      'status' => true,
      'target' => '', // o '_blank' si quieres nueva pestaña
    ];
  }
}
$hide_cat = get_field('hero-news_hide_cat', 'options');

?>

<div class="news-tabs">
  <?php if(!$hide_cat) : ?>
  <div class="x-container x-container--pad-213 news-tabs__container">
    <?php
    get_template_part(COMMON_CONTENT_PATH, 'nav-tabs', [
      'nav_tabs' => $tabs,
      'is_url' => true,
      'active_id' => $current_id,
      'show_controls' => true
    ]);
    ?>
  </div>
  <?php endif ?>
  <div class="x-container x-container--pad-213 news-tabs__content">
    <div class="news">
      <?php get_template_part(COMMON_CONTENT_PATH, 'featured-news', [
        'hide_see_more' => true
      ]); ?>
      <div class="all-news-container">
        <?php get_template_part(NEWS_CONTENT_TAB_PATH . 'content-all-news'); ?>
      </div>
    </div>
  </div>
</div>
