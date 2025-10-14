<?php
$sliders = get_field('sliders', get_the_ID());
$title_sec = get_field('title_sec', get_the_ID());
$mode = $args['mode'] ?? '';
$title = $args['title'] ?? '';
$url = $args['url'] ?? '#';
if(empty($title_sec)) {
  $title_sec = get_the_title();
}


if (isset($sliders['list_of_files']) && is_array($sliders['list_of_files'])) {
  foreach ($sliders['list_of_files'] as $i => $slide) {
    if (!isset($sliders['list_of_files'][$i]['title'])) {
      $sliders['list_of_files'][$i]['title'] = $title_sec;
    }
    if (!isset($sliders['list_of_files'][$i]['label'])) {
      $sliders['list_of_files'][$i]['label'] = $title_sec;
    }
  }
}



$base_breadcrumbs = [
  ['label' => 'Inicio', 'href' => home_url('/')],
  ['label' => $title,
    'href' => $url
  ]
];
?>
<div class="careers-hero">
  <?php
  get_template_part(
    COMMON_CONTENT_PATH,
    'swiper-hero',
    [
      'sliders' => $sliders,
      'base_breadcrumbs' => $base_breadcrumbs,
      'title_sec' => $title_sec
    ]
  );

  // Obtenemos los términos de la taxonomía 'modalidad'
  $terms = get_the_terms(get_the_ID(), 'modalidad');
  ?>

  <div class="x-container careers-hero__form__wrapper">
    <div class="careers-hero__form">
      <?php
        if ($mode ==='presencial') {
          get_template_part(CAREERS_CONTENT_PATH, 'contact-form-presencial', [
            'data_form_type' =>$args['data-form']['desktop']
          ]
          );
        } else {
          get_template_part(CAREERS_CONTENT_PATH, 'contact-form-virtual', [
            'data_form_type' =>$args['data-form']['desktop']
          ]);
        }
      ?>
    </div>
  </div>
</div>
