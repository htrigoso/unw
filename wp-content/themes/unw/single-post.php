<?php
/**
 * Template Name: Post Detail Template
 */
?>

<?php set_query_var('ASSETS_CHUNK_NAME', 'post-detail'); ?>
<?php set_query_var('NAVBAR_COLOR', ''); ?>

<?php get_header(); ?>

<?php get_template_part('content-parts/content', 'navbar'); ?>

<main>

  <!-- Hero -->
  <section class="hero" id="hero">
    <div class="hero__wrapper w-h-100">
      <div class="hero__box">
        <div class="hero__box__wrapper">
          <div class="hero__box__caption text-center">
            <div class="title">
              <h1 class="c-white"><?php echo get_the_title() ?></h1>
            </div>
          </div>
        </div>
      </div>
      <?php
        $cover_image = get_field('cover_image');
        if (!empty($cover_image)):
          $mobile_image = $cover_image['mobile_image'];
          $desktop_image = $cover_image['desktop_image'];
      ?>
      <div class="hero__image">
        <picture>
          <source data-srcset="<?php echo $desktop_image['url'] ?>" media="(min-width: 1024px)" />
          <img
            class="lazy"
            src="<?php placeholder() ?>"
            data-src="<?php echo $mobile_image['url'] ?>"
            alt="<?php echo $mobile_image['url'] ?>"
          />
        </picture>
      </div>
      <?php endif; ?>
    </div>
  </section>

  <?php if (have_rows('post_content')):?>
  <!-- Content -->
  <section class="post" id="post">
    <div class="post__wrapper">
      <div class="post__card">
        <div class="post__card__wrapper">
          <div class="post__card__header">
            <div class="post__published">
              <span><strong>Publicado:&nbsp;</strong></span>
              <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('F j, Y'); ?></time>
            </div>
          </div>
          <?php
            while (have_rows('post_content')): the_row();
              $template = get_row_layout();
              if ($template == 'text_block'):
          ?>
              <div class="post__content">
                <?php echo the_sub_field('paragraph'); ?>
              </div>
            <?php
              elseif ($template == 'image_block'):
                $full_width = get_sub_field('full_width');
                $images = get_sub_field('images');
                $mobile_image = $images['mobile_image'];
                $desktop_image = $images['desktop_image'];
            ?>
              <div class="post__image <?php echo ($full_width === true ? 'post__image-full-width' : '') ?>">
                <picture>
                  <source
                    data-srcset="<?php echo $desktop_image['url'] ?>"
                    media="(min-width: 1024px)"
                    width="1144"
                    height="522"
                  />
                  <img
                    class="lazyload"
                    src="<?php placeholder() ?>"
                    data-src="<?php echo $mobile_image['url'] ?>"
                    alt="<?php echo $mobile_image['url'] ?>"
                    width="295"
                    height="343"
                  />
                </picture>
              </div>
            <?php
              endif;
            endwhile;
          ?>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <?php get_template_part('content-parts/content', 'posts'); ?>

  <?php get_template_part('content-parts/content', 'contact'); ?>

</main>

<?php get_template_part('content-parts/content', 'footer'); ?>

<?php get_footer(); ?>
