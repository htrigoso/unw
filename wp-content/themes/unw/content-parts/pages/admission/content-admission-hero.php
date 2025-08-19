<?php
$img_desktop = $args['img_desktop'];
$img_mobile = $args['img_mobile'];
?>

<section class="admission-hero">
  <picture class="admission-hero__picture">
    <source srcset="<?php echo esc_url($img_desktop); ?>" media="(min-width: 768px)" />
    <img src="<?php echo esc_url($img_mobile); ?>" alt="Hero"
      class="admission-hero__picture--img" />
  </picture>
</section>
