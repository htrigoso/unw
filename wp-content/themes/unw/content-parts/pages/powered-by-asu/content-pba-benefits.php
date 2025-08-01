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
      <?php foreach ($options as $benefit): ?>
        <?php
          $icon = $benefit['icon']['url'] ?? '';
          $alt = $benefit['icon']['alt'] ?? '';
          $text = $benefit['text'] ?? '';
        ?>
        <?php if ($icon && $text): ?>
        <li class="pba-benefits__item--container">
          <div class="pba-benefits__item">
            <img src="<?php echo esc_url($icon); ?>" alt="<?php echo esc_attr($alt); ?>" aria-hidden="true" loading="lazy"
              class="pba-benefits__icon" />
            <p class="pba-benefits__text"><?php echo $text; // HTML permitido ?></p>
          </div>
        </li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>

    <i class="pba-benefits__unw">
      <svg width="300" height="180">
        <use xlink:href="#unw-w"></use>
      </svg>
    </i>

  </div>
</section>
<?php endif; ?>
