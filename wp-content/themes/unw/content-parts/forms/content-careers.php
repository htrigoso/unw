<?php
$input  = $args ?? [];

if (empty($input['name'])) return;

$id     = $input['id'] ?? $input['name'];
$label  = $input['label'] ?? '';
$req    = array_key_exists('required', $input) ? (bool) $input['required'] : true;
$careers_raw = $input['careers'] ?? []; // el array que mostraste
?>

<div class="form-field form-field-select">
  <select name="<?php echo esc_attr($input['name']); ?>" id="careerSelect" <?php echo $req ? 'required' : ''; ?>>
    <option value="" selected>--Seleccione--</option>

    <?php foreach ($careers_raw as $facultad => $items) : ?>
    <optgroup label="<?= esc_html($facultad); ?>">
      <?php foreach ($items as $item) : ?>
      <option data-mode="<?= esc_attr($item['modalidad']); ?>" data-key="<?= esc_attr($item['slug']); ?>"
        value="<?= esc_attr($item['code']); ?>">
        <?= esc_html($item['title']); ?>
      </option>
      <?php endforeach; ?>
    </optgroup>
    <?php endforeach; ?>
  </select>

  <label for="<?php echo esc_attr($id); ?>">
    <?= esc_html($label); ?>
  </label>
</div>