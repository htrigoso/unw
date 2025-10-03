<?php
$data = get_query_var('section_data', null);
$image = $data['image'] ?? '';
?>

<section class="landing-image">
  <div class="x-container x-container--pad-213 landing-image__wrapper">
    <?php
    if (!empty($image)) :
      $srcset = wp_get_attachment_image_srcset($image['ID'], 'full');
      $sizes = wp_get_attachment_image_sizes($image['ID'], 'full');
    ?>
      <img
        src="<?= placeholder() ?>"
        data-src="<?php echo esc_url($image['url']); ?>"
        alt="<?php echo esc_attr($image['alt']); ?>"
        width="auto"
        height="auto"
        srcset="<?php echo esc_attr($srcset); ?>"
        sizes="<?php echo esc_attr($sizes); ?>"
        loading="lazy" class="landing-image--img lazyload" />
    <?php endif; ?>
  </div>
</section>
