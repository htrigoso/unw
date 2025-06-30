<?php
$nav_tabs = $args['nav_tabs'];
?>
<nav class="nav-tabs" role="tablist" aria-label="Secciones del contenido">
  <ul class="nav-tabs__list">
    <?php foreach ($nav_tabs as $i => $tab): ?>
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
