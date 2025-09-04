<?php
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
  $code_carrier     = $crm_carriers['code'];
  // ---- Fusionar UTMs ----
  $utms_final = merge_utms($utms_default, $utm_carriers);
  $list_campus_default =    $form_crm_option['list_campus'] ;
  $list_campus =  wp_json_encode([]);
  $departments_json =  [] ;
  $campus_json =  [] ;
  $is_form_mixto = $crm_carriers ['is_mixto'];

   // Si es form mixto
  if($is_form_mixto) {

    $group_presencial = $form_mixto['group_presencial'];
    $group_virtual = $form_mixto['group_virtual'];


    if($group_presencial['status']) {
      $campus_json = $form_crm_option['list_campus'];
    }

    // Si Virtual mostrar departamentos de procedencia
     if($group_virtual['status']) {
      $departments_json =  $list_departaments;
    }

  }else {
    if($form_normal['status']) {
      $campus_json = $form_crm_option['list_campus'];
    }
  }
?>
<form id="form" data-departaments=" <?= esc_attr(wp_json_encode( $departments_json)) ?>"
  data-campus="<?= esc_attr(wp_json_encode( $campus_json)) ?>" data-mixto="<?=esc_attr(trim($is_form_mixto))?>"
  class="contact-form formCarrera" method="POST" accept-charset="UTF-8" enctype="multipart/form-data"
  action="<?=$formUrl?>">
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

  <input type="hidden" name="SingleLine5" value="<?=esc_attr($term)?>"><!-- Facultad -->
  <input type="hidden" name="SingleLine4" value="<?=esc_attr($code_carrier)?>"> <!-- Codigo por carrera acf -->
  <input type="hidden" name="SingleLine3" value="<?=esc_attr($page_title)?>">
  <input type="hidden" name="Website" value="<?=get_current_page_url()?>"> <!-- Url de Trakeo -->
  <!-- ////Campos vacios -->


  <div class="custom-hidden"></div>




  <div class="form-body">
    <div class="form-body__fields">
      <?php if ( $is_form_mixto ): ?>
      <div class="form-field-radio m-b-24">
        <fieldset>
          <div class="radio-option m-b-15">
            <input type="radio" id="pregrado" name="form_mixto" value="pregrado" checked />
            <label for="pregrado">Presencial</label>
          </div>




          <div class="radio-option m-b-15">
            <input type="radio" id="virtual" name="form_mixto" value="virtual" />
            <label for="virtual">100% virtual</label>
          </div>
        </fieldset>
      </div>
      <?php endif; ?>

      <div class="flex justify-between m-b-24" data-html-name="departament">

        <div class="f-100" data-html-name="name_first">
          <div class="form-field">
            <input name="Name_First" id="name_first" placeholder="" type="text" required />
            <label for="name_first">Nombres (*)</label>
            <span class="error-message">Datos inválidos</span>
          </div>
        </div>
      </div>

      <div class="flex justify-between m-b-24">
        <div class="f-50">
          <div class="form-field">
            <input name="Name_Last" id="name_last" placeholder="" type="text" required />
            <label for="name_last">Apellidos (*)</label>
            <span class="error-message">Datos inválidos</span>
          </div>
        </div>
        <div class="f-50">
          <div class="form-field">
               <input required type="tel" inputmode="numeric" pattern="\d{8}" maxlength="8" name="SingleLine" placeholder=""
              id="SingleLine" />
            <label for="singleLine">Número de documento (*)</label>
            <span class="error-message">Datos inválidos</span>
          </div>
        </div>
      </div>

      <div class="flex justify-between <?=!empty($campus_json) ? 'm-b-30': ''?> ">
        <div class="f-50">
          <div class="form-field">
            <input name="PhoneNumber_countrycode" placeholder="" id="cellNumber" type="tel" required minlength="9" />
            <label for="cellNumber">Celular (*)</label>
            <span class="error-message">Datos inválidos</span>
          </div>
        </div>
        <div class="f-50">
          <div class="form-field">
            <input name="Email" id="email" type="text" placeholder="" required />
            <label for="email">Correo electrónico (*)</label>
            <span class="error-message">Datos inválidos</span>
          </div>
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
              <option value="<?= esc_html($cam['value']); ?>">
                <?= esc_html($cam['name']); ?>
              </option>
              <?php endforeach; ?>
            </select>
            <label for="campus">Elige tu campus</label>
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
      <div class="form-field-checkbox">
        <input type="checkbox" name="DecisionBox1" id="politicas" name="politicas" required checked>
        <label for="politicas">
          <span class="custom-checkbox"></span>
          <span class="text">
            Declaro expresamente haber leído y aceptado las <a href="#">Políticas de privacidad</a>
          </span>
        </label>
      </div>
    </div>
    <div class="form-body__actions">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>
<!-- Falta el nombre del campus:  SingleLine8 -->

<!-- Falta el nombre del campus:  SingleLine8 -->
