<?php
$card_items = [
  [
    "title" => "Laboratorio de Microbiología:",
    "excerpt" => "Interpretación de Análisis Clínicos",
    "photo" => UPLOAD_PATH . '/careers/infra/infra-1.jpg'
  ],
  [
    "title" => "Laboratorio de Farmacognosia y Farmacobotánica.",
    "excerpt" => "",
    "photo" => UPLOAD_PATH . '/careers/infra/infra-2.jpg'
  ],
  [
    "title" => "Laboratorio de Industria Farmacéutica",
    "excerpt" => "Tecnología Farmacéutica, Preparación reconstitución y reenvasado de medicamentos.",
    "photo" => UPLOAD_PATH . '/careers/infra/infra-3.jpg'
  ],
  [
    "title" => "Laboratorio de Investigación",
    "excerpt" => "Rotavapor (para extraer solventes orgánicos).",
    "photo" => UPLOAD_PATH . '/careers/infra/infra-4.jpg'
  ]
]
?>

<section class="laboratories">
  <h2 class="laboratories--title">Laboratorios Especializados</h2>
  <p class="laboratories--description">Al estudiar la carrera profesional de Farmacia y Bioquímica, podrás acceder a moderna infraestructura que potenciará tu aprendizaje:</p>
  <div class="laboratories-swiper post-swiper-desktop switch-pagination-navigation" data-width="compact">
    <div class="swiper-container">
      <ul class="swiper-wrapper laboratories__list">
        <?php
        foreach ($card_items as $item) {
        ?>
          <li class="swiper-slide laboratories__item">
            <?php
            get_template_part(COMMON_CONTENT_PATH, 'infra-card', [
              'title' => $item['title'],
              'excerpt' => $item['excerpt'],
              'photo' => $item['photo'],
            ]);
            ?>
          </li>
        <?php } ?>
      </ul>
      <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-navigation">
      <div class="post-swiper-button-prev"></div>
      <div class="post-swiper-button-next"></div>
    </div>
  </div>
</section>
