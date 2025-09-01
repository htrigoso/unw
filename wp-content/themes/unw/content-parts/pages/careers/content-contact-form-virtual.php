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

  <input type="hidden" name="Website" value="<?=get_current_page_url()?>">
  <!-- Campos vacios -->
  <input type="hidden" name="Name_Middle" value="">
  <input type="hidden" name="Dropdown3" value="Perú (+51)">
  <input type="hidden" name="Dropdown" value="DNI">
  <input type="hidden" name="Number" value="">
  <!-- Catergoria(Facultad) -->
  <input type="hidden" name="SingleLine5" value="<?=esc_attr($term)?>">
  <!-- Codigo por carrera acf -->
  <input type="hidden" name="SingleLine4" value="<?=esc_attr($code_carrier)?>">
  <!-- Nombre de la carrera -->
  <input type="hidden" name="SingleLine3" value="<?=esc_attr($page_title)?>">
  <!-- Nombre del departamento -->
  <input type="hidden" name="SingleLine8" value="">


  <div class="form-body">
    <div class="form-body__fields">
      <div class="flex justify-between m-b-24">
        <div class="f-50">
          <div class="form-field form-field-select">
            <select name="SingleLine7" id="departament" required>
              <option value="" selected disabled>Departamento de procedencia</option>
              <?php foreach ($list_departaments as $dep): ?>
              <option value="<?= htmlspecialchars($dep['value']); ?>">
                <?= htmlspecialchars($dep['name']); ?>
              </option>
              <?php endforeach; ?>
            </select>
            <label for="departament">Elige tu departamento</label>
            <span class="error-message">Datos inválidos</span>
          </div>
        </div>
        <div class="f-50">
          <div class="form-field">
            <input name="Name_First" id="fullname" placeholder="" type="text" required />
            <label for="fullname">Nombres (*)</label>
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
            <input name="SingleLine" id="singleLine" placeholder="" type="text" />
            <label for="singleLine">Número de documento (*)</label>
            <span class="error-message">Datos inválidos</span>
          </div>
        </div>
      </div>

      <div class="flex justify-between">
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
<?php
// Para debug
// vdebug($utms_final);
?>