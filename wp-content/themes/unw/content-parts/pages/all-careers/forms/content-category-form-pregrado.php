<?php

  $FORM_GENERAL_PRESENCIAL = 'https://forms.zohopublic.com/adminzoho11/form/WebFacultades/formperma/fDTnpldKeP_IhYXDSkyc6rF7sXx2IKYDi1scDuEShjI/htmlRecords/submit';

  $FORM_GENERAL_VIRTUAL = 'https://forms.zohopublic.com/adminzoho11/form/WebFacultadesVirtual/formperma/XZxvtW2GuLFc2zHw6RV9IKsDHhw5fMTH_275g92vXQM/htmlRecords/submit';

  $current_taxonomy = get_queried_object();
  $current_term_id = $current_taxonomy->term_id;
  $facultad_name = '';
  $form_category = get_field('componente_form_category');
   $careers = get_carreras();
   if (is_tax()) {
    $facultad_name = $current_taxonomy->name;
    $careers = get_carreras_by_facultad($current_term_id, 'pregrado');
    $form_category = get_field('componente_form_category', $current_taxonomy->taxonomy . '_' . $current_term_id);
  }

  $is_form_mixto = $form_category['is_mixto'];
  $form_crm_option = get_field('form_crm', 'option');
  $utms_default = get_field('list_utms', 'option');

  $utm_admission = $form_category['list_utms'] ?? [];
  $utms_final = merge_utms($utms_default, $utm_admission);
  $formUrl = $FORM_GENERAL_PRESENCIAL;

  $validation_dni = $form_category['validation_dni_pregrado'];
  $hide_dni = $validation_dni['hide'];

  $vertical_modality = $args['vertical_modality'] ?? '';
  $position_form = $args['position_form'] ?? '';

  $list_departaments = $form_crm_option['list_departaments'];
  $list_campus = get_carreras_campus_modalidad();


  get_template_part(COMMON_CONTENT_PATH, 'more-info-form-category-pregrado', [
    'form_id' => 'form-category-pregrado-'.$position_form,
    'form_action' => $is_form_mixto ? $FORM_GENERAL_PRESENCIAL : $FORM_GENERAL_VIRTUAL,
    'utms' => $utms_final,
    'careers' => $careers,
    'list_departaments' => $list_departaments,
    'hide_dni' => $hide_dni,
    'validation_dni' => $validation_dni,
    'location' => 'is-home',
    'shadow_box' => true,
    'vertical_modality' => $vertical_modality,
    'position_form'=> $position_form,
    'facultad_name' => $facultad_name,
    'is_form_mixto' => $is_form_mixto
  ]);
?>
