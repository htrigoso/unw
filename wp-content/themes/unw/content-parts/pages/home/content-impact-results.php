<?php
  $impact_results = get_field('impact_results');
  $title = $impact_results['title'] ?? 'Crecemos con resultados que inspiran.';
  $options = $impact_results['options'] ?? [];
?>

<?php if (!empty($impact_results) && is_array($impact_results)): ?>
<section class="impact-results">
  <div class="x-container x-container--pad-213">
    <div class="impact-results__wrapper">
      <h2 class="impact-results__title"><?php echo esc_html($title); ?></h2>
      <div class="impact-results__items">
        <?php foreach ($options as $option):
          $subtitle = $option['title'] ?? '';
          $description = $option['description'] ?? '';
          if (empty($subtitle) && empty($description)) continue;
        ?>
        <article class="impact-results__item">
          <?php if (!empty($subtitle)): ?>
          <h3 class="impact-results__subtitle"><?php echo esc_html($subtitle); ?></h3>
          <?php endif; ?>
        </article>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>
<?php endif; ?>