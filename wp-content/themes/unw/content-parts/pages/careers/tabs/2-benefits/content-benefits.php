<?php
$benefits_info = $args['benefits'] ?? null;
if (!empty($benefits_info) && is_array($benefits_info['list'])) :
  $title = $benefits_info['title'] ?? '';
  $benefits_list = $benefits_info['list'];
?>
<section class="benefits">
  <h2 class="benefits__title"><?= $title; ?></h2>
  <ul class="benefits__list">
    <?php foreach ($benefits_list as $benefit): ?>
    <?php
        $icon_url = $benefit['icon']['url'] ?? '';
        $benefit_title = $benefit['title'] ?? '';
        $benefit_description = $benefit['description'] ?? '';
      ?>
    <li class="benefits__item">
      <?php if ($icon_url): ?>
      <img src="<?= esc_url($icon_url); ?>" alt="<?= esc_attr($benefit_title); ?>" class="benefits__item-icon lazyload">
      <?php endif; ?>
      <p class="benefits__item-title">
        <?= get_value_or_default($benefit_title, true); ?>
      </p>
      <p class="benefits__item-description">
        <?= nl2br(get_value_or_default($benefit_description, true)); ?>
    </li>
    <?php endforeach; ?>
  </ul>
</section>
<?php endif; ?>
