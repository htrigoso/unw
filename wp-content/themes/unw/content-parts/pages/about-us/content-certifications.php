<?php
$cards = [
  [
    [
      'icon' => UPLOAD_PATH . '/about-us/certifications/1.png',
      'description' => 'Alianza con Arizona State University, # 1 en innovación en EE. UU.'
    ],
    [
      'icon' => UPLOAD_PATH . '/about-us/certifications/2.png',
      'description' => 'Convenios internacionales (+ 100 universidades de todo el mundo)'
    ],
    [
      'icon' => UPLOAD_PATH . '/about-us/certifications/3.png',
      'description' => 'Doble titulación internacional y contrato de trabajo en Europa (vigente para ciertas carreras de salud).'
    ],
    [
      'icon' => UPLOAD_PATH . '/about-us/certifications/4.png',
      'description' => 'Acreditación Internacional CASN (Asociación Canadiense de Escuelas de Enfermería) para Enfermería.'
    ]
  ],
  [
    [
      'icon' => UPLOAD_PATH . '/about-us/certifications/5.png',
      'description' => 'Ranking QS Stars: 4 estrellas.'
    ],
    [
      'icon' => UPLOAD_PATH . '/about-us/certifications/6.png',
      'description' => 'Ranking América Economía: Top 15 Universidades del Perú'
    ],
    [
      'icon' => UPLOAD_PATH . '/about-us/certifications/7.png',
      'description' => 'Top 10 en Ranking SCImago: Producción científica destacada'
    ],
    [
      'icon' => UPLOAD_PATH . '/about-us/certifications/8.png',
      'description' => 'Certificación ISO 9001: pioneros en Latinoamérica'
    ]
  ]
];
?>


<section class="us-certifications">
  <div class="x-container x-container--pad-213 us-certifications__wrapper">
    <p class="us-certifications__label">Por qué estudiar en Wiener</p>
    <h3 class="us-certifications__title">
      Nuestras certificaciones y acreditaciones
    </h3>
    <div class="certifications-swiper post-swiper">
      <div class="swiper-container">
        <ul class="swiper-wrapper certifications-swiper__list">
          <?php foreach ($cards as $card) : ?>
            <li class="swiper-slide certifications-swiper__item">
              <ul class="certifications-card">
                <?php foreach ($card as $item) : ?>
                  <li class="certifications-card__item">
                    <div class="certifications-card__header">
                      <img src="<?= $item['icon'] ?>" alt="" aria-hidden="true" class="certifications-card__icon" />
                    </div>
                    <p class="certifications-card__desc"><?= $item['description'] ?></p>
                  </li>
                <?php endforeach; ?>
              </ul>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>
