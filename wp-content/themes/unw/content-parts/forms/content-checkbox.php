<?php
$input = $args ?? [];
$id = $input['form_type'] ?? 'none';
$name = $input['name'] ?? 'DecisionBox1';
$is_term = get_field('form_crm_status_term', 'option');

?>
<div class="form-field-checkbox">
  <?php if(!$is_term): ?>
  <input type="checkbox" name="<?php echo esc_attr($name); ?>" id="checkbox-<?=$id?>" checked required>
  <?php else: ?>
  <input type="hidden" name="<?php echo esc_attr($name); ?>" value="on">
  <?php endif; ?>

  <label for="checkbox-<?=$id?>" <?php if($is_term): ?>class="no-cursor" <?php endif; ?>>
    <?php if(!$is_term): ?>
    <span class="custom-checkbox"></span>
    <?php endif; ?>
    <span class="text">
      Declaro expresamente haber leído y aceptado las <button type="button" data-modal-target="politics-modal">Políticas
        de privacidad</button>
    </span>
  </label>
</div>

<?php
$privacy_page = get_page_by_path('politicas-de-privacidad');

if ($privacy_page) {
  get_template_part(COMMON_CONTENT_PATH, 'rich-text-modal', [
    'id'   => 'politics-modal',
    'body' => '<strong style="font-size:2rem; display:block; text-align:center;">' . esc_html($privacy_page->post_title) . '</strong>' . apply_filters('the_content', $privacy_page->post_content),
  ]);
}
?>
