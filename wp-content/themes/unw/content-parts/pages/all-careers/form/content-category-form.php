<?php
  $crm_ad = get_field('crm');
  $utms_default = get_field('list_utms', 'option');
  $utm_admission = $crm_carriers['list_utms'] ?? [];
  $utms_final = merge_utms($utms_default, $utm_admission);
  $form_crm_option = get_field('form_crm', 'option');
  $formUrl = "https://forms.zohopublic.com/adminzoho11/form/WebFacultades/formperma/fDTnpldKeP_IhYXDSkyc6rF7sXx2IKYDi1scDuEShjI/htmlRecords/submit";
  $careers = get_carreras();
  $list_departaments = $form_crm_option['list_departaments'];
  $list_campus = get_carreras_campus_modalidad();
  $validation_dni = $form_crm_option['validation_dni'];
  $hide_dni = $validation_dni['hide'];

  get_template_part(COMMON_CONTENT_PATH, 'more-info-form-category-presencial', [
    'form_id' => 'form-category-presencial',
    'form_action' => $formUrl,
    'utms' => $utms_final,
    'careers' => $careers,
    'list_departaments' => $list_departaments,
    'list_campus' => $list_campus,
    'hide_dni' => $hide_dni,
    'validation_dni' => $validation_dni,
    'location' => 'is-home',
    'shadow_box' => true, 'responsive' => true
  ]);
?>