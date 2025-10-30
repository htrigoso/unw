<?php
$label   = $args['label'] ?? '';
$content = $args['content'] ?? '';
$variant = $args['variant'] ?? 'standard';
$id      = uniqid('accordion-'); // ID único
?>

<div class="accordion-item accordion-<?= esc_attr($variant) ?>">
  <div class="accordion-header">
    <div class="accordion-label"><?= esc_html($label) ?></div>
    <button type="button" aria-expanded="false" aria-controls="<?= esc_attr($id) ?>" id="<?= esc_attr($id) ?>-btn">
      <i>
        <svg width="24" height="24">
          <use xlink:href="#chevron-down-2"></use>
        </svg>
      </i>
    </button>
  </div>

  <div class="accordion-content" id="<?= esc_attr($id) ?>" aria-hidden="true" aria-labelledby="<?= esc_attr($id) ?>-btn"
    data-content="paragraph">
    <?= wp_kses_post($content); ?>
  </div>
</div>