<?php
$infra_list = [
  [
    'name' => 'Examen de Admisión',
    'description' => 'Se lleva a cabo en las fechas y horas programadas, publicadas o comunicadas a los postulantes oportunamente.​',
    'button' => 'Ir a Examen de Admisión',
  ],
  [
    'name' => 'Pre Wiener',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ​',
    'button' => 'Ir a Pre Wiener',
  ],
  [
    'name' => 'Beca 18',
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ',
     'button' => 'Ir a Beca 18',
  ],
  [
    'name' => 'Admisión Extraordinaria',
    'description' => 'Una modalidad para traslados, egresados, deportistas, Oficiales o Técnicos FAP y PNP, entre otros. ',
    'button' => 'Ir a Admisión Extraordinaria',
  ],
];
?>
<section class="admission" aria-labelledby="admission-title">
  <div class="admission__wrapper">

    <!-- Header -->
    <header class="admission__header">
      <h2 id="admission-title" class="admission__title">Proceso de Admisión</h2>
      <p class="admission__description">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua.
      </p>
    </header>

    <!-- Content -->
    <div class="admission__content">
      <ul class="admission__list">
        <?php foreach ($infra_list as $infra): ?>
        <li class="admission__item">
          <article class="admission-card">
            <div class="admission-card__content">
              <div class="admission-card__header">
                <h3 class="admission-card__title"><?php echo $infra['name']; ?></h3>
                <p class="admission-card__paragraph"><?php echo $infra['description']; ?></p>
              </div>
              <div class="admission-card__footer">
                <a href="" class="btn btn-primary-outline-small"><?php echo $infra['button']; ?> <svg width="16"
                    height="14" fill="none">
                    <use xlink:href="#arrow-right"></use>
                  </svg></a>
              </div>
            </div>

          </article>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>

  </div>
</section>
