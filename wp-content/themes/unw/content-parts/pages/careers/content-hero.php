<?php
$sliders = get_field('sliders', get_the_ID());
$default_title = get_the_title();

if (isset($sliders['list_of_files']) && is_array($sliders['list_of_files'])) {
  foreach ($sliders['list_of_files'] as $i => $slide) {
    if (!isset($sliders['list_of_files'][$i]['title'])) {
      $sliders['list_of_files'][$i]['title'] = $default_title;
    }
    if (!isset($sliders['list_of_files'][$i]['label'])) {
      $sliders['list_of_files'][$i]['label'] = $default_title;
    }
  }
}
$name_tax = get_facultad_taxonomy_name();

$base_breadcrumbs = [
  ['label' => 'Inicio', 'href' => home_url('/')],
  ['label' => $name_tax, 'href' => '/']
];
?>
<div class="careers-hero">
  <?php
  get_template_part(
    COMMON_CONTENT_PATH,
    'swiper-hero',
    [
      'sliders' => $sliders,
      'base_breadcrumbs' => $base_breadcrumbs
    ]
  );

  // Obtenemos los términos de la taxonomía 'modalidad'
  $terms = get_the_terms(get_the_ID(), 'modalidad');
  ?>

  <div class="x-container careers-hero__form__wrapper">
    <div class="careers-hero__form">
      <?php
      if ($terms && !is_wp_error($terms)) {
        $slugs = wp_list_pluck($terms, 'slug');

        if (in_array('presencial', $slugs)) {
          get_template_part(CAREERS_CONTENT_PATH, 'contact-form-presencial', [
            'data_form_type' =>$args['data-form']['desktop']
          ]
          );
        } else {
          get_template_part(CAREERS_CONTENT_PATH, 'contact-form-virtual', [
            'data_form_type' =>$args['data-form']['desktop']
          ]);
        }
      }
      ?>
    </div>
  </div>
</div>