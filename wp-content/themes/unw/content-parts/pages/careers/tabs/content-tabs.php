<?php
$tabs = [
  ['label' => 'Presentación', 'target' => 'presentacion'],
  ['label' => 'Beneficios', 'target' => 'beneficios'],
  ['label' => 'Malla Curricular', 'target' => 'malla'],
  ['label' => 'Campo Laboral', 'target' => 'campo-laboral'],
  ['label' => 'Plana Docente', 'target' => 'docente'],
  ['label' => 'Infraestructura', 'target' => 'infraestructura'],
  ['label' => 'Admisión', 'target' => 'admision'],
  ['label' => 'Internacionalización', 'target' => 'internacionalizacion'],
];
?>

<div class="tabs">
  <div class="tabs__navigation-container tabs-swiper">
    <div class="swiper-container tabs__navigation-swiper">
      <nav class="swiper-wrapper tabs__navigation">
        <?php foreach ($tabs as $i => $tab) : ?>
          <div class="swiper-slide tab__item-wrapper">
            <a href="#" class="btn tab__item<?php echo $i === 0 ? ' is-active' : ''; ?>" data-target="<?php echo esc_attr($tab['target']); ?>">
              <?php echo esc_html($tab['label']); ?>
            </a>
          </div>
        <?php endforeach; ?>
      </nav>
    </div>
  </div>
  <div class="x-container x-container--pad-213">
    <div class="tabs__content">
      <div id="presentacion" class="tab__content">
        <?php
        get_template_part(CAREERS_CONTENT_TAB_PATH . '1-presentation/content-career-intro');
        ?>
        <?php
        get_template_part(CAREERS_CONTENT_TAB_PATH . '1-presentation/content-testimonials');
        ?>
      </div>

      <div id="beneficios" class="tab__content">
        <?php
        get_template_part(CAREERS_CONTENT_TAB_PATH . '2-benefits/content-benefits');
        ?>
      </div>

      <div id="malla" class="tab__content">
        <?php
        get_template_part(CAREERS_CONTENT_TAB_PATH . '3-curriculum-map/content-malla');
        ?>
      </div>

      <div id="campo-laboral" class="tab__content">
        <?php
        get_template_part(CAREERS_CONTENT_TAB_PATH . '4-career-field/content-career-field');
        ?>
      </div>

      <div id="docente" class="tab__content">
        <h2>Docente</h2>
        <p>Nuestros docentes combinan experiencia académica con trayectoria profesional, garantizando una formación
          integral de alta calidad.</p>
      </div>

      <div id="infraestructura" class="tab__content">
        <h2>Infraestructura</h2>
        <p>Contamos con aulas modernas, laboratorios especializados, bibliotecas digitales y espacios de coworking que
          fomentan la innovación.</p>
      </div>

      <div id="admision" class="tab__content">
        <h2>Admisión</h2>
        <p>Infórmate sobre los requisitos de postulación, cronograma de admisión y beneficios exclusivos para primeros
          ingresantes.</p>
        <a href="/admision" class="button">Ver proceso de admisión</a>
      </div>

      <div id="internacionalizacion" class="tab__content">
        <h2>Internacionalización</h2>
        <p>Participa en intercambios académicos, doble titulación y programas de movilidad estudiantil en instituciones
          aliadas de prestigio internacional.</p>
      </div>
    </div>
  </div>

</div>
