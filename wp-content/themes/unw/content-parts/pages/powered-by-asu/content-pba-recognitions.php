<?php
$recognitions = get_field('recognitions');
?>

<section class="pba-recognitions">
  <div class="x-container x-container--pad-213 pba-recognitions__wrapper">
    <div class="pba-recognitions__header">
      <h2 class="pba-recognitions__title"><?php echo $recognitions['title']; ?></h2>
      <img src="<?php echo UPLOAD_PATH . '/powered-by-asu/nro-one.svg'; ?>" alt="" aria-hidden="true" />
    </div>

    <ul class="pba-recognitions__items">
      <?php foreach ($recognitions['recognitions'] as $item): ?>
        <li class="pba-recognitions__item">
          <h3 class="pba-recognitions__item-title"><?php echo $item['title']; ?></h3>
          <p class="pba-recognitions__item-subtitle"><?php echo $item['subtitle']; ?></p>
          <p class="pba-recognitions__item-source"><?php echo $item['source']; ?></p>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
