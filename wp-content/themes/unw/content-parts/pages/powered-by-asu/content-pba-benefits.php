<?php
$benefits = get_field('benefits');
$options = $benefits['options'] ?? [];
$title = $benefits['title'] ?? 'Beneficios para nuestros estudiantes';
?>

<?php if (!empty($options)): ?>
  <section class="pba-benefits">
    <div class="x-container x-container--pad-213 pba-benefits__wrapper">

      <h2 class="pba-benefits__title"><?php echo esc_html($title); ?></h2>

      <ul class="pba-benefits__grid">
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
            <li class="pba-benefits__item--container" <?php if ($should_pad) echo ' data-padded="1"'; ?>>
              <div class="pba-benefits__item">
                <img src="<?php echo esc_url($icon); ?>" alt="<?php echo esc_attr($alt); ?>" aria-hidden="true" loading="lazy"
                  class="pba-benefits__icon" />
                <p class="pba-benefits__text"><?php echo $text; ?></p>
              </div>
            </li>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>
<?php endif; ?>
