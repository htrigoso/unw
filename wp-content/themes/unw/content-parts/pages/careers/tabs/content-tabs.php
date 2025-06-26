<?php
$tabs = [
  ['label' => 'Presentación',         'target' => 'presentacion'],
  ['label' => 'Beneficios',           'target' => 'beneficios'],
  ['label' => 'Malla Curricular',     'target' => 'malla'],
  ['label' => 'Campo Laboral',        'target' => 'campo-laboral'],
  ['label' => 'Plana Docente',        'target' => 'teaching-staff'],
  ['label' => 'Infraestructura',      'target' => 'infraestructura'],
  ['label' => 'Admisión',             'target' => 'admision'],
  ['label' => 'Internacionalización', 'target' => 'internacionalizacion'],
];

$contentPaths = [
  'presentacion' => [
    '1-presentation/content-career-intro',
    '1-presentation/content-testimonials',
  ],
  'beneficios' => [
    '2-benefits/content-benefits',
  ],
  'malla' => [
    '3-curriculum-map/content-program-curriculum',
    '3-curriculum-map/content-curriculum-legend',
  ],
  'campo-laboral' => [
    '4-career-field/content-career-field',
  ],
  'teaching-staff' => [
    '5-teaching-staff/content-teaching-staff',
  ],
  'infraestructura' => [
    '6-infrastructure/content-infrastructure',
  ],
  'admision' => [
    '7-admission/content-admission',
  ],
  'internacionalizacion' => [
    '8-internationalization/content-internationalization',
  ],
];
?>

<div class="tabs">
  <div class="tabs__navigation-container">
    <nav class="tabs__navigation" role="tablist" aria-label="Secciones del contenido">
      <ul class="tabs__navigation-list">
        <?php foreach ($tabs as $i => $tab): ?>
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
      <?php foreach ($tabs as $tab): ?>
      <div id="<?php echo esc_attr($tab['target']); ?>" class="tab__content">
        <?php
          $target = $tab['target'];
          if (!empty($contentPaths[$target])) {
            foreach ($contentPaths[$target] as $path) {
              get_template_part(CAREERS_CONTENT_TAB_PATH . $path);
            }
          }
          ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
