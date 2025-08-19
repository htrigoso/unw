<?php
$cards = [
  [
    'icon' => UPLOAD_PATH . '/about-us/purpose/icon-1.svg',
    'title' => 'Misión',
    'description' => 'Transformar vidas formando profesionales innovadores, éticos y con visión global, a través de una educación de clase mundial desde el Perú.'
  ],
  [
    'icon' => UPLOAD_PATH . '/about-us/purpose/icon-2.svg',
    'title' => 'Visión',
    'description' => 'Ser la primera opción de educación superior para los jóvenes en Lima y provincias. Ser reconocidos por nuestra calidad acreditada con 5 QS Stars, por el éxito de nuestros egresados y por estar potenciados por Arizona State University.'
  ],
  [
    'icon' => UPLOAD_PATH . '/about-us/purpose/icon-3.svg',
    'title' => 'Valores',
    'description' => 'Integridad <br /> Respeto <br /> Responsabilidad <br /> Superación'
  ]
]
?>

<section class="us-purpose">
  <div class="x-container x-container--pad-213 us-purpose__wrapper">
    <span class="us-purpose__label">Propósito</span>
    <h2 class="us-purpose__title">Impulsar la calidad de vida de las familias peruanas a través del poder transformador de la educación.</h2>

    <div class="purpose-swiper post-swiper">
      <div class="swiper-container">
        <ul class="swiper-wrapper purpose-swiper__list">
          <?php foreach ($cards as $card) : ?>
            <li class="swiper-slide purpose-swiper__item">
              <div class="purpose-card">
                <img src="<?= $card['icon'] ?>" alt="" aria-hidden="true" class="purpose-card__icon" />
                <span class="purpose-card__title"><?= $card['title'] ?></span>
                <p class="purpose-card__description"><?= $card['description']; ?></p>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
        <div class="purpose-swiper__navigation">
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
