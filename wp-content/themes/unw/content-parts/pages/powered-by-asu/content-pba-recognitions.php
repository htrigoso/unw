<?php
$recognitions = [
  [
    'title' => 'innovación',
    'subtitle' => 'ASU por delante de MIT y Standfor',
    'source' => '— U.S. News & World Report, 10 años, 2016–25',
  ],
  [
    'title' => 'sostenibilidad',
    'subtitle' => 'ASU por delante de Standford y Cornell',
    'source' => '— Association for the Advancement of Sustainability in Higher Education, 2023–24',
  ],
  [
    'title' => 'impacto global',
    'subtitle' => 'ASU por delante de Pen n y MIT',
    'source' => '— Times Higher Education, 6 años, 2020–25',
  ],
];
?>

<section class="pba-recognitions">
  <div class="x-container x-container--pad-213 pba-recognitions__wrapper">
    <div class="pba-recognitions__header">
      <h2 class="pba-recognitions__title">Calificada reiteradamente como</h2>
      <img src="<?php echo UPLOAD_PATH . '/powered-by-asu/nro-one.svg' ?>" alt="" aria-hidden="true" />
    </div>

    <ul class="pba-recognitions__items">
      <?php foreach ($recognitions as $item): ?>
        <li class="pba-recognitions__item">
          <h3 class="pba-recognitions__item-title"><?php echo $item['title']; ?></h3>
          <p class="pba-recognitions__item-subtitle"><?php echo $item['subtitle']; ?></p>
          <p class="pba-recognitions__item-source"><?php echo $item['source']; ?></p>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
