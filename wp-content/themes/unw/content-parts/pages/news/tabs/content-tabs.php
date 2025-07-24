<?php
$tabs = [
  ['label' => 'Academia',               'target' => 'academia'],
  ['label' => 'Vida Estudiantil',       'target' => 'vida-estudiantil'],
  ['label' => 'Investigación',          'target' => 'investigacion'],
  ['label' => 'Responsabilidad Social', 'target' => 'responsabilidad-social'],
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
      <?php
        get_template_part(NEWS_CONTENT_TAB_PATH . 'content-news');
      ?>
    </div>
  </div>
</div>
