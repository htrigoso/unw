<?php
  $form_category = get_field('componente_form_category');
  $utms_default = get_field('list_utms', 'option');
  $utm_admission = $form_category['list_utms'] ?? [];
  $utms_final = merge_utms($utms_default, $utm_admission);

  $formUrl = "https://forms.zohopublic.com/adminzoho11/form/WebBaseVirtual/formperma/r6dyucr2_RC_mCaLCNhmhvEHn820MmGvdkHztewDq58/htmlRecords/submit";

  $form_crm_option = get_field('form_crm', 'option');
  $validation_dni = $form_category['validation_dni_pregrado'];
  $hide_dni = $validation_dni['hide'];

  $vertical_modality = $args['vertical_modality'] ?? '';
  $position_form = $args['position_form'] ?? '';

  $careers = get_carreras();
  $list_departaments = $form_crm_option['list_departaments'];
  $list_campus = get_carreras_campus_modalidad();
  $facultad_name = '';




  get_template_part(COMMON_CONTENT_PATH, 'more-info-form-category-distancia-base', [
    'form_id' => 'form-category-distancia-base-'.$position_form,
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
    'facultad_name'=> $facultad_name,
  ]);
?>