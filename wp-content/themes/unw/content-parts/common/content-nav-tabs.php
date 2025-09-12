<?php
$nav_tabs = $args['nav_tabs'];
$active_id = isset($args['active_id']) ? $args['active_id'] : null;
$is_url = isset($args['is_url']) ? $args['is_url'] : false;

?>
<nav data-id="<?php echo $active_id ?>" class="nav-tabs" aria-label="Secciones del contenido">
  <ul class="nav-tabs__list" role="tablist">
    <?php foreach ($nav_tabs as $i => $tab):
      ?>
    <li class="tab__item-wrapper" role="presentation">
      <?php
          $url = $is_url ?  $tab['url'] : '#';
          $active = $i === 0 ? ' is-active' : '';

           if ($is_url) {
            $active = $active_id === $tab['id'] ? ' is-active' : '';
           }
        ?>
      <a href="<?php echo esc_url($url); ?>" class="btn tab__item<?php echo $active; ?>" role="tab"
        data-target="<?php echo esc_attr($tab['target']); ?>"
        aria-selected="<?php echo $i === 0 ? 'true' : 'false'; ?>"
        aria-controls="<?php echo esc_attr($tab['target']); ?>" id="tab-<?php echo esc_attr($tab['target']); ?>"
        data-name="<?php echo esc_attr($tab['label']); ?>">
        <?php echo esc_html($tab['label']); ?>
      </a>
    </li>
    <?php endforeach; ?>
  </ul>
</nav>
