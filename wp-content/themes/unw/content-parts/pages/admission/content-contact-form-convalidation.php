<?php
$crm_ad      = get_field('crm');
$careers = $crm_ad['careers'];
$utms_default      = get_field('list_utms', 'option');
$utm_admission      = $crm_carriers['list_utms'] ?? [];
$utms_final = merge_utms($utms_default, $utm_admission);
$form_crm_option   = get_field('form_crm', 'option');
$list_departaments = $form_crm_option['list_departaments'];
$is_departments = $crm_ad['is_departments'];

$departments_json =  [] ;

if($is_departments) {
  $departments_json =  $list_departaments;
}
?>
<form class="contact-form formAdmision" data-departaments="<?= esc_attr(wp_json_encode( $departments_json))?>"
  method="POST" accept-charset="UTF-8" enctype="multipart/form-data"
  action="https://forms.zohopublic.com/adminzoho11/form/Admisin/formperma/qazbrVloDUNKCisJII7v7HMG2gMsSkD30FMV9GEJM4E/htmlRecords/submit">
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

  <div class="custom-hidden"></div>

  <?php foreach ($utms_final as $utm): ?>
  <input type="hidden" name="<?= esc_attr($utm['name']); ?>" value="<?= esc_attr($utm['value']); ?>">
  <?php endforeach; ?>




  <!-- Enviar Campos vacios -->
  <input type="hidden" name="Name_Middle" value="">
  <input type="hidden" name="Dropdown3" value="Perú (+51)">
  <input type="hidden" name="Dropdown" value="DNI">
  <input type="hidden" name="Dropdown2" value=""> <!-- Grado -->
  <input type="hidden" name="Number" value=""> <!-- Año de egreso -->




  <input type="hidden" name="SingleLine1" value=""> <!-- Unidad de negocio -->
  <input type="hidden" name="SingleLine2" value=""> <!-- Fuente de origen -->


  <input type="hidden" name="Dropdown500" value=""> <!-- Escoge Instituto / Universidad -->
  <input type="hidden" name="SingleLine6" value=""> <!-- Escoge instituto universitario Grupo -->
  <input type="hidden" name="SingleLine7" value=""> <!-- Escoge instituto universitario Valor -->
  <input type="hidden" name="SingleLine9" value="">

  <input type="hidden" name="Dropdown4" value="Activo"> <!-- Estado de período -->
  <input type="hidden" name="Website" value="<?=get_current_page_url()?>"> <!-- Url de Trakeo -->
  <input type="hidden" name="SingleLine10" value=""> <!-- Escoge tu sede - Text -->
  <input type="hidden" name="SingleLine11" value=""> <!-- Escoge tu sede - Valor -->


  <div class="form-body">
    <div class="form-body__fields">

      <div class="form-field-radio m-b-24">
        <fieldset class="flex">
          <div class="radio-option ">
            <input type="radio" id="pregrado" name="form_mixto" value="pregrado" checked />
            <label for="pregrado">Presencial</label>
          </div>
          <div class="radio-option m-l-15">
            <input type="radio" id="virtual" name="form_mixto" value="virtual" />
            <label for="virtual">100% virtual</label>
          </div>
        </fieldset>
      </div>

      <div class="flex justify-between m-b-24">
        <div class="f-50">
          <div class="form-field">
            <input name="Name_First" id="Name_First" placeholder="" type="text" required />
            <label for="Name_First">Nombres (*)</label>
            <span class="error-message">Datos inválidos</span>
          </div>
        </div>
        <div class="f-50">
          <div class="form-field">
            <input name="Name_Last" id="Name_Last" placeholder="" type="text" />
            <label for="Name_Last">Apellidos (*)</label>
            <span class="error-message">Datos inválidos</span>
          </div>
        </div>
      </div>

      <div class="flex justify-between m-b-24">
        <div class="f-50">
          <div class="form-field">
               <input required type="tel" inputmode="numeric" pattern="\d{8}" maxlength="8" name="SingleLine" placeholder=""
              id="SingleLine" />
            <label for="SingleLine">Número de documento (*)</label>
            <span class="error-message">Datos inválidos</span>
          </div>
        </div>
        <div class="f-50">
          <div class="form-field">
            <input type="tel" inputmode="numeric" pattern="\d{9}" maxlength="9" name="PhoneNumber_countrycode"
              id="PhoneNumber_countrycode" placeholder="" required />
            <label for="PhoneNumber_countrycode">Celular (*)</label>
            <span class="error-message">Datos inválidos</span>
          </div>
        </div>
      </div>
      <div class="m-b-24">

        <div class="form-field">
          <input type="email" name="Email" id="Email" placeholder="" required />
          <label for="Email">Correo electrónico (*)</label>
          <span class="error-message">Datos inválidos</span>
        </div>

      </div>

      <div class="flex justify-between m-b-24" data-html-name="departament">
        <div class="f-50">
          <div class="form-field form-field-select">
            <select name="SingleLine3" id="careerSelect" required>
              <option value="" selected disabled>--Seleccione--</option>
              <?php foreach ($careers as $career) : ?>
              <optgroup label="<?= esc_html($career['faculty']); ?>">
                <?php if (!empty($career['list'])) : ?>
                <?php foreach ($career['list'] as $item) : ?>
                <option value="<?= esc_attr($item['value']); ?>">
                  <?= esc_html($item['name']); ?>
                </option>
                <?php endforeach; ?>
                <?php endif; ?>
              </optgroup>
              <?php endforeach; ?>
            </select>
            <label for="careerSelect">Elige tu carrera</label>
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
