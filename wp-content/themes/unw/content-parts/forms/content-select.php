<?php
$input  = $args ?? [];

if (empty($input['name'])) return;
$options = $input['options'] ?? [];
$id     = $input['id'] ?? $input['name'];
$label  = $input['label'] ?? '';
$req    = array_key_exists('required', $input) ? (bool) $input['required'] : true;
?>

<div class="form-field form-field-select">
  <select name="<?= esc_attr($input['name']); ?>" id="<?= esc_attr($id); ?>" <?php echo $req ? 'required' : ''; ?>>
    <option value="" selected>--Seleccione--</option>
    <?php
     foreach ($options as $key => $value):
    ?>
    <option value="<?php echo esc_attr($value); ?>"><?php echo esc_html($value); ?></option>

    ?>
    <?php endforeach?>
  </select>
  <label for="<?php echo esc_attr($id); ?>">
    <?php echo esc_html($label); ?>
  </label>
</div>
