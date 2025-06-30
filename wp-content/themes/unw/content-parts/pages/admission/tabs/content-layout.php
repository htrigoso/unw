<?php
$extra_class = $args['extra_class'] ?? '';
?>

<section class="layout <?php echo esc_attr($extra_class); ?>">
  <article class="layout__left">
    <?php
    if (!empty($args['left_content'])) {
      echo $args['left_content'];
    }
    ?>
  </article>
  <article class="layout__right">
    <?php
    get_template_part(COMMON_CONTENT_PATH, 'admission-ad', [
      'title' => 'Admisión',
      'subtitle' => '2024',
    ]);
    ?>
  </article>
</section>
