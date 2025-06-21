<?php
$tabs = [
  ['label' => 'Presentación', 'target' => 'presentacion'],
  ['label' => 'Beneficios', 'target' => 'beneficios'],
  ['label' => 'Malla Curricular', 'target' => 'malla'],
  ['label' => 'Campo Laboral', 'target' => 'campo-laboral'],
  ['label' => 'Plana Docente', 'target' => 'teaching-staff'],
  ['label' => 'Infraestructura', 'target' => 'infraestructura'],
  ['label' => 'Admisión', 'target' => 'admision'],
  ['label' => 'Internacionalización', 'target' => 'internacionalizacion'],
];
?>

<div class="tabs">
  <div class="tabs__navigation-container">
    <nav class="tabs__navigation" role="tablist" aria-label="Secciones del contenido">
      <ul class="tabs__navigation-list">
        <?php foreach ($tabs as $i => $tab) : ?>
        <li class="tab__item-wrapper" role="presentation">
          <a href="#" class="btn tab__item<?php echo $i === 0 ? ' is-active' : ''; ?>"
            data-target="<?php echo esc_attr($tab['target']); ?>" role="tab"
            aria-selected="<?php echo $i === 0 ? 'true' : 'false'; ?>"
            aria-controls="<?php echo esc_attr($tab['target']); ?>" id="tab-<?php echo esc_attr($tab['target']); ?>">
            <?php echo esc_html($tab['label']); ?>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </div>

  <div class="x-container x-container--pad-213">
    <div class="tabs__content">
      <?php foreach ($tabs as $tab) : ?>
      <div id="<?php echo esc_attr($tab['target']); ?>" class="tab__content">
        <?php
          switch ($tab['target']) {
            case 'presentacion':
              get_template_part(CAREERS_CONTENT_TAB_PATH . '1-presentation/content-career-intro');
              get_template_part(CAREERS_CONTENT_TAB_PATH . '1-presentation/content-testimonials');
              break;

            case 'beneficios':
              get_template_part(CAREERS_CONTENT_TAB_PATH . '2-benefits/content-benefits');
              break;

            case 'malla':
              get_template_part(CAREERS_CONTENT_TAB_PATH . '3-curriculum-map/content-program-curriculum');
              get_template_part(CAREERS_CONTENT_TAB_PATH . '3-curriculum-map/content-curriculum-legend');
              break;

            case 'campo-laboral':
              get_template_part(CAREERS_CONTENT_TAB_PATH . '4-career-field/content-career-field');
              break;

            case 'teaching-staff':
              get_template_part(CAREERS_CONTENT_TAB_PATH . '5-teaching-staff/content-teaching-staff');
              break;

            case 'infraestructura':
              get_template_part(CAREERS_CONTENT_TAB_PATH . '6-infrastructure/content-infrastructure');
              break;

            case 'admision':
              get_template_part(CAREERS_CONTENT_TAB_PATH . '7-admission/content-admission');
              break;

            case 'internacionalizacion':
              echo '<h2>Internacionalización</h2>';
              echo '<p>Participa en intercambios académicos, doble titulación y programas de movilidad estudiantil en instituciones aliadas de prestigio internacional.</p>';
              break;
          }
          ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>