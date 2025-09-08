<?php
$crm_carriers      = get_field('crm');
$formUrl           = "https://forms.zohopublic.com/adminzoho11/form/WebCarrerasVirtual/formperma/f1PqvMaVQ3bdPj9ELVT4XJWYy_eHSjrAECWfWqSB_uE/htmlRecords/submit";
$form_crm_option   = get_field('form_crm', 'option');
$utms_default      = get_field('list_utms', 'option');
$utm_carriers      = $crm_carriers['list_utms'] ?? [];
$list_departaments = $form_crm_option['list_departaments'];
$term              = get_facultad_taxonomy_name(get_the_ID());
$page_title        = get_current_page_title();
$code_carrier     = $crm_carriers['code'];
// ---- Fusionar UTMs ----
$utms_final = merge_utms($utms_default, $utm_carriers);
?>
<form id="form" class="contact-form formCarrera" method="POST" accept-charset="UTF-8" enctype="multipart/form-data"
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
  <input type="hidden" name="Name_Middle" value="">
  <input type="hidden" name="Dropdown3" value="Perú (+51)">
  <input type="hidden" name="Dropdown" value="DNI">
  <input type="hidden" name="Number" value="">
  <!-- Catergoria(Facultad) -->

  <input type="hidden" name="SingleLine5" value="<?=esc_attr($term)?>"><!-- Codigo por carrera acf -->
  <input type="hidden" name="SingleLine4" value="<?=esc_attr($code_carrier)?>"><!-- Nombre de la carrera -->
  <input type="hidden" name="SingleLine3" value="<?=esc_attr($page_title)?>"><!-- Nombre del departamento -->
  <input type="hidden" name="SingleLine8" id="hidden_departament" value=""> <!-- Departamento -->
  <input type="hidden" name="Website" value="<?=get_current_page_url()?>"> <!-- Url de Trakeo -->
  <div class="custom-hidden"></div>

  <div class="form-body">
    <div class="form-body__fields">
      <div class="flex justify-between m-b-24">
        <div class="f-50">
          <div class="form-field form-field-select">
            <select name="SingleLine7" id="departament" required>
              <option value="" selected disabled>--Seleccione--</option>
              <?php foreach ($list_departaments as $dep): ?>
              <option value="<?= esc_html($dep['value']); ?>">
                <?= esc_html($dep['name']); ?>
              </option>
              <?php endforeach; ?>
            </select>
            <label for="departament">Elige tu departamento</label>
            <span class="error-message">Datos inválidos</span>
          </div>
        </div>
        <div class="f-50">
          <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'input', [
            'name'=> 'Name_First',
            'label'=> 'Nombres (*)',
            'type' => 'text',
          ]);?>
        </div>
      </div>

      <div class="flex justify-between m-b-24">
        <div class="f-50">
          <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'input', [
            'name'=> 'Name_Last',
            'label'=> 'Apellidos (*)',
            'type' => 'text',
          ]);?>
        </div>
        <div class="f-50">
           <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'input', [
            'name'=> 'SingleLine',
            'label'=> 'Número de documento (*)',
            'type' => 'tel',
          ]);?>
        </div>
      </div>

      <div class="flex justify-between">
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
    </div>
    <p class="form-body__hint">
      (*) Campos obligatorios
    </p>
    <div class="form-body__terms">
       <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'checkbox');?>
    </div>
    <div class="form-body__actions">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>
