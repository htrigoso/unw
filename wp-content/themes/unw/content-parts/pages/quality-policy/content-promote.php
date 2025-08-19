<?php
$cards = [
  [
    "icon" => UPLOAD_PATH . '/quality-policy/promote/card-1.png',
    "title" => 'Investigación',
    'description' => 'Fomentamos la investigación formativa en docentes y estudiantes como un pilar esencial de la libertad académica.'
  ],
  [
    "icon" => UPLOAD_PATH . '/quality-policy/promote/card-2.png',
    "title" => 'Responsabilidad Social',
    'description' => 'Integramos la responsabilidad social en los procesos de enseñanza–aprendizaje y en todas nuestras actividades.  '
  ],
  [
    "icon" => UPLOAD_PATH . '/quality-policy/promote/card-3.png',
    "title" => 'Certificación Docente',
    'description' => 'Garantizamos la formación continua de nuestros docentes mediante capacitaciones, observaciones en el aula y evaluaciones periódicas para asegurar una educación de calidad.  '
  ],
  [
    "icon" => UPLOAD_PATH . '/quality-policy/promote/card-4.png',
    "title" => 'Ética y Tolerancia',
    'description' => 'Fomentamos un ambiente de respeto y comprensión, promoviendo la ética y la tolerancia en todas nuestras interacciones.Cultivamos el comportamiento ético y tolerante entre estudiantes, docentes y personal administrativo.  '
  ]
]
?>

<section class="promote">
  <div class="x-container x-container--pad-213 promote__wrapper">
    <h2 class="promote__title">Promovemos:</h2>
    <div class="promote-swiper post-swiper">
      <div class="swiper-container">
        <ul class="swiper-wrapper promote-swiper__list">
          <?php foreach ($cards as $card) : ?>
            <li class="swiper-slide promote-swiper__item">
              <div class="promote-card">
                <div>
                  <img class="promote-card__icon" src="<?php echo $card['icon']; ?>" alt="" aria-hidden="true">
                </div>
                <span class="promote-card__title"><?= $card['title']; ?></span>
                <p class="promote-card__description"><?= $card['description']; ?></p>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>
