<?php
$why_wiener = get_field('why_wiener');
$options = $why_wiener['options'] ?? [];
$link = $why_wiener['link'] ?? null;
$titulo = $why_wiener['titulo'] ?? '¿Por qué U. Wiener?';
?>

<?php if (!empty($why_wiener) && is_array($why_wiener)): ?>
<section class="why-wiener">
  <div class="x-container x-container--pad-213">
    <div class="why-wiener__wrapper">
      <h2 class="why-wiener__title"><?php echo esc_html($titulo); ?></h2>
      <div class="why-wiener__items">
        <?php foreach ($options as $item):
          $icon = $item['icon']['url'] ?? '';
          $title = $item['title'] ?? '';
          $desc = $item['description'] ?? '';
        ?>
        <article class="why-wiener__item">
          <?php if ($icon): ?>
          <img class="lazyload" src="<?=placeholder() ?>" data-src="<?php echo esc_url($icon); ?>" alt="<?php echo esc_attr($title); ?>"
            class="why-wiener__icon">
          <?php endif; ?>
          <?php if ($title): ?>
          <h3 class="why-wiener__subtitle"><?php echo esc_html($title); ?></h3>
          <?php endif; ?>
          <?php if ($desc): ?>
          <p><?php echo esc_html($desc); ?></p>
          <?php endif; ?>
        </article>
        <?php endforeach; ?>
      </div>

      <?php if (!empty($link['url']) && !empty($link['title'])): ?>
      <div class="why-wiener__cta">
        <a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target'] ?? '_self'); ?>"
          class="btn btn-primary">
          <?php echo esc_html($link['title']); ?>
        </a>
      </div>
      <?php endif; ?>

    </div>
  </div>
</section>
<?php endif; ?>
