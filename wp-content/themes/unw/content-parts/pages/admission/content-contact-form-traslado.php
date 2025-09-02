<?php
$crm_ad      = get_field('crm');
$careers = $crm_ad['careers'];
$utms_default      = get_field('list_utms', 'option');
$utm_admission      = $crm_carriers['list_utms'] ?? [];
$utms_final = merge_utms($utms_default, $utm_admission);
?>
<form id="form-traslado" class="contact-form formAdmision" method="POST" accept-charset="UTF-8"
  enctype="multipart/form-data"
  action="https://forms.zohopublic.com/adminzoho11/form/AdmisinII/formperma/_m8BugFNCHb9CoXtj6nhvLnp7I_JAlphigAw3SovFkI/htmlRecords/submit">
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
  <input type="hidden" name="Dropdown2" value=""> <!-- Grado -->
  <input type="hidden" name="Number" value=""> <!-- Año de egreso -->
  <input type="hidden" name="SingleLine1" value=""> <!-- Unidad de negocio -->

  <input type="hidden" name="SingleLine5" value="">
  <!--Facultad) -->
  <input type="hidden" name="SingleLine4" value=""> <!-- Codigo por carrera acf -->
  <input type="hidden" name="SingleLine3" value=""> <!-- Escoge tu facultad valor -->

  <input type="hidden" name="Dropdown500" value=""> <!-- Escoge Instituto / Universidad -->
  <input type="hidden" name="SingleLine6" value=""> <!-- Escoge instituto universitario Grupo -->
  <input type="hidden" name="SingleLine7" value=""> <!-- Escoge instituto universitario Valor -->
  <input type="hidden" name="SingleLine8" value=""> <!-- Escoge instituto universitario text -->

  <input type="hidden" name="Dropdown4" value=""> <!-- Estado de período -->
  <input type="hidden" name="Website" value="<?=get_current_page_url()?>"> <!-- Url de Trakeo -->
  <input type="hidden" name="SingleLine2" value=""> <!-- Fuente de origen -->
  <input type="hidden" name="SingleLine10" value=""> <!-- Escoge tu sede - Text -->
  <input type="hidden" name="SingleLine11" value=""> <!-- Escoge tu sede - Valor -->


  <div class="form-body">
    <div class="form-body__fields">
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
            <input name="SingleLine" placeholder="" id="SingleLine" type="tel" />
            <label for="SingleLine">Número de documento</label>
            <span class="error-message">Datos inválidos</span>
          </div>
        </div>
        <div class="f-50">
          <div class="form-field">
            <input name="PhoneNumber_countrycode" id="PhoneNumber_countrycode" type="text" placeholder="" required />
            <label for="PhoneNumber_countrycode">Celular (*)</label>
            <span class="error-message">Datos inválidos</span>
          </div>
        </div>
      </div>
      <div class="flex justify-between m-b-24">
        <div class="f-50">
          <div class="form-field">
            <input name="Email" id="Email" type="text" placeholder="" required />
            <label for="Email">Correo electrónico (*)</label>
            <span class="error-message">Datos inválidos</span>
          </div>
        </div>
        <div class="f-50">
          <div class="form-field form-field-select">
            <select name="Dropdown100" id="careerSelect" required>
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
            <label for="careerSelect">Escoge tu carrera</label>
            <span class="error-message">Datos inválidos</span>
          </div>
        </div>
      </div>



      <div class="form-field-radio m-b-12">
        <fieldset>
          <legend>¿Perteneces a las Fuerzas Armadas o PNP?* </legend>
          <div class="flex">
            <div class="radio-option">
              <input type="radio" id="pregrado" name="Radio1" value="Sí" checked />
              <label for="pregrado">Sí</label>
            </div>
            <div class="radio-option m-l-15">
              <input type="radio" id="gente-trabaja" name="Radio1" value="No" />
              <label for="gente-trabaja">No</label>
            </div>
          </div>
        </fieldset>
      </div>

      <div class="form-field-radio">
        <fieldset>
          <legend>¿Eres egresado de Instituto o estudiante de Universidad?* </legend>
          <div class="flex">
            <div class="radio-option">
              <input type="radio" id="pregrado" name="Radio" value="Sí" checked />
              <label for="pregrado">Sí</label>
            </div>
            <div class="radio-option m-l-15">
              <input type="radio" id="gente-trabaja" name="Radio" value="No" />
              <label for="gente-trabaja">No</label>
            </div>
          </div>
        </fieldset>
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
// vdebug($crm_ad);