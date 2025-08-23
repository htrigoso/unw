<?php
if (empty($args['breadcrumb']) || !is_array($args['breadcrumb'])) {
  return;
}

$items = $args['breadcrumb'];
$lastIndex = count($items) - 1;
?>

<div class="breadcrumb">
  <?php foreach ($items as $index => $item): ?>
    <?php if ($index > 0): ?>
      <i class="separator">
        <svg width="16" height="16">
          <use xlink:href="#chevron-right"></use>
        </svg>
      </i>
    <?php endif; ?>

    <?php
    $label = esc_html($item['label']);
    $isLast = $index === $lastIndex;
    ?>

    <?php if (!$isLast && !empty($item['href'])): ?>
      <a class="breadcrumb__label" href="<?= esc_url($item['href']) ?>"><?= $label ?></a>
    <?php else: ?>
      <span class="breadcrumb__label <?php if ($isLast) echo 'current'; ?>"><?= $label ?></span>
    <?php endif; ?>
  <?php endforeach; ?>
</div>
