<?php
$input = $args ?? [];

// default classes
$directionClass = !empty($input['direction']) ? $input['direction'] : ''; // solo si se pasa
$optionClass    = $input['option_class'] ?? 'm-b-10';
$location    = $input['location'] ?? '';
?>

<div class="form-field-radio m-b-24 <?=esc_attr($location);?>">
  <fieldset class="flex <?php echo esc_attr($directionClass); ?>">
    <div class="radio-option <?php echo esc_attr($optionClass); ?>">
      <input type="radio" id="pregrado" name="form_mixto" value="pregrado" checked />
      <label for="pregrado">Presencial</label>
    </div>
    <div class="radio-option <?php echo esc_attr($optionClass); ?>">
      <input type="radio" id="work" name="form_mixto" value="work" />
      <label for="work">Carreras para gente que trabaja</label>
    </div>
    <div class="radio-option <?php echo esc_attr($optionClass); ?>">
      <input type="radio" id="virtual" name="form_mixto" value="virtual" />
      <label for="virtual">100% virtual</label>
    </div>
  </fieldset>
</div>
