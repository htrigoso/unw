<?php
$input = $args ?? [];

if (empty($input['name'])) return;
$id    = $input['id'] ?? $input['name'];
$label = $input['label'] ?? '';
 // Por defecto requerido
$req   = array_key_exists('required', $input) ? (bool) $input['required'] : true;
$careers = $input['careers']?? []
?>

<div class="form-field form-field-select">
  <select name="<?php echo esc_attr($input['name']); ?>" id="careerSelect" required>
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
  <label for="<?php echo esc_attr($id); ?>"><?php echo esc_html($label); ?></label>
</div>
