<?php
$title = $args['title'] ?? '';
$content = $args['content'] ?? '';
$variant = $args['variant'] ?? 'standard'; // 'filled' o 'standard'
?>

<div class="accordion-item accordion-<?= esc_attr($variant) ?>">
  <div class="accordion-header">
    <div class="accordion-label"><?= esc_html($title) ?></div>
    <i>
      <svg width="24" height="24">
        <use xlink:href="#chevron-down-2"></use>
      </svg>
    </i>
  </div>
  <div class="accordion-content formatted-content">
    <?= $content ?>
  </div>
</div>
