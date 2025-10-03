<?php
$benefits = $args['benefits'] ?? [];
$options = $benefits['options'] ?? [];
$title = $benefits['title'] ?? '';
?>

<?php if (!empty($options)): ?>
  <section class="grid-benefits">
    <div class="x-container x-container--pad-213 grid-benefits__wrapper">

      <h2 class="grid-benefits__title"><?php echo esc_html($title); ?></h2>

      <ul class="grid-benefits__grid">
        <?php
        $count = count($options);
        $is_odd = $count % 2 === 1;
        $pad_index = $is_odd ? ceil($count / 2) : -1;
        foreach ($options as $i => $benefit):
          $icon = $benefit['icon']['url'] ?? '';
          $alt = $benefit['icon']['alt'] ?? '';
          $text = $benefit['text'] ?? '';
          $should_pad = ($is_odd && ($i == $pad_index));
        ?>
          <?php if ($icon && $text): ?>
            <li class="grid-benefits__item--container" <?php if ($should_pad) echo ' data-padded="1"'; ?>>
              <div class="grid-benefits__item">
                <img src="<?=placeholder() ?>" data-src="<?php echo esc_url($icon); ?>" alt="<?php echo esc_attr($alt); ?>" aria-hidden="true" loading="lazy"
                  class="grid-benefits__icon lazyload" />
                <p class="grid-benefits__text"><?php echo $text; ?></p>
              </div>
            </li>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>
<?php endif; ?>
