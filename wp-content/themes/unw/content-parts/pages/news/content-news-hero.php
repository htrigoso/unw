<?php
$img_desktop = UPLOAD_PATH . '/news/hero/hero-desktop.jpg';
$img_mobile = UPLOAD_PATH . '/news/hero/hero-mobile.jpg';
$hero_title = 'Noticias';
?>

<section class="news-hero">
  <picture class="news-hero__picture">
    <source srcset="<?php echo esc_url($img_desktop); ?>" media="(min-width: 768px)" />
    <img src="<?php echo esc_url($img_mobile); ?>" alt="Noticias"
      class="news-hero__picture--img" />
  </picture>
  <div class="news-hero__overlay">
    <div class="news-hero__content x-container x-container--pad-64">
      <h1 class="news-hero__content--title">
        <?php echo esc_html($hero_title); ?></h1>
      </h1>
    </div>
  </div>
</section>
