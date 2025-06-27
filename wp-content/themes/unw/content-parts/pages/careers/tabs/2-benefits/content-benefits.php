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
      <img src="<?php echo esc_url($icon_url); ?>" alt="<?php echo esc_attr($benefit_title); ?>"
        class="benefits__item-icon">
      <?php endif; ?>
      <p class="benefits__item-title"><?php echo esc_html($benefit_title); ?></p>
      <p class="benefits__item-description"><?php echo esc_html($benefit_description); ?></p>
    </li>
    <?php endforeach; ?>
  </ul>
</section>
<?php endif; ?>
