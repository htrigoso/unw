<?php
$guidelines = [
  'Combatir el fraude académico en todas sus formas.',
  'Prohibir cualquier forma de discriminación entre estudiantes, docentes y personal administrativo.',
  'Fomentar la conciencia sobre el cambio climático, desarrollando una gestión integral de riesgos y desastres, así como planes de contingencia y adaptación.',
  'Aplicar la normativa legal nacional y contribuir activamente en cinco Objetivos de Desarrollo Sostenible de la ONU: <br /> - Fin de la pobreza (ODS1) <br /> - Salud y Bienestar (ODS3) <br /> - Educación de Calidad (ODS4) <br /> - Trabajo Decente y Desarrollo Económico (ODS8) <br /> - Acción por el Clima (ODS13)'
]
?>

<section class="presentation">
  <div class="x-container x-container--pad-213 presentation__wrapper">
    <div class="presentation__content">
      <h2 class="presentation__title">Principio rector</h2>
      <p class="presentation__text">En la Universidad Norbert Wiener, la calidad en todos nuestros servicios es un imperativo ético. <br />Estamos comprometidos con brindar una educación universitaria de clase mundial a través de nuestro modelo educativo centrado en la persona, que persigue la excelencia académica y el desarrollo integral de nuestros estudiantes.</p>
    </div>
  </div>
</section>
<?php get_template_part(QUALITY_POLICY_CONTENT_PATH, 'promote'); ?>
<section class="guidelines">
  <div class="x-container x-container--pad-213 guidelines__wrapper">
    <div class="guidelines__content">
      <h2 class="guidelines__title">Nuestros lineamientos</h2>
      <ul class="guidelines__list list-primary">
        <?php foreach ($guidelines as $guideline) : ?>
          <li class="guidelines__item">
            <?= $guideline ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>

<section class="commitment">
  <div class="x-container x-container--pad-213 commitment__wrapper">
    <div class="commitment__content">
      <h2 class="commitment__title">Compromiso institucional</h2>
      <p class="commitment__text">Estamos comprometidos con la excelencia académica. Por ello, todas nuestras acciones se orientan a superar los estándares aplicables a nuestra Universidad, con un enfoque directo en la satisfacción de nuestros estudiantes, para alcanzar un perfil de liderazgo, innovador, global, con valores humanísticos y visión sostenible. </p>
    </div>
  </div>
</section>
