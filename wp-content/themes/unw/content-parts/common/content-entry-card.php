<?php
$image = $args['image'];
$title = $args['title'];
$date = $args['date'] ?? '';
$content = $args['content'];
$href = $args['href'];
$date_before = $args['date_before'] ?? false;

$tags = $args['tags'] ?? [];
?>

<article class="entry-card">
  <a href="<?php echo esc_url($href); ?>">
    <img src="<?= placeholder() ?>" data-src="<?php echo $image; ?>" alt="<?php echo esc_attr($title); ?>"
      class="entry-card__image lazyload">
  </a>
  <div class="entry-card__content">
    <?php if (!empty($date) && $date_before) : ?>
    <span class="entry-card__date" style="margin-bottom: 12px;"><?php echo esc_html($date); ?></span>
    <?php endif; ?>
    <a href="<?php echo esc_url($href); ?>">
      <h3 class="entry-card__title"><?php echo esc_html($title); ?></h3>
    </a>
    <?php
    if (!empty($tags)) :

    ?>
    <div class="entry-card__tags">
      <?php foreach ($tags as $tag) : ?>
      <?php if (is_array($tag) && isset($tag['name'], $tag['url'])) : ?>
      <a href="<?= esc_url($tag['url']); ?>" class="entry-card__tags--tag">
        <?= esc_html($tag['name']); ?>
      </a>
      <?php else : ?>
      <span class="entry-card__tags--tag"><?= esc_html(is_array($tag) ? $tag['name'] : $tag); ?></span>
      <?php endif; ?>
      <?php endforeach; ?>
    </div>
    <?php
    endif;
    ?>
    <?php if (!empty($date) && !$date_before) : ?>
    <span class="entry-card__date" style="margin-top: 12px;"><?php echo esc_html($date); ?></span>
    <?php endif; ?>
    <?php if (!empty($content)) : ?>
    <p class="entry-card__desc line-clamp-2" title="<?php echo esc_attr($content); ?>"><?php echo esc_html($content); ?>
    </p>
    <?php endif; ?>
    <div class="entry-card__button--container">
      <a class="entry-card__button btn btn-link btn-sm" href="<?php echo esc_url($href); ?>">Leer más
        <i>
          <svg class="icon icon--arrow" width="32" height="32">
            <use xlink:href="#arrow-right"></use>
          </svg>
        </i>
      </a>
    </div>
  </div>
</article>