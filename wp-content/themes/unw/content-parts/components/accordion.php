<?php
$accordion     = $args['accordion'] ?? [];
$class_faq     = $args['class_faq'] ?? '';
$active_index  = $args['active_index'] ?? null; // null si no se envía

if ($accordion): ?>
<?php foreach ($accordion as $i => $item):
    $data_id = 'accordion-' . md5($item['accordion_title'] . $i . uniqid('', true));

    // Mostrar numeración si $active_index es null (no enviado) o es un número
    $show_prefix  = ($active_index === null || is_numeric($active_index));
    $title_prefix = $show_prefix ? (($i + 1) . '. ') : '';

    // Activar acordeón si el índice coincide con $active_index
    $is_active = (is_numeric($active_index) && $i === (int)$active_index);
  ?>
<div class="acordeon <?= $is_active ? 'is-open' : '' ?>">
  <div data-w-id="<?php echo esc_attr($data_id); ?>" class="trigger_acordeon">
    <a href="#" class="linktransparencia w-inline-block">
      <img src="images/icon_link.svg" alt="" class="icon_link">
      <h4 class="<?= esc_attr($class_faq) ? $class_faq : 'h4_admin' ?>">
        <?php echo $title_prefix . esc_html($item['accordion_title']); ?>
        <br>
      </h4>
    </a>
    <div class="icon_box admin">
      <img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt="" class="arrow_down">
    </div>
  </div>

  <div style="height: <?= $is_active ? 'auto' : '0px' ?>;" class="content_acordeon">
    <div class="clase_para_wordpress transparencia">
      <?php echo wp_kses_post($item['accordion_content']); ?>
    </div>
  </div>
</div>
<?php endforeach; ?>
<?php endif; ?>