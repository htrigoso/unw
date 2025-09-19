<?php set_query_var('ASSETS_CHUNK_NAME', 'event-detail'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>
<?php get_header(); ?>

<?php get_template_part(GENERAL_CONTENT_PATH, 'navbar'); ?>
<main>
  <?php
  $sliders_afc = get_field('list_of_files');

  $sliders = [
    'list_of_files' => []
  ];

  if (!empty($sliders_afc) && is_array($sliders_afc)) {
    foreach ($sliders_afc as $slide) {
      $desktop = $slide['imagen']['desktop'] ?? [];
      $mobile = $slide['imagen']['mobile'] ?? [];
      $sliders['list_of_files'][] = [
        'images' => [
          'desktop' => [
            'url' => $desktop['url'] ?? '',
            'alt' => $desktop['alt'] ?? $desktop['title'] ?? '',
          ],
          'mobile' => [
            'url' => $mobile['url'] ?? '',
            'alt' => $mobile['alt'] ?? $mobile['title'] ?? '',
          ],
        ],
        'title' => $slide['title'] ?? '',
        'label' => $slide['label'] ?? get_the_title(),
      ];
    }
  }

  $base_breadcrumbs = [
    ['label' => 'Inicio', 'href' => home_url('/')],
    ['label' => 'Eventos', 'href' => home_url('/eventos')]
  ];

  get_template_part(
    COMMON_CONTENT_PATH,
    'swiper-hero',
    [
      'sliders' => $sliders,
      'base_breadcrumbs' => $base_breadcrumbs,
      'extra_class' => 'event-detail-hero'
    ]
  );
  ?>

  <?php get_template_part(EVENT_DETAIL_CONTENT_PATH, 'event-detail'); ?>
</main>

<?php get_footer(); ?>