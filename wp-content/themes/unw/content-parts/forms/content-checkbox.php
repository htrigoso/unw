<div class="form-field-checkbox">
  <input type="checkbox" name="DecisionBox1" id="DecisionBox1" checked required>
  <label for="DecisionBox1">
    <span class="custom-checkbox"></span>
    <span class="text">
      Declaro expresamente haber leído y aceptado las <button type="button" data-modal-target="politics-modal">Políticas
        de privacidad</button>
    </span>
  </label>
</div>

<?php
$privacy = get_field('privacity', 'option');

get_template_part(COMMON_CONTENT_PATH, 'rich-text-modal', [
  'id' => 'politics-modal',
  'body' => $privacy['content']
]);
?>