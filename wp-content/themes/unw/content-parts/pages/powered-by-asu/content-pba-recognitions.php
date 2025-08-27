<?php
$recognitions = get_field('recognitions');
 ?>

<section class="pba-recognitions">
  <div class="x-container x-container--pad-213 pba-recognitions__wrapper">
    <div class="pba-recognitions__header">
      <h2 class="pba-recognitions__title"><?=esc_html($recognitions['title']); ?></h2>
      <img src="<?= esc_url($recognitions['icon']['url']); ?>"
        alt="<?= esc_attr($recognitions['icon']['alt'] ?: $recognitions['icon']['title']); ?>" aria-hidden="true" />
    </div>

    <ul class="pba-recognitions__items">
      <?php foreach ($recognitions['recognitions'] as $item): ?>
      <li class="pba-recognitions__item">
        <h3 class="pba-recognitions__item-title"><?= esc_html($item['title']); ?></h3>
        <p class="pba-recognitions__item-subtitle"><?= esc_html($item['subtitle']); ?></p>
        <p class="pba-recognitions__item-source"><?= esc_html($item['source']); ?></p>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
