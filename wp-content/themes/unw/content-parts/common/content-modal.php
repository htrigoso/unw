<?php
$header = $args['header'] ?? '';
$content = $args['content'] ?? '';
$id = $args['id'] ?? '';
$class = $args['class'] ?? '';
$variant = $args['variant'] ?? 'default'; // Variants: default | float
$preloaded = $args['preloaded'] ?? false; // TRUE: Always loaded, FALSE: conditional load

if (!function_exists('render_modal_content')) {
  function render_modal_content($id, $class, $variant, $header, $content)
  {
?>
    <div id="<?php echo esc_attr($id); ?>" class="modal <?= $variant ?> <?php echo esc_attr($class); ?>">
      <div class="modal-overlay" data-modal-close></div>
      <div class="modal-wrapper">
        <div class="modal-container">
          <div class="modal-header">
            <?php echo $header; ?>
            <button class="modal-close" data-modal-close>
              <i><svg width="24" height="24">
                  <use xlink:href="#close"></use>
                </svg></i>
            </button>
          </div>
          <div class="modal-body">
            <?php echo $content; ?>
          </div>
        </div>
        <button class="modal-close float" data-modal-close>
          <i><svg width="24" height="24">
              <use xlink:href="#close"></use>
            </svg></i>
        </button>
      </div>
    </div>
  <?php
  }
}

if ($preloaded) {
  render_modal_content($id, $class, $variant, $header, $content);
} else {
  ?>
  <template id="template-<?= $id ?>">
    <?php render_modal_content($id, $class, $variant, $header, $content); ?>
  </template>
<?php
}
?>
