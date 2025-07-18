<?php
$tabs = [
  ['label' => 'Academia',               'target' => 'academia'],
  ['label' => 'Vida Estudiantil',       'target' => 'vida-estudiantil'],
  ['label' => 'Investigación',          'target' => 'investigacion'],
  ['label' => 'Responsabilidad Social', 'target' => 'responsabilidad-social'],
  ['label' => 'Institucional',          'target' => 'institucional'],
];
?>

<div class="news-tabs">
  <div class="x-container x-container--pad-213 news-tabs__container">
    <?php
    get_template_part(COMMON_CONTENT_PATH, 'nav-tabs', [
      'nav_tabs' => $tabs
    ]);
    ?>
  </div>

  <div class="x-container x-container--pad-213">
    <div class="news-tabs__content">
      <?php foreach ($tabs as $i => $tab): ?>
        <div id="<?php echo esc_attr($tab['target']); ?>" class="tab__content<?php echo $i === 0 ? ' is-active' : ''; ?>"
          role="tabpanel" aria-labelledby="tab-<?php echo esc_attr($tab['target']); ?>">
          <?php
          switch ($tab['target']) {
            case 'academia':
              get_template_part(NEWS_CONTENT_TAB_PATH . 'content-news');
              break;

            case 'vida-estudiantil':
              get_template_part(NEWS_CONTENT_TAB_PATH . 'content-news');
              break;

            case 'investigacion':
              get_template_part(NEWS_CONTENT_TAB_PATH . 'content-news');
              break;

            case 'responsabilidad-social':
              get_template_part(NEWS_CONTENT_TAB_PATH . 'content-news');
              break;

            case 'institucional':
              get_template_part(NEWS_CONTENT_TAB_PATH . 'content-news');
              break;
          }
          ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
