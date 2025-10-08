<div class="news-detail">
  <div class="x-container x-container--pad-213">
    <section class="news-detail__body">
      <?php get_template_part(NEWS_DETAIL_CONTENT_PATH, "carousel"); ?>
      <div class="news-detail__body--content" data-content="paragraph">
        <?php
        the_content();
        ?>
      </div>
    </section>
    <div class="news-detail__featured">
      <?php get_template_part(COMMON_CONTENT_PATH, 'featured-news'); ?>
    </div>
  </div>
</div>