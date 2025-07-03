<?php
$tabs = [
  ['label' => 'Ciencias de la Salud',       'target' => 'ciencias-salud'],
  ['label' => 'Arquitectura',               'target' => 'arquitectura'],
  ['label' => 'Ingeniería',                 'target' => 'ingenieria'],
  ['label' => 'Derecho y Ciencia Política', 'target' => 'derecho-politica'],
  ['label' => 'Negocios',                   'target' => 'negocios'],
  ['label' => 'Comunicaciones',             'target' => 'comunicaciones'],
];
?>

<div class="faculty-tabs">
  <div class="x-container faculty-tabs__container">
    <?php
    get_template_part(COMMON_CONTENT_PATH, 'nav-tabs', [
      'nav_tabs' => $tabs
    ]);
    ?>
  </div>

  <div class="x-container x-container--pad-213">
    <div class="faculty-tabs__content">
      <?php foreach ($tabs as $i => $tab): ?>
        <div id="<?php echo esc_attr($tab['target']); ?>" class="tab__content<?php echo $i === 0 ? ' is-active' : ''; ?>"
          role="tabpanel" aria-labelledby="tab-<?php echo esc_attr($tab['target']); ?>">
          <?php
          switch ($tab['target']) {
            case 'ciencias-salud':
              get_template_part(FACULTY_CONTENT_TAB_PATH . 'content-faculty');
              break;

            case 'arquitectura':
              get_template_part(FACULTY_CONTENT_TAB_PATH . 'content-faculty');
              break;

            case 'ingenieria':
              get_template_part(FACULTY_CONTENT_TAB_PATH . 'content-faculty');
              break;

            case 'derecho-politica':
              get_template_part(FACULTY_CONTENT_TAB_PATH . 'content-faculty');
              break;

            case 'negocios':
              get_template_part(FACULTY_CONTENT_TAB_PATH . 'content-faculty');
              break;

            case 'comunicaciones':
              get_template_part(FACULTY_CONTENT_TAB_PATH . 'content-faculty');
              break;
          }
          ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
