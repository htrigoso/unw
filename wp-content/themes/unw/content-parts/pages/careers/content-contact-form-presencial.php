<?php

  global $post;
  $page_id = $post->ID;


  $crm_carriers      = get_field('crm');
  $form_mixto = $crm_carriers['form_mixto'];
  $form_normal = $crm_carriers['form_normal'];
  $formUrl         = "https://forms.zohopublic.com/adminzoho11/form/WebCarreras/formperma/T3JIAMOGnJxkHbk-qsPtLTz8XUz9NaQDXxHjjRe_AKk/htmlRecords/submit";
  $form_crm_option   = get_field('form_crm', 'option');
  $utms_default      = get_field('list_utms', 'option');
  $utm_carriers      = $crm_carriers['list_utms'] ?? [];
  $list_departaments = $form_crm_option['list_departaments'];
  $term              = get_facultad_taxonomy_name(get_the_ID());
  $page_title        = get_current_page_title();
  $code_carrier_pre     = $crm_carriers['code'];
  $code_carrier_vir     = $crm_carriers['code_virtual'];
  // ---- Fusionar UTMs ----
  $utms_final = merge_utms($utms_default, $utm_carriers);
  $list_campus_default =    get_campus_by_carrera_id(  $page_id);


  $list_campus =  wp_json_encode([]);
  $departments_json =  [] ;
  $campus_json =  [] ;
  $campus_json = $list_campus_default;
  $is_form_mixto = $crm_carriers ['is_mixto'];
  if($is_form_mixto) {
    $group_presencial = $form_mixto['group_presencial'];
    $group_virtual = $form_mixto['group_virtual'];

    if($group_presencial['status']) {
      $campus_json = $list_campus_default;
    }

    // Si Virtual mostrar departamentos de procedencia
     if($group_virtual['status']) {
      $departments_json =  $list_departaments;
    }
  }else {
    if($form_normal['status']) {
      $campus_json = $list_campus_default;
    }
  }
  $data_form_type = $args['data_form_type'] ?? '';
  $validation_dni = $crm_carriers['validation_dni'];
  $hide_dni = $validation_dni['hide'];
?>
<form id="<?=$data_form_type;?>" name="<?=$data_form_type;?>" data-form="zoho" data-form-type="<?=$data_form_type;?>"
  data-mixto="<?=esc_attr(trim($is_form_mixto))?>" data-code-pre="<?=esc_attr($code_carrier_pre)?>"
  data-code-vir="<?=esc_attr($code_carrier_vir)?>" class="contact-form formCarrera" method="POST" accept-charset="UTF-8"
  enctype="multipart/form-data" action="<?=$formUrl?>">
  <div class="form-header">
    <i>
      <svg width="52" height="52">
        <use xlink:href="#chat"></use>
      </svg>
    </i>
    <h4 class="form-header__title">
      ¡Déjanos tus datos y nos contactaremos contigo!
    </h4>
  </div>
  <?php foreach ($utms_final as $utm): ?>
  <input type="hidden" name="<?= esc_attr($utm['name']); ?>" value="<?= esc_attr($utm['value']); ?>">
  <?php endforeach; ?>

  <!-- Enviar Campos vacios -->
  <input type="hidden" name="Name_Middle" value=""> <!-- Apellido Materno -->
  <input type="hidden" name="Dropdown" value="DNI"> <!-- Tipo de Documento -->
  <input type="hidden" name="Dropdown3" value="Perú (+51)"> <!-- Código de teléfono -->
  <input type="hidden" name="Dropdown100" value="<?=esc_attr($page_title)?>"> <!-- Carreras -->
  <input type="hidden" name="Dropdown2" value=""> <!-- Grado -->
  <input type="hidden" name="Number" value=""> <!-- Año de egreso -->

  <input type="hidden" name="SingleLine3" value="<?=esc_attr($term)?>"><!-- Facultad -->
  <input type="hidden" name="SingleLine4" value="<?=esc_attr($code_carrier_pre)?>"> <!-- Codigo por carrera acf -->
  <input type="hidden" name="SingleLine5" value="<?=esc_attr($page_title)?>">
  <input type="hidden" name="Website" value="<?=get_current_page_url()?>"> <!-- Url de Trakeo -->
  <!-- ////Campos vacios -->


  <div class="custom-hidden"></div>
  <div class="custom-hidden-campus"></div>




  <div class="form-body">
    <div class="form-body__fields">
      <?php if ( $is_form_mixto ): ?>
      <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'radio', [
        'direction'    => 'flex-col justify-between',
        'form_type'=> $data_form_type,
      ]);?>
      <?php endif; ?>

      <div class="flex justify-between m-b-24" data-html-name="departament">

        <div class="f-100" data-html-name="name_first">
          <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'input', [
            'name'=> 'Name_First',
            'label'=> 'Nombres (*)',
            'type' => 'text',
            'max_length' => 30
          ]);?>
        </div>
      </div>

      <div class="flex justify-between m-b-24">
        <div class="f-<?=$hide_dni?'100':'50'?>">
          <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'input', [
            'name'=> 'Name_Last',
            'label'=> 'Apellidos (*)',
            'type' => 'text',
            'max_length' => 60
          ]);?>
        </div>
        <?php
        if ( ! $hide_dni) {
          $title = $validation_dni['title'] . (!empty($validation_dni['required']) ? ' (*)' : '');
        ?>
        <div class="f-50">
          <?php
            get_template_part( GENERAL_FORM_CONTACT_PATH, 'input', [
              'name'     => 'SingleLine',
              'label'    => $title,
              'type'     => 'tel',
              'required' => $validation_dni['required']
            ]);
          ?>
        </div>
        <?php }?>
      </div>

      <div class="flex justify-between <?=!empty($campus_json) ? 'm-b-30': ''?> ">
        <div class="f-50">
          <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'input', [
            'name'=> 'PhoneNumber_countrycode',
            'label'=> 'Celular (*)',
            'type' => 'tel',
          ]);?>
        </div>
        <div class="f-50">
          <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'input', [
            'name'=> 'Email',
            'label'=> 'Correo electrónico (*)',
            'type' => 'email',
          ]);?>
        </div>
      </div>

      <div class="flex justify-between" data-html-name="campus">
        <?php
          if(!empty($campus_json)):
        ?>
        <div class="f-50">
          <div class="form-field form-field-select">
            <select name="SingleLine8" id="campus" required>
              <option value="" selected disabled>--Seleccione--</option>
              <?php foreach ($campus_json as $cam): ?>
              <option value="<?= esc_html($cam['code']); ?>">
                <?= esc_html($cam['campus']); ?>
              </option>
              <?php endforeach; ?>
            </select>
            <label for="campus">Elige tu campus (*)</label>
            <span class="error-message">Datos inválidos</span>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
    <p class="form-body__hint">
      (*) Campos obligatorios
    </p>
    <div class="form-body__terms">
      <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'checkbox', [
        'form_type'=> $data_form_type,
      ]);?>
    </div>
    <div class="form-body__actions">
      <button type="submit" class="btn btn-primary" id="button-send">Enviar</button>
    </div>
  </div>
</form>
