<?php
$label = $args['label'] ?? '';
$content = $args['content'] ?? '';
$variant = $args['variant'] ?? 'standard'; // 'filled' o 'standard'
?>

<div class="accordion-item accordion-<?= esc_attr($variant) ?>">
  <div class="accordion-header">
    <div class="accordion-label"><?= esc_html($label) ?></div>
    <i>
      <svg width="24" height="24">
        <use xlink:href="#chevron-down-2"></use>
      </svg>
    </i>
  </div>
  <div class="accordion-content">
    <?= $content ?>
  </div>
</div>
