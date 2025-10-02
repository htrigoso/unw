<?php
$input = $args ?? [];

// default classes
$directionClass = !empty($input['direction']) ? $input['direction'] : ''; // solo si se pasa
$optionClass    = $input['option_class'] ?? 'm-b-10';
$location    = $input['location'] ?? '';
$id = $input['form_type'] ?? 'none';
$deactivate = $input['deactivate'] ?? 0;
?>

<div class="form-field-radio m-b-24 <?=esc_attr($location);?>" data-deactivate="<?=esc_attr($deactivate);?>">
  <fieldset class="flex <?php echo esc_attr($directionClass); ?>">
    <div class="radio-option <?php echo esc_attr($optionClass); ?>">
      <input type="radio" id="1-<?=$id?>" name="form_mixto" value="pregrado" checked />
      <label for="1-<?=$id?>">Presencial</label>
    </div>
    <div class="radio-option <?php echo esc_attr($optionClass); ?>">
      <input type="radio" id="2-<?=$id?>" name="form_mixto" value="work" />
      <label for="2-<?=$id?>">Carreras para gente que trabaja</label>
    </div>
    <div class="radio-option <?php echo esc_attr($optionClass); ?>">
      <input type="radio" id="3-<?=$id?>" name="form_mixto" value="virtual" />
      <label for="3-<?=$id?>">100% virtual</label>
    </div>
  </fieldset>
</div>