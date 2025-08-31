<?php
$guidance_steps = get_field('guidance_steps');
?>

<?php if (!empty($guidance_steps) && is_array($guidance_steps)) : ?>
<section class="guidance-steps">
  <div class="x-container x-container--pad-213">
    <div class="guidance-steps__wrapper">

      <?php if (!empty($guidance_steps['title'])) : ?>
      <h2 class="guidance-steps__title"><?php echo esc_html($guidance_steps['title']); ?></h2>
      <?php endif; ?>

      <div class="guidance-steps__items">
        <?php foreach ($guidance_steps['options'] as $index => $step) :
            $img = $step['image']['url'] ?? '';
            $title = $step['title'] ?? '';
            $url = $step['link']['url'] ?? '#';
            $target = $step['link']['target'] ?? '_self';
          ?>
        <article class="guidance-steps__item">
          <a href="<?php echo esc_url($url); ?>" target="<?php echo esc_attr($target); ?>" class="guidance-steps__link">
            <?php if ($img) : ?>
            <img class="lazyload" src="<?=placeholder() ?>" data-src="<?php echo esc_url($img); ?>"
              alt="<?php echo esc_attr($title); ?>" class="guidance-steps__image">
            <?php endif; ?>
            <div class="guidance-steps__overlay">
              <span class="guidance-steps__number"><?php echo ($index + 1) . '.'; ?></span>
              <div class="guidance-steps__row">
                <p class="guidance-steps__paragraph"><?php echo esc_html($title); ?></p>
                <span class="guidance-steps__icon">
                  <svg width="32" height="32" fill="none">
                    <use xlink:href="#arrow-right"></use>
                  </svg>
                </span>
              </div>
            </div>
          </a>
        </article>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>
<?php endif; ?>