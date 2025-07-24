<?php
$hero_news = get_field('hero-news', 'option');

$hero_title = !empty($hero_news['title']) ? $hero_news['title'] : 'Noticias';

$img_desktop = !empty($hero_news['images']['desktop']['url'])
    ? $hero_news['images']['desktop']['url']
    : '';

$img_mobile = !empty($hero_news['images']['mobile']['url'])
    ? $hero_news['images']['mobile']['url']
    : '';
?>

<section class="news-hero">
  <picture class="news-hero__picture">
    <source srcset="<?php echo esc_url($img_desktop); ?>" media="(min-width: 768px)" />
    <img src="<?php echo esc_url($img_mobile); ?>" alt="<?php echo esc_attr($hero_title); ?>" class="news-hero__picture--img" />
  </picture>
  <div class="news-hero__overlay">
    <div class="news-hero__content x-container x-container--pad-64">
      <h1 class="news-hero__content--title">
        <?php echo esc_html($hero_title); ?>
      </h1>
    </div>
  </div>
</section>
