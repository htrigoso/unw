<?php
$input = $args ?? [];

if (empty($input['name'])) return;

$type  = $input['type'] ?? 'text';
$id    = $input['id'] ?? $input['name'];
$label = $input['label'] ?? '';
 // Por defecto requerido
$req   = array_key_exists('required', $input) ? (bool) $input['required'] : true;

$extra_attrs = '';
if ($input['name'] === 'SingleLine') {
   $extra_attrs .= ' inputmode="numeric" pattern="\d{8}" maxlength="8"';
}
if ($input['name'] === 'PhoneNumber_countrycode') {
   $extra_attrs .= ' inputmode="numeric" pattern="\d{9}" maxlength="9"';
}
?>
<div class="form-field">
  <input data-input-type="<?php echo esc_attr($input['name']); ?>" type="<?php echo esc_attr($type); ?>" class="<?php echo esc_attr($input['name']); ?>"
    name="<?php echo esc_attr($input['name']); ?>" id="<?php echo esc_attr($id); ?>" placeholder=""
    <?php echo $req ? 'required' : ''; ?> <?php echo $extra_attrs; ?> />
  <label for="<?php echo esc_attr($id); ?>">
    <?php echo esc_html($label); ?>
  </label>
</div>
