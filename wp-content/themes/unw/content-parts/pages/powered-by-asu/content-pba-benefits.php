<?php
$pba_benefits = [
  [
    'icon' => UPLOAD_PATH . '/powered-by-asu/benefits/open-book.svg',
    'text' => 'Nuevas e innovadoras mallas curriculares diseñadas de acuerdo al plan de estudios de ASU.',
  ],
  [
    'icon' => UPLOAD_PATH . '/powered-by-asu/benefits/messages-bubble.svg',
    'text' => 'Formación bilingüe con el <strong>ASU English Language Program</strong> incluido en la malla.',
  ],
  [
    'icon' => UPLOAD_PATH . '/powered-by-asu/benefits/flight-ticket.svg',
    'text' => '<strong>ASU Summer Experience</strong> disfruta de una experiencia única en el Campus de Arizona.',
  ],
  [
    'icon' => UPLOAD_PATH . '/powered-by-asu/benefits/white-board.svg',
    'text' => '<strong>ASU Master Classes</strong> charlas magistrales gratuitas de expertos, obteniendo una insignia que fortalecerá tu CV.',
  ],
  [
    'icon' => UPLOAD_PATH . '/powered-by-asu/benefits/search-book.svg',
    'text' => 'Material de clases y casos prácticos extraídos directamente de los cursos de ASU.',
  ],
  [
    'icon' => UPLOAD_PATH . '/powered-by-asu/benefits/graduated.svg',
    'text' => '<strong>ASU Certification of Innovation</strong> desde los primeros ciclos.',
  ],
  [
    'icon' => UPLOAD_PATH . '/powered-by-asu/benefits/globe.svg',
    'text' => '<strong>Global Signature Courses</strong> con participación de docentes internacionales de ASU.',
  ]
];
?>

<section class="pba-benefits">
  <div class="x-container x-container--pad-213 pba-benefits__wrapper">
    <h2 class="pba-benefits__title">Beneficios para nuestros estudiantes</h2>
    <ul class="pba-benefits__grid">
      <?php foreach ($pba_benefits as $benefit): ?>
        <li class="pba-benefits__item--container">
          <div class="pba-benefits__item">
            <?php if (!empty($benefit['icon'])): ?>
              <img src="<?= $benefit['icon'] ?>" alt="" aria-hidden="true" loading="lazy" class="pba-benefits__icon" />
            <?php endif; ?>
            <p class="pba-benefits__text">
              <?php echo $benefit['text'] ?>
            </p>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
    <i class="pba-benefits__unw">
      <svg width="300" height="180">
        <use xlink:href="#unw-w"></use>
      </svg>
    </i>
  </div>
</section>
