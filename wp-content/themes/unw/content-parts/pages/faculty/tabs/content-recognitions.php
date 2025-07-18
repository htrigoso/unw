<?php
$postId = $args['id'];
$recognitions = get_field('recognitions', $postId);
?>

<?php if ($recognitions): ?>
  <section class="recognitions">
    <h2 class="recognitions__title">
      <?php echo esc_html($recognitions['title'] ?? 'Somos reconocidos por nuestra alta calidad educativa'); ?>
    </h2>

    <?php if (!empty($recognitions['list']) && is_array($recognitions['list'])): ?>
      <ul class="recognitions__list">
        <?php foreach ($recognitions['list'] as $item): ?>
          <li class="recognitions__item">
            <h4 class="recognitions__item-title">
              <?php echo esc_html($item['title'] ?? ''); ?>
            </h4>
            <p class="recognitions__item-desc">
              <?php echo esc_html($item['description'] ?? ''); ?>
            </p>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <?php if (!empty($recognitions['register'])): ?>
      <div class="recognitions__cta">
        <h3 class="recognitions__cta-title">
          <?php echo esc_html($recognitions['register']['title'] ?? ''); ?>
        </h3>
        <?php if (!empty($recognitions['register']['link']['url'])): ?>
          <a href="<?php echo esc_url($recognitions['register']['link']['url']); ?>"
             target="<?php echo esc_attr($recognitions['register']['link']['target'] ?: '_self'); ?>"
             class="recognitions__cta-btn btn btn-primary">
            <?php echo esc_html($recognitions['register']['link']['title'] ?? 'Inscríbete aquí'); ?>
          </a>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </section>
<?php endif; ?>
