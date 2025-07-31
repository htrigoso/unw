<?php
$post_url = urlencode(get_permalink());
$post_title = urlencode(get_the_title());
?>

<div class="social-meta">
  <!-- Botón para copiar enlace -->
  <button class="social-meta__share-button" id="copy-link" data-url="<?php echo esc_url(get_permalink()); ?>">
    <i>
      <svg width="24" height="24">
        <use xlink:href="#share"></use>
      </svg>
    </i>
    Compartir
  </button>

  <!-- Facebook -->
  <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_url; ?>" target="_blank"
    rel="noopener noreferrer">
    <img src="<?php echo UPLOAD_PATH . '/social/color-facebook.svg'; ?>" alt="Compartir en Facebook" />
  </a>

  <!-- LinkedIn -->
  <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $post_url; ?>" target="_blank"
    rel="noopener noreferrer">
    <img src="<?php echo UPLOAD_PATH . '/social/color-linkedin.svg'; ?>" alt="Compartir en LinkedIn" />
  </a>

  <!-- X (Twitter) -->
  <a href="https://x.com/intent/tweet?text=<?php echo $post_title; ?>&url=<?php echo $post_url; ?>" target="_blank"
    rel="noopener noreferrer">
    <img src="<?php echo UPLOAD_PATH . '/social/color-x.svg'; ?>" alt="Compartir en X (Twitter)" />
  </a>

  <!-- WhatsApp -->
  <a href="https://wa.me/?text=<?php echo $post_title . '%20' . $post_url; ?>" target="_blank"
    rel="noopener noreferrer">
    <img src="<?php echo UPLOAD_PATH . '/social/color-whatsapp.svg'; ?>" alt="Compartir en WhatsApp" />
  </a>
</div>
