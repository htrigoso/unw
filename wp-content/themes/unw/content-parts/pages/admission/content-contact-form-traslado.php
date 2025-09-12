<?php
$crm_ad      = get_field('crm');
$careers = get_carreras();
$utms_default      = get_field('list_utms', 'option');
$utm_admission      = $crm_carriers['list_utms'] ?? [];
$utms_final = merge_utms($utms_default, $utm_admission);
$careers = get_carreras();
$list_campus = get_carreras_campus_modalidad();
$data_form_type = $args['data_form_type'] ?? '';
?>
<form id="<?=$data_form_type;?>" data-form="zoho" data-form-type="<?=$data_form_type;?>"
  data-careers="<?= esc_attr(wp_json_encode( $careers))?>" data-campus="<?= esc_attr(wp_json_encode( $list_campus))?>"
  class="contact-form formAdmision form-admission-2-desktop" method="POST" accept-charset="UTF-8"
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


  <!--Facultad) Falta -->
  <div class="custom-hidden"></div>
  <div class="custom-hidden-campus"></div>
  <!--Facultad) Falta -->
  <input type="hidden" name="SingleLine1" value="UNW_Pregrado"> <!-- Unidad de negocio -->
  <input type="hidden" name="SingleLine2" value="Web Admisión II"> <!-- Fuente de origen -->


  <input type="hidden" name="Dropdown500" value=""> <!-- Escoge Instituto / Universidad -->
  <input type="hidden" name="SingleLine6" value=""> <!-- Escoge instituto universitario Grupo -->
  <input type="hidden" name="SingleLine7" value=""> <!-- Escoge instituto universitario Valor -->
  <input type="hidden" name="SingleLine8" value=""> <!-- Escoge instituto universitario text -->

  <input type="hidden" name="Dropdown4" value="Activo"> <!-- Estado de período -->
  <input type="hidden" name="Website" value="<?=get_current_page_url()?>"> <!-- Url de Trakeo -->
  <input type="hidden" name="SingleLine10" value=""> <!-- Escoge tu sede - Text -->
  <input type="hidden" name="SingleLine11" value=""> <!-- Escoge tu sede - Valor -->




  <div class="form-body">
    <div class="form-body__fields">
      <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'radio', [
          'direction'    => 'flex-col justify-between',
          'form_type'=> $data_form_type,
      ]);?>
      <div class="flex justify-between m-b-24">
        <div class="f-50">
          <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'input', [
            'name'=> 'Name_First',
            'label'=> 'Nombres (*)',
            'type' => 'text',
            'max_length' => 30
          ]);?>
        </div>
        <div class="f-50">
          <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'input', [
            'name'=> 'Name_Last',
            'label'=> 'Apellidos (*)',
            'type' => 'text',
            'max_length' => 60
          ]);?>
        </div>
      </div>

      <div class="flex justify-between m-b-24">
        <div class="f-50">
          <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'input', [
            'name'=> 'SingleLine',
            'label'=> 'Número de documento (*)',
            'type' => 'tel',
          ]);?>
        </div>
        <div class="f-50">
          <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'input', [
            'name'=> 'PhoneNumber_countrycode',
            'label'=> 'Celular (*)',
            'type' => 'tel',
          ]);?>
        </div>
      </div>
      <div class="m-b-24">

        <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'input', [
            'name'=> 'Email',
            'label'=> 'Correo electrónico (*)',
            'type' => 'email',
          ]);?>
      </div>
      <div class="flex justify-between m-b-24">
        <div class="f-50">
          <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'careers', [
            'name'=> 'SingleLine3',
            'label'=> 'Elige tu carrera (*)',
            'careers' => $careers['pregrado'],
          ]);?>
        </div>
        <div class="f-50" data-html-name="campus">
          <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'campus', [
            'name'=> 'SingleLine11',
            'label'=> 'Elige tu campus (*)',
            'careers' => [],
          ]);?>
        </div>
      </div>



      <div class="form-field-radio m-b-12">
        <fieldset>
          <legend>¿Perteneces a las Fuerzas Armadas o PNP?* </legend>
          <div class="flex">
            <div class="radio-option">
              <input type="radio" id="1-r-<?=$data_form_type?>" name="Radio1" value="Sí" checked />
              <label for="1-r-<?=$data_form_type?>">Sí</label>
            </div>
            <div class="radio-option m-l-15">
              <input type="radio" id="2-r-<?=$data_form_type?>" name="Radio1" value="No" />
              <label for="2-r-<?=$data_form_type?>">No</label>
            </div>
          </div>
        </fieldset>
      </div>

      <div class="form-field-radio">
        <fieldset>
          <legend>¿Eres egresado de Instituto o estudiante de Universidad?* </legend>
          <div class="flex">
            <div class="radio-option">
              <input type="radio" id="3-r-<?=$data_form_type?>" name="Radio" value="Sí" checked />
              <label for="3-r-<?=$data_form_type?>">Sí</label>
            </div>
            <div class="radio-option m-l-15">
              <input type="radio" id="4-r-<?=$data_form_type?>" name="Radio" value="No" />
              <label for="4-r-<?=$data_form_type?>">No</label>
            </div>
          </div>
        </fieldset>
      </div>

    </div>
    <p class=" form-body__hint">
      (*) Campos obligatorios
    </p>
    <div class="form-body__terms">
      <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'checkbox', [
                    'form_type' => $data_form_type
                  ]);?>
    </div>
    <div class="form-body__actions">
      <button type="submit" class="btn btn-primary" id="button-send">Enviar</button>
    </div>
  </div>
</form>