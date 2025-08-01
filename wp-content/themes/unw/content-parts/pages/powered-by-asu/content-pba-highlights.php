<?php
$highlights = get_field('highlights');
?>

<section class="pba-highlights">
  <div class="x-container x-container--pad-213 pba-highlights__wrapper">
    <div class="pba-highlights__text">
      <h2 class="pba-highlights__title">
        <?php echo $highlights['title']; ?>
      </h2>
      <p class="pba-highlights__description">
        <?php echo $highlights['description']; ?>
      </p>
    </div>
    <div class="pba-highlights__video">
      <img
        src="<?php echo esc_url($highlights['imagen']['url']); ?>"
        alt="<?php echo esc_attr($highlights['imagen']['alt']); ?>"
        class="pba-highlights__video-img"
      />
      <button class="pba-highlights__video-btn">
        <i>
          <svg width="56" height="56">
            <use xlink:href="#player"></use>
          </svg>
        </i>
      </button>
    </div>
  </div>
</section>
