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
    <img src="<?php echo esc_url($img_mobile); ?>" alt="<?php echo esc_attr($hero_title); ?>"
      class="news-hero__picture--img" fetchpriority="high" decoding="async" loading="eager" />
  </picture>
  <div class="news-hero__overlay">
    <div class="news-hero__content x-container x-container--pad-64">
      <h1 class="news-hero__content--title">
        <?php echo esc_html($hero_title); ?>
      </h1>
      <?php
      get_template_part(COMMON_CONTENT_PATH, 'breadcrumb', [
        'breadcrumb' => [
          ['label' => 'Inicio', 'href' => home_url('/')],
          ['label' => 'Noticias', 'href' => home_url('/noticias')],
        ],
        'color' => 'black'
      ]);
      ?>
    </div>
  </div>
</section>
