<?php
$input  = $args ?? [];

if (empty($input['name'])) return;

$id     = $input['id'] ?? $input['name'];
$label  = $input['label'] ?? '';
$req    = array_key_exists('required', $input) ? (bool) $input['required'] : true;
$careers_raw = $input['careers'] ?? [];

// Normalizamos: cada facultad tendrá una clave "list"
$careers = [];
foreach ($careers_raw as $facultad => $items) {
    foreach ($items as $item) {
        $careers[$facultad]['list'][] = [
            'value' => $item['code'], // value del option = code del CRM
            'name'  => $item['title'], // label visible
            'slug'  => $item['slug'] // label visible
        ];
    }
}
?>

<div class="form-field form-field-select">
  <select name="<?php echo esc_attr($input['name']); ?>" id="careerSelect" <?php echo $req ? 'required' : ''; ?>>
    <option value="" selected disabled>--Seleccione--</option>
    <?php foreach ($careers as $facultad => $group) : ?>
    <optgroup label="<?= esc_html($facultad); ?>">
      <?php foreach ($group['list'] as $item) : ?>
      <option data-key="<?= esc_attr($item['slug']); ?>" value="<?= esc_attr($item['value']); ?>">
        <?= esc_html($item['name']); ?>
      </option>
      <?php endforeach; ?>
    </optgroup>
    <?php endforeach; ?>
  </select>
  <label for="<?php echo esc_attr($id); ?>">
    <?php echo esc_html($label); ?>
  </label>
</div>
