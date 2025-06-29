<?php
$title = $args['title'] ?? '';
$content = $args['content'] ?? '';
?>

<div class="accordion-one accordion-item">
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
