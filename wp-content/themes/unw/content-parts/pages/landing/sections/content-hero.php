<?php
$data = get_query_var('section_data', []);
$title_hero = $data['title'] ?? '';
$images_hero = $data['images'] ?? [];

$slides_list = [];
if (!empty($images_hero)) {
  $slides_list[] = [
    'title'  => $title_hero,
    'label'  => get_the_title(),
    'images' => $images_hero,
    'type'   => ''
  ];
}

$dynamic_breadcrumbs = [
  ['label' => 'Inicio', 'url' => home_url('/')]
];

$ancestors = get_post_ancestors(get_the_ID());

if (!empty($ancestors)) {
  $ancestors = array_reverse($ancestors);

  foreach ($ancestors as $ancestor_id) {
    $dynamic_breadcrumbs[] = [
      'label' => get_the_title($ancestor_id),
      'url'   => get_permalink($ancestor_id)
    ];
  }
}

$component_args = [
  'sliders' => [
    'title'         => $title_hero,
    'list_of_files' => $slides_list
  ],
  'base_breadcrumbs' => $dynamic_breadcrumbs,
  'extra_class' => 'hero-carrera',
  'variant' => 'standard',
  'title_sec' => ''
];

  $form_crm_option = get_field('form_crm', 'option');
  $utms_default = get_field('list_utms', 'option');
  $form_crm = get_field('componente_form_landing');
  $hide_form_landing= get_field('hide_form_landing');
  $utm = $crm_carriers['list_utms'] ?? [];
  $utms_final = merge_utms($utms_default, $utm);
  $formUrl = "https://forms.zohopublic.com/adminzoho11/form/WebPreWiener/formperma/l1wwdmdtbCUdnHXBKB4zGg2X1eb12Fnp-VgoBjOAEmA/htmlRecords/submit";
  $careers = get_carreras();
  $list_departaments = $form_crm_option['list_departaments'];
  $list_campus = get_carreras_campus_modalidad();
  $validation_dni = $form_crm['validation_dni_landing'];
  $hide_dni = $validation_dni['hide'];


?>

<section class="landing-hero">
  <?php
  get_template_part(COMMON_CONTENT_PATH, 'swiper-hero', $component_args);
   if(!$hide_form_landing){
  ?>
  <div class="x-container landing-hero__form__wrapper">
    <div class="landing-hero__form">
      <?php
      get_template_part(COMMON_CONTENT_PATH, 'more-info-form', [
        'shadow_box' => true,
        'vertical_modality' => true,
        'form_id'=>'form-general-desktop',
        'form_action' => $formUrl,
        'form_type'=> 'form-general-desktop',
        'utms' => $utms_final,
        'careers' => $careers,
        'list_departaments' => $list_departaments,
        'list_campus' => $list_campus,
        'hide_dni' => $hide_dni,
        'validation_dni' => $validation_dni,
      ]);
      ?>
    </div>
  </div>
  <?php
   }
  ?>
</section>