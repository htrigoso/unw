<section class="x-container x-container--pad-213 content-form-section">
  <?php

  $data = get_query_var('section_data');


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



  if(!$hide_form_landing){
     get_template_part(COMMON_CONTENT_PATH, 'more-info-form', [
      'shadow_box' => true,
      'form_id' => $data['form_id'] ?? 'form-general-mobile',
      'form_action' => $formUrl,
      'form_type'=> $data['form_id'] ?? 'form-general-mobile',
      'utms' => $utms_final,
      'careers' => $careers,
      'list_departaments' => $list_departaments,
      'list_campus' => $list_campus,
      'hide_dni' => $hide_dni,
      'validation_dni' => $validation_dni,
    ]);

  }

  ?>
</section>
