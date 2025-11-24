<?php
$image = $args['image'];
$alt = $args['image_alt'];
$title_item = $args['title'];
$desc = $args['description'] ?? '';
$link = $args['link'];
$link_target = $args['link_target'];
$link_title = $args['link_title'];
$crm_code = $args['crm_code'] ?? '';
$content_id = $args['content_id'] ?? '';
?>

<article class="program-card">
  <?php if ($image): ?>
  <img src="<?=placeholder() ?>" data-src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($alt); ?>"
    class="program-card--img lazyload" />
  <?php endif; ?>
  <div class="program-card--content">
    <h2 class="program-card--content__title"><?php echo esc_html($title_item); ?></h2>
    <?php if (!empty($desc)) : ?>
    <div class="program-card--content__paragraph">
      <p class="program-card--content__description"><?php echo esc_html($desc); ?></p>
    </div>

    <?php endif; ?>
    <?php if (!empty($link)): ?>
    <a href="<?php echo esc_url($link); ?>" data-crm-code="<?php echo esc_attr($crm_code); ?>"
      data-content-type="<?php echo esc_attr($title_item); ?>" data-content-id="<?php echo esc_attr($content_id); ?>"
      class="btn btn-primary program-card--content__cta btn-careers-select-item"
      data-is-home="<?=is_front_page() ? 1 : 0 ?>">
      <?php echo esc_html($link_title); ?>
    </a>
    <?php endif; ?>
  </div>
</article>
