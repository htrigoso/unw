<?php
// =======================
// 1. FEATURED EVENTS
// =======================
$feature_events = [
  "title" => "Eventos Destacados",
  "link" => false,
  "events" => []
];

$feature_events_query = new WP_Query([
  'post_type'      => 'eventos',
  'orderby'        => 'date',
  'order'          => 'DESC',
  'meta_query'     => [
    [
      'key'     => 'featured',
      'value'   => 1,
      'compare' => '='
    ]
  ],
  'posts_per_page' => 4,
]);

if ($feature_events_query->have_posts()) {
  while ($feature_events_query->have_posts()) {
    $feature_events_query->the_post();
    $info = get_field('event_info', get_the_ID());
    $feature_events['events'][] = (object) [
      "ID" => get_the_ID(),
      "post_title" => get_the_title(),
      "event_info" => $info,
      "thumbnail_url" => get_the_post_thumbnail_url(get_the_ID(), 'large'),
    ];
  }
  wp_reset_postdata();
}

// =======================
// 2. ALL EVENTS
// =======================
$all_events = [
  "title" => "Todos los eventos",
  "link" => false,
  "events" => []
];

$all_events_query = new WP_Query([
  'post_type'      => 'eventos',
  'orderby'        => 'date',
  'order'          => 'DESC',
  'posts_per_page' => -1,
]);

if ($all_events_query->have_posts()) {
  while ($all_events_query->have_posts()) {
    $all_events_query->the_post();
    $info = get_field('event_info', get_the_ID());
    $all_events['events'][] = (object) [
      "ID" => get_the_ID(),
      "post_title" => get_the_title(),
      "event_info" => $info,
      "thumbnail_url" => get_the_post_thumbnail_url(get_the_ID(), 'large'),
    ];
  }
  wp_reset_postdata();
}
?>

<!-- ===========================
  SECTION: FEATURED EVENTS
=========================== -->
<section class="featured-events">
  <div class="x-container x-container--pad-213">
    <div class="featured-events__wrapper">
      <?php
      get_template_part(COMMON_CONTENT_PATH, 'swiper-events', [
        'acf_data' => [
          'title' => $feature_events['title'] ?? 'Eventos Destacados',
          'events' => $feature_events['events'] ?? [],
          'link' => $feature_events['link'] ?? false,
        ],
        "swiper_class" => 'featured-events-swiper post-swiper',
      ]);
      ?>
    </div>
  </div>
</section>

<!-- ===========================
  SECTION: ALL EVENTS
=========================== -->
<section class="all-events">
  <div class="x-container x-container--pad-213">
    <div class="all-events__wrapper">
      <?php
      get_template_part(COMMON_CONTENT_PATH, 'swiper-events', [
        'acf_data' => [
          'title' => $all_events['title'] ?? 'Todos los eventos',
          'events' => $all_events['events'] ?? [],
          'link' => $all_events['link'] ?? false,
        ],
        "swiper_class" => 'all-events-swiper post-swiper-mobile',
      ]);
      ?>
    </div>
  </div>
</section>
