<form class="contact-form">
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

  <div class="form-body">
    <div class="form-body__fields">
      <div class="form-field form-field-select">
        <label for="document">Nombre</label>
        <select name="document" id="documentType" type="text" required>
          <option value="" selected disabled>Tipo de documento (*)</option>
          <option value="dni">DNI</option>
          <option value="carnet">Carnet de extranjería</option>
        </select>
        <span class="error-message">Datos inválidos</span>
      </div>
      <div class="form-field">
        <label for="docNumber">Número de documento</label>
        <input name="docNumber" id="docNumber" type="text" placeholder="Número de documento (*)" required />
        <span class="error-message">Datos inválidos</span>
      </div>
      <div class="form-field">
        <label for="fullname">Nombres y apellidos</label>
        <input name="fullname" id="fullname" type="text" placeholder="Nombres y apellidos (*)" required />
        <span class="error-message">Datos inválidos</span>
      </div>
      <div class="form-field">
        <label for="cellNumber">Número de celular</label>
        <input name="cellNumber" id="cellNumber" type="text" placeholder="Número de celular (*)" required />
        <span class="error-message">Datos inválidos</span>
      </div>
      <div class="form-field">
        <label for="email">Correo electrónico</label>
        <input name="email" id="email" type="text" placeholder="Correo electrónico (*)" required />
        <span class="error-message">Datos inválidos</span>
      </div>
    </div>
    <p class="form-body__hint">
      (*) Campos obligatorios
    </p>
    <div class="form-body__terms">
      <div class="form-field-checkbox">
        <input type="checkbox" id="politicas" name="politicas">
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
        <input
          type="radio"
          id="pregrado"
          name="modalidad"
          value="pregrado"
          checked />
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
