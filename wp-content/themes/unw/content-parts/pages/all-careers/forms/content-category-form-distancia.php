<?php
  $current_taxonomy = get_queried_object();
  $current_term_id = $current_taxonomy->term_id;
  $form_category = get_field('componente_form_category');
  $facultad_name = '';
  if (is_tax()) {
    $facultad_name = $current_taxonomy->name;
    $form_category = get_field('componente_form_category', $current_taxonomy->taxonomy . '_' . $current_term_id);
  }
  $utms_default = get_field('list_utms', 'option');
  $utm_admission = $form_category['list_utms'] ?? [];
  $utms_final = merge_utms($utms_default, $utm_admission);

  $formUrl = "https://forms.zohopublic.com/adminzoho11/form/WebFacultadesVirtual/formperma/XZxvtW2GuLFc2zHw6RV9IKsDHhw5fMTH_275g92vXQM/htmlRecords/submit";

  $form_crm_option = get_field('form_crm', 'option');
  $form_crm_categories = get_field('form_crm_categories', 'option');
  $validation_dni = $form_category['validation_dni_pregrado'];
  $hide_dni = $validation_dni['hide'];

  $vertical_modality = $args['vertical_modality'] ?? '';
  $position_form = $args['position_form'] ?? '';


  $list_departaments = $form_crm_option['list_departaments'];
  $list_campus = get_carreras_campus_modalidad();

  $careers = get_carreras_by_facultad($current_term_id, 'virtual');

  get_template_part(COMMON_CONTENT_PATH, 'more-info-form-category-distancia', [
    'form_id' => 'form-category-distancia-'.$position_form,
    'form_action' => $formUrl,
    'utms' => $utms_final,
    'careers' => $careers['virtual'],
    'list_departaments' => $list_departaments,
    'hide_dni' => $hide_dni,
    'validation_dni' => $validation_dni,
    'location' => 'is-home',
    'shadow_box' => true,
    'vertical_modality' => $vertical_modality,
    'position_form'=> $position_form,
    'facultad_name' => $facultad_name,
  ]);
?>
