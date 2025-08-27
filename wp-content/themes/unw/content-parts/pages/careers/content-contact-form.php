<form id="form" class="contact-form formCarrera" method="POST" accept-charset="UTF-8" enctype="multipart/form-data"
  action="https://forms.zohopublic.com/adminzoho11/form/WebCarreras/formperma/T3JIAMOGnJxkHbk-qsPtLTz8XUz9NaQDXxHjjRe_AKk/htmlRecords/submit">
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
  <input type="hidden" name="utm_source" value="web">
  <input type="hidden" name="utm_medium" value="formulario_facultad">
  <input type="hidden" name="utm_campaign" value="admision_2024_II">
  <input type="hidden" name="utm_term" value="organico">
  <input type="hidden" name="utm_content" value="organico">
  <input type="hidden" name="zc_gad" value="admision_2024_II">
  <input type="hidden" name="Website" value="https://www.uwiener.edu.pe/carreras/farmacia-y-bioquimica/">

  <div class="form-body">
    <div class="form-body__fields">
      <div class="form-field form-field-select">
        <select name="Dropdown" id="documentType" type="text" required>
          <option value="-Select-" disabled>Tipo de Documento</option>
          <option value="DNI" selected="">DNI</option>
          <option value="Carnet de extranjería">Carnet de extranjería</option>
          <option value="Pasaporte">Pasaporte</option>
        </select>
        <label for="document">Tipo de documento</label>
        <span class="error-message">Datos inválidos</span>
      </div>
      <div class="form-field">
        <input name="SingleLine" id="docNumber" placeholder="" type="text" required />
        <label for="docNumber">Número de documento (*)</label>
        <span class="error-message">Datos inválidos</span>
      </div>
      <div class="form-field">
        <input name="Name_Last" id="fullname" placeholder="" type="text" required />
        <label for="fullname">Nombres y apellidos (*)</label>
        <span class="error-message">Datos inválidos</span>
      </div>
      <div class="form-field">
        <input name="PhoneNumber_countrycode" placeholder="" id="cellNumber" type="tel" required minlength="9" />
        <label for="cellNumber">Número de celular (*)</label>
        <span class="error-message">Datos inválidos</span>
      </div>
      <div class="form-field">
        <input name="Email" id="email" type="text" placeholder="" required />
        <label for="email">Correo electrónico (*)</label>
        <span class="error-message">Datos inválidos</span>
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

<!-- <div class="form-field-radio">
  <fieldset>
    <legend>Modalidad:</legend>
    <div class="radio-option">
      <input type="radio" id="pregrado" name="modalidad" value="pregrado" checked />
      <label for="pregrado">Pregrado</label>
    </div>
    <div class="radio-option">
      <input type="radio" id="gente-trabaja" name="modalidad" value="gente-trabaja" />
      <label for="gente-trabaja">Carreras para gente que trabaja</label>
    </div>
    <div class="radio-option">
      <input type="radio" id="virtual" name="modalidad" value="virtual" />
      <label for="virtual">100% virtual</label>
    </div>
  </fieldset>
</div> -->
