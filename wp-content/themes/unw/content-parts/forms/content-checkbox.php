<?php
$input = $args ?? [];
$id = $input['form_type'] ?? 'none'
?>
<div class="form-field-checkbox">
  <input type="checkbox" name="DecisionBox1" id="checkbox-<?=$id?>" checked required>
  <label for="checkbox-<?=$id?>">
    <span class="custom-checkbox"></span>
    <span class="text">
      Declaro expresamente haber leído y aceptado las <button type="button" data-modal-target="politics-modal">Políticas
        de privacidad</button>
    </span>
  </label>
</div>

<?php
// Obtener la página por su slug
$privacy_page = get_page_by_path('politicas-de-privacidad');

if ($privacy_page) {
  get_template_part(COMMON_CONTENT_PATH, 'rich-text-modal', [
    'id'   => 'politics-modal',
    'body' => '<h1>' . esc_html($privacy_page->post_title) . '</h1>' . apply_filters('the_content', $privacy_page->post_content),
  ]);
}
?>
