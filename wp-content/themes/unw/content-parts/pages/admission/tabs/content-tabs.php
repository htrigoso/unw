<?php
$tabs = [
  ['label' => 'Examen de admisión',                 'target' => 'examen-admision'],
  ['label' => 'Beca 18',                            'target' => 'beca-18'],
  ['label' => 'Graduado/Titulado Universidad',      'target' => 'graduado-titulado'],
  ['label' => 'Extraordinaria',                     'target' => 'extraordinaria'],
  ['label' => 'PreWiener',                          'target' => 'prewiener'],
];
?>

<div class="admission-tabs">
  <div class="x-container admission-tabs__container">
    <?php
    get_template_part(COMMON_CONTENT_PATH, 'nav-tabs', [
      'nav_tabs' => $tabs
    ]);
    ?>
  </div>

  <div class="x-container x-container--pad-213">
    <div class="admission-tabs__content">
      <?php foreach ($tabs as $i => $tab): ?>
        <div id="<?php echo esc_attr($tab['target']); ?>" class="tab__content<?php echo $i === 0 ? ' is-active' : ''; ?>"
          role="tabpanel" aria-labelledby="tab-<?php echo esc_attr($tab['target']); ?>">
          <?php
          switch ($tab['target']) {
            case 'examen-admision':
              get_template_part(ADMISSION_CONTENT_TAB_PATH . '1-entrance-exam/content-entrance');
              break;

            case 'beca-18':
              get_template_part(ADMISSION_CONTENT_TAB_PATH . '2-beca18/content-beca18');
              break;

            case 'graduado-titulado':
              get_template_part(ADMISSION_CONTENT_TAB_PATH . '3-graduate/content-graduate');
              break;

            case 'extraordinaria':
              get_template_part(ADMISSION_CONTENT_TAB_PATH . '4-extraordinary/content-extraordinary');
              break;

            case 'prewiener':
              get_template_part(ADMISSION_CONTENT_TAB_PATH . '5-prewiener/content-prewiener');
              break;
          }
          ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
