<?php
$content = $args['content'] ?? '';
$id = $args['id'] ?? '';
$class = $args['class'] ?? '';
?>

<div id="<?php echo esc_attr($id); ?>" class="modal <?php echo esc_attr($class); ?>">
  <div class="modal-overlay" data-modal-close></div>
  <div class="modal-container">
    <div class="modal-header">
      <button class="modal-close" data-modal-close>
        <i>
          <svg width="24" height="24">
            <use xlink:href="#close"></use>
          </svg>
        </i>
      </button>
    </div>
    <div class="modal-body">
      <?php echo $content; ?>
    </div>
  </div>
</div>
