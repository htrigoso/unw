<?php

/**
 * Formulario de solicitud de información - Solo maqueta
 *
 * @param array $args {
 *     @type string $form_id       ID del formulario
 *     @type string $form_action   URL de acción del formulario
 *     @type array  $utms          Lista de UTMs
 *     @type array  $careers       Lista de carreras
 *     @type array  $list_departaments  Lista de departamentos
 *     @type array  $list_campus   Lista de campus
 *     @type bool   $hide_dni      Ocultar campo DNI
 *     @type array  $validation_dni Configuración de validación DNI
 *     @type string $location      Ubicación del formulario (para variantes)
 *
 *     @type boolean $shadow_box  Activar sombra en el contenedor
 *      @type boolean $responsive  Activar versión responsive con columnas
 * }
 */

$form_id = $args['form_id'] ?? 'form-general';
$form_action = $args['form_action'] ?? '';
$utms = $args['utms'] ?? [];
$careers = $args['careers'] ?? [];
$list_departaments = $args['list_departaments'] ?? [];
$list_campus = $args['list_campus'] ?? [];
$hide_dni = $args['hide_dni'] ?? false;
$validation_dni = $args['validation_dni'] ?? [];
$location = $args['location'] ?? 'is-home';
$shadow_box = $args['shadow_box'] ?? false;
$responsive = $args['responsive'] ?? false;
$vertical_modality = $args['vertical_modality'] ?? false;
$position_form = $args['position_form'] ?? '';
$event_id = $args['event_id'] ?? '';
?>

<form id="<?= esc_attr($form_id) ?>" data-form="zoho" name="<?= esc_attr($form_id) ?>"
  class="more-form newformfloat<?= $shadow_box ? ' more-form__shadow-box' : '' ?><?= $responsive ? ' more-form__responsive' : '' ?>"
  method="POST" accept-charset="UTF-8" enctype="multipart/form-data" action="<?= esc_attr($form_action) ?>"
  data-position-form="<?= esc_attr($position_form) ?>">

  <div class="form-header more-form__header">
    <h4 class="form-header__title more-form__header--title">
      ¡INSCRIBETE AQUÍ!
    </h4>
  </div>

  <?php foreach ($utms as $utm): ?>
  <input type="hidden" name="<?= esc_attr($utm['name']); ?>" value="<?= esc_attr($utm['value']); ?>">
  <?php endforeach; ?>

  <div class="custom-hidden"></div>

  <div class="custom-hidden-campus"></div>
  <div class="custom-hidden-departament"></div>

  <!-- Enviar Campos vacios -->
  <input type="hidden" name="Dropdown4" value="Perú (+51)">
  <input type="hidden" name="Dropdown3" value="DNI">

  <input type="hidden" name="SingleLine11" value="UNW_Pregrado"> <!-- Unidad de negocio -->


  <input type="hidden" name="Dropdown6" value="Activo"> <!-- Estado de período -->
  <input type="hidden" name="Website" value="<?= get_current_page_url() ?>"> <!-- Url de Trakeo -->
  <input type="hidden" name="Dropdown7" value="Evento"> <!-- Comentarios -->
  <input type="hidden" name="SingleLine10" value="<?= esc_attr($event_id) ?>"> <!-- Comentarios -->
  <input type="hidden" name="Radio" id="hidden-radio-modalidad" value=""> <!-- Modalidad dinámica -->


  <div class="form-body more-form-body">
    <div class="form-body__fields">
      <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'radio', [
        'direction'    =>  'flex-col',
        'location'     => $location,
        'form_type'   => $position_form,
      ]); ?>


      <div class="flex justify-between m-b-24 more-form-body__row">
        <div class="f-50">
          <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'input', [
            'name' => 'SingleLine',
            'label' => 'Nombres (*)',
            'type' => 'text',
            'max_length' => 30,
            'skip_auto_validation' => true
          ]); ?>
        </div>
        <div class="f-50">
          <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'input', [
            'name' => 'SingleLine1',
            'label' => 'Apellidos (*)',
            'type' => 'text',
            'max_length' => 60
          ]); ?>
        </div>
      </div>

      <div class="flex justify-between m-b-24 more-form-body__row">
        <?php
        if (!$hide_dni) {
          $title = ($validation_dni['title'] ?? 'DNI') . (!empty($validation_dni['required']) ? ' (*)' : '');
        ?>
        <div class="f-50">
          <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'input', [
              'name' => 'SingleLine2',
              'label'    => $title,
              'type' => 'tel',
              'required' => $validation_dni['required'] ?? false
            ]); ?>
        </div>
        <?php } else { ?>
        <div class="f-50">
          <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'input', [
              'name' => 'Email',
              'label' => 'Correo electrónico (*)',
              'type' => 'email',
            ]); ?>
        </div>
        <?php } ?>
        <div class="f-50">
          <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'input', [
            'name' => 'PhoneNumber',
            'label' => 'Celular (*)',
            'type' => 'tel',
          ]); ?>
        </div>
      </div>

      <div class="m-b-24">
        <?php if (!$hide_dni) { ?>
        <div class="f-100">
          <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'input', [
              'name' => 'Email',
              'label' => 'Correo electrónico (*)',
              'type' => 'email',
            ]); ?>
        </div>
        <?php } ?>
      </div>

      <div class="flex justify-between more-form-body__row m-b-24" data-html-name="departament">
        <div class="f-50">
          <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'careers', [
            'name' => 'SingleLine3',
            'label' => 'Elige tu carrera (*)',
            'careers' => $careers['pregrado'] ?? [],
          ]); ?>
        </div>
        <div class="f-50" data-html-name="campus">
          <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'campus', [
            'name' => 'SingleLine7',
            'label' => 'Elige tu campus (*)',
            'careers' => [],
          ]); ?>
        </div>
      </div>
      <div class="flex" data-html-name="degree">
        <div class="f-100">
          <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'select', [
            'name' => 'Dropdown2',
            'label' => 'Grado de estudios (*)',
            'options' => [
              '4to grado',
              '5to grado',
              'Ya terminé el colegio',
            ],
          ]); ?>
        </div>
      </div>
    </div>

    <p class="form-body__hint">
      (*) Campos obligatorios
    </p>

    <div class="form-body__terms">
      <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'checkbox', ['name' => 'DecisionBox']); ?>
    </div>

    <div class="form-body__actions more-form-body__actions">
      <button type="submit" class="btn btn-primary" id="button-send">Enviar</button>
    </div>
  </div>
</form>
