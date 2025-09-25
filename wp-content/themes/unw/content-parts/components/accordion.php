<?php
$accordion = $args['accordion'] ?? [];
$class_faq = $args['class_faq'] ?? '';

if ($accordion): ?>
<?php foreach ($accordion as $i => $item):
    $data_id = 'accordion-' . md5($item['accordion_title'] . $i . uniqid('', true));
  ?>
<div class="acordeon">
  <div data-w-id="<?php echo esc_attr($data_id); ?>" class="trigger_acordeon">
    <a href="#" class="linktransparencia w-inline-block">
      <img src="images/icon_link.svg" alt="" class="icon_link">
      <h4 class="<?= esc_attr($class_faq) ? $class_faq : 'h4_admin' ?>">
        <?php echo ($i + 1) . '. ' . esc_html($item['accordion_title']); ?>
        <br>
      </h4>
    </a>
    <div class="icon_box admin">
      <img src="<?= UPLOAD_MIGRATION_PATH . '/shared/select.svg' ?>" alt="" class="arrow_down">
    </div>
  </div>

  <div style="height: 0px;" class="content_acordeon">
    <div class="clase_para_wordpress transparencia">
      <?php echo wp_kses_post($item['accordion_content']); ?>
    </div>
  </div>
</div>
<?php endforeach; ?>
<?php endif; ?>
