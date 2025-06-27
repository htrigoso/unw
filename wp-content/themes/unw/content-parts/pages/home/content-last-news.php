<?php
$news_data = get_field('last-news');
$news_items = $news_data['news'] ?? [];
?>

<?php if (!empty($news_items) && is_array($news_data)) : ?>
<section class="last-news">
  <div class="x-container x-container--pad-213">
    <div class="last-news__wrapper">
      <?php if (!empty($news_data['title'])) : ?>
      <h2 class="last-news__title"><?php echo esc_html($news_data['title']); ?></h2>
      <?php endif; ?>

      <div class="post-swiper last-news-swiper last-news__swiper">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php foreach ($news_items as $news_post) :
              if (!($news_post instanceof WP_Post)) continue;

              $date_raw = get_the_date('d/m/Y', $news_post);
              $date_obj = DateTime::createFromFormat('d/m/Y', $date_raw);
              $formatted_date = $date_obj ? date_i18n('j \d\e F, Y', $date_obj->getTimestamp()) : '';

              $image = get_the_post_thumbnail_url($news_post->ID, 'medium') ?: get_template_directory_uri() . '/upload/home/last-news/default.jpg';
              $content = get_the_content(null, false, $news_post);
            ?>
            <div class="swiper-slide">
              <article class="last-news__card">
                <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr(get_the_title($news_post)); ?>"
                  class="last-news__card--img" />
                <div class="last-news__card--content">
                  <h3 class="last-news__card--content__date"><?php echo esc_html($formatted_date); ?></h3>
                  <p class="last-news__card--content__description">
                    <?php echo wp_kses_post(wp_trim_words($content, 30, '...')); ?>
                  </p>
                </div>
              </article>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="last-news__swiper-navigation">
          <div class="swiper-navigation">
            <div class="post-swiper-button-prev"></div>
            <div class="post-swiper-button-next"></div>
          </div>

          <?php if (!empty($news_data['link']['url'])) : ?>
          <div class="last-news__see-more-btn">
            <?php
              get_template_part(COMMON_CONTENT_PATH, 'see-more-btn', array(
                'text' => $news_data['link']['title'] ?: 'Ver más noticias',
                'href' => $news_data['link']['url'],
              ));
              ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
