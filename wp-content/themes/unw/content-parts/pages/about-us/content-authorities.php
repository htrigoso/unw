<?php
$cards = [
  [
    'image' => UPLOAD_PATH . '/about-us/authorities/card-1.png',
    'name' => 'Dr. Olga Horna Horna',
    'role' => 'Presidenta Ejecutiva',
    'description' => '“La educación superior es un compromiso que asumimos con gran responsabilidad. De la calidad de nuestro aporte en este sector estratégico depende el desarrollo del país”.',
  ],
  [
    'image' => UPLOAD_PATH . '/about-us/authorities/card-2.png',
    'name' => 'Dr. Alberto Bejarano',
    'role' => 'Rector',
    'description' => '“Hoy ofrecemos una educación de clase mundial accesible para todos, que se adapta a las necesidades de cada estudiante y los prepara para tener éxito en la vida personal y profesional”. ',
  ],
  [
    'image' => UPLOAD_PATH . '/about-us/authorities/card-2.png',
    'name' => 'Oswaldo Sifuentes',
    'role' => 'Vicerrector Académico',
    'description' => '-',
  ],
  [
    'image' => UPLOAD_PATH . '/about-us/authorities/card-2.png',
    'name' => 'Pablo Millones.',
    'role' => 'Vicerrector de Investigación',
    'description' => '-',
  ]
]
?>

<section class="us-authorities">
  <div class="x-container x-container--pad-213 us-authorities__wrapper">
    <h3 class="us-authorities__title">
      Autoridades
    </h3>
    <div class="authorities-swiper post-swiper" data-width="wide">
      <div class="swiper-container">
        <ul class="swiper-wrapper authorities-swiper__list">
          <?php foreach ($cards as $card) : ?>
            <li class="swiper-slide authorities-swiper__item">
              <div class="authorities-card">
                <div class="authorities-card__header">
                  <img src="<?= $card['image'] ?>" alt="" class="authorities-card__img" />
                </div>
                <div class="authorities-card__body">
                  <h4 class="authorities-card__body--name"><?= $card['name'] ?></h4>
                  <span class="authorities-card__body--role"><?= $card['role'] ?></span>
                  <p class="authorities-card__body--desc"><?= $card['description'] ?></p>
                </div>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
        <div class="authorities-swiper__navigation">
          <div class="swiper-navigation">
            <div class="swiper-primary-button-prev"></div>
            <div class="swiper-primary-button-next"></div>
            <div class="swiper-counter">
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
