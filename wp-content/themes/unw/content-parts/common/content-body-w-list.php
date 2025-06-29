<?php
$title = $args['title'];
$body = $args['body'] ?? '';
$title_component = $args['title_component'] ?? 'h2';
$list = $args['list'] ?? [];
?>

<div class="body-w-list">
  <<?php echo esc_html($title_component); ?> class="body-w-list__title"><?php echo esc_html($title); ?></<?php echo esc_html($title_component); ?>>
  <?php if (!empty($body)) : ?>
    <p class="body-w-list__body">
      <?php echo esc_html($body); ?>
    </p>
  <?php endif; ?>
  <?php if (!empty($list)) : ?>
    <ul class="body-w-list__list">
      <?php foreach ($list as $item) : ?>
        <li class="body-w-list__item">
          <?php echo esc_html($item); ?>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</div>
