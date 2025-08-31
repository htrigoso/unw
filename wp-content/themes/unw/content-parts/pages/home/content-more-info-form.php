<?php
ob_start();
?>
<form class="more-form">
  <div class="form-header more-form__header">
    <i>
      <svg width="52" height="52">
        <use xlink:href="#chat"></use>
      </svg>
    </i>
    <h4 class="form-header__title more-form__header--title">
      ¡Déjanos tus datos y nos contactaremos contigo!
    </h4>
  </div>
  <div class="form-body more-form-body">
    <div class="form-field-radio">
      <fieldset class="more-form-body__radio">
        <div class="radio-option">
          <input type="radio" id="pregrado" name="form_mixto" value="pregrado" checked />
          <label for="pregrado">Pregrado</label>
        </div>
        <div class="radio-option">
          <input type="radio" id="trabajo" name="form_mixto" value="trabajo" />
          <label for="trabajo">Carreras para gente que trabaja</label>
        </div>
        <div class="radio-option">
          <input type="radio" id="virtual" name="form_mixto" value="virtual" />
          <label for="virtual">100% virtual</label>
        </div>
      </fieldset>
    </div>
    <div class="form-body__fields more-form-body__fields">
      <div class="form-field form-field-select">
        <select name="carrera" id="carrera" type="text" required>
          <option value="" selected="" disabled="">Elige tu carrera</option>
          <option value="elec">Electrónica</option>
          <option value="mec">Mecánica</option>
        </select>
        <label for="document">Elige tu carrera</label>
        <span class="error-message">Datos inválidos</span>
      </div>
      <div class="form-field form-field-select">
        <select name="campus" id="campus" type="text" required>
          <option value="" selected="" disabled="">Elige tu campus</option>
          <option value="camp">Campus 1</option>
          <option value="camp1">Campus 2</option>
        </select>
        <label for="document">Elige tu campus</label>
        <span class="error-message">Datos inválidos</span>
      </div>
      <div class="form-field">
        <input name="nombre" id="nombre" placeholder="" type="text" required />
        <label for="nombre">Nombre (*)</label>
        <span class="error-message">Datos inválidos</span>
      </div>
      <div class="form-field">
        <input name="apellido" id="apellido" placeholder="" type="text" required />
        <label for="apellido">Apellidos (*)</label>
        <span class="error-message">Datos inválidos</span>
      </div>
      <div class="form-field">
        <input name="doc" id="doc" placeholder="" type="text" required />
        <label for="doc">Número de documento (*)</label>
        <span class="error-message">Datos inválidos</span>
      </div>
      <div class="form-field">
        <input name="cel" id="cel" placeholder="" type="text" required />
        <label for="cel">Celular (*)</label>
        <span class="error-message">Datos inválidos</span>
      </div>
      <div class="form-field">
        <input name="email" id="email" placeholder="" type="email" required />
        <label for="email">Correo electrónico (*)</label>
        <span class="error-message">Datos inválidos</span>
      </div>
    </div>
    <p class="form-body__hint">
      (*) Campos obligatorios
    </p>
    <div class="form-body__terms">
      <div class="form-field-checkbox">
        <input type="checkbox" id="politicas" name="politicas" required checked>
        <label for="politicas">
          <span class="custom-checkbox"></span>
          <span class="text">
            Declaro expresamente haber leído y aceptado las <a href="#">Políticas de privacidad</a>
          </span>
        </label>
      </div>
    </div>
    <div class="form-body__actions more-form-body__actions">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>
<?php
$content = ob_get_clean();
?>
<?php
get_template_part(COMMON_CONTENT_PATH, 'modal', [
  'content' => $content,
  'id' => 'modal-more-info',
  'variant' => 'float',
  'class' => 'more-modal'
]);
?>
