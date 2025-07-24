<?php
$thumbnail = $args['thumbnail'] ?? '';
$video_url = $args['video_url'] ?? '';
$is_video = $args['is_video'] ?? false;
?>

<div class="video-w-thumb">
  <?php if ($is_video && !empty($video_url)) : ?>
  <video class="video-w-thumb__video" controls poster="<?php echo esc_url($thumbnail); ?>">
    <source src="<?php echo esc_url($video_url); ?>" type="video/mp4" />
    Tu navegador no soporta la reproducción de videos HTML5.
  </video>
  <?php else : ?>
  <img src="<?php echo esc_url($thumbnail); ?>" alt="Imagen" class="video-w-thumb__img" />
  <?php endif; ?>
</div>