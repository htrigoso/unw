<?php
$input  = $args ?? [];

if (empty($input['name'])) return;

$id     = $input['id'] ?? $input['name'];
$label  = $input['label'] ?? '';
$req    = array_key_exists('required', $input) ? (bool) $input['required'] : true;
?>

<div class="form-field form-field-select">
  <select id="campusSelect" <?php echo $req ? 'required' : ''; ?>>
    <option value="" selected>--Seleccione--</option>
  </select>
  <label for="<?php echo esc_attr($id); ?>">
    <?php echo esc_html($label); ?>
  </label>
</div>