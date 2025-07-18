<?php
$thumbnail = $args['thumbnail'] ?? '';
?>

<div class="video-w-thumb">
  <img src="<?php echo esc_url($thumbnail); ?>" class="video-w-thumb__img" />
  <button class="video-w-thumb__play-button">
    <i>
      <svg width="95" height="95">
        <use xlink:href="#player"></use>
      </svg>
    </i>
  </button>
</div>
