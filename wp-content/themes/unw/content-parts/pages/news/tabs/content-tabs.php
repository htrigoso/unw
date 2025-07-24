<?php

$current_term = get_queried_object();
$current_term_id = $current_term && isset($current_term->term_id) ? $current_term->term_id : null;

 $terms = get_terms([
  'taxonomy' => 'categoria_novedad',
  'hide_empty' => true,
]);

$tabs = [];

if (!empty($terms) && !is_wp_error($terms)) {
  foreach ($terms as $term) {
    $tabs[] = [
      'id'=> $term->term_id,
      'label'  => $term->name,
      'url'    => get_term_link($term),
      'target' => '', // o '_blank' si quieres nueva pestaña
    ];
  }
}

?>

<div class="news-tabs">
  <div class="x-container x-container--pad-213 news-tabs__container">
    <?php
    get_template_part(COMMON_CONTENT_PATH, 'nav-tabs', [
      'nav_tabs' => $tabs,
      'is_url' => true,
      'active_term_id' => $current_term_id,
    ]);
    ?>
  </div>
  <div class="x-container x-container--pad-213">
    <div class="news-tabs__content">
      <?php
        get_template_part(NEWS_CONTENT_TAB_PATH . 'content-news');
      ?>
    </div>
  </div>
</div>
