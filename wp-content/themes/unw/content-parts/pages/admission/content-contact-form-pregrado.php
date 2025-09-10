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

      <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'radio', [
          'direction'    => 'flex-col justify-between',
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

      <div class="flex justify-between" data-html-name="departament">
        <div class="f-50">
          <?php get_template_part(GENERAL_FORM_CONTACT_PATH, 'careers', [
            'name'=> 'SingleLine3',
            'label'=> 'Elige tu carrera (*)',
            'careers' => $careers,
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
