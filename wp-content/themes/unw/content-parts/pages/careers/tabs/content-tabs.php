<?php
$tabs = [
  ['label' => 'Presentación',         'target' => 'presentacion'],
  ['label' => 'Beneficios',           'target' => 'beneficios'],
  ['label' => 'Malla Curricular',     'target' => 'malla'],
  ['label' => 'Campo Laboral',        'target' => 'campo-laboral'],
  ['label' => 'Plana Docente',        'target' => 'teaching-staff'],
  ['label' => 'Infraestructura',      'target' => 'infraestructura'],
  ['label' => 'Admisión',             'target' => 'admission'],
  ['label' => 'Internacionalización', 'target' => 'internacionalizacion'],
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
      <?php foreach ($tabs as $i => $tab): ?>
      <div id="<?php echo esc_attr($tab['target']); ?>" class="tab__content<?php echo $i === 0 ? ' is-active' : ''; ?>"
        role="tabpanel" aria-labelledby="tab-<?php echo esc_attr($tab['target']); ?>">
        <?php
          switch ($tab['target']) {
            case 'presentacion':

              $presentation = get_field('presentation', get_the_ID());

              get_template_part(CAREERS_CONTENT_TAB_PATH . '1-presentation/content-career-intro',null, [
                'presentation' => $presentation
              ]);
              get_template_part(CAREERS_CONTENT_TAB_PATH . '1-presentation/content-testimonials', null, [
                'testimonials_info' => $presentation['testimonials_info']
              ]);
              break;

            case 'beneficios':
              $benefits = get_field('benefits', get_the_ID());
              get_template_part(CAREERS_CONTENT_TAB_PATH . '2-benefits/content-benefits', null, [
                'benefits' => $benefits
              ]);
              break;

            case 'malla':
              $malla_curricular = get_field('malla_curricular', get_the_ID());
              get_template_part(CAREERS_CONTENT_TAB_PATH . '3-curriculum-map/content-program-curriculum', null, [
                'malla_curricular' => $malla_curricular
              ]);
              $curriculum_legend = get_field('curriculum_legend', get_the_ID());
              get_template_part(CAREERS_CONTENT_TAB_PATH . '3-curriculum-map/content-curriculum-legend', null, [
                'curriculum_legend' => $curriculum_legend
              ]);
              break;

            case 'campo-laboral':
               $career_field = get_field('career_field', get_the_ID());
              get_template_part(CAREERS_CONTENT_TAB_PATH . '4-career-field/content-career-field', null, [
                'career_field' => $career_field
              ]);
              break;

            case 'teaching-staff':
              $teaching_staff = get_field('teaching_staff', get_the_ID());
              get_template_part(CAREERS_CONTENT_TAB_PATH . '5-teaching-staff/content-teaching-staff', null, [
                'teaching_staff' => $teaching_staff
              ]);
              break;

            case 'infraestructura':
              $infrastructure = get_field('infrastructure', get_the_ID());
              get_template_part(CAREERS_CONTENT_TAB_PATH . '6-infrastructure/content-infrastructure', null, [
                'infrastructure' => $infrastructure
              ]);
              break;

            case 'admission':
              $admission_info = get_field('admission_info', get_the_ID());

              get_template_part(CAREERS_CONTENT_TAB_PATH . '7-admission/content-admission', null, [
                'admission_info' => $admission_info
              ]);
              break;

            case 'internacionalizacion':
              get_template_part(CAREERS_CONTENT_TAB_PATH . '8-internationalization/content-internationalization');
              break;
          }
        ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
