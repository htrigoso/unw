<div class="social-meta">
  <button class="social-meta__share-button" id="copy-link">
    <i>
      <svg width="24" height="24">
        <use xlink:href="#share"></use>
      </svg>
    </i>
    Compartir
  </button>
  <a
    href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>"
    target="_blank"
    rel="noopener noreferrer">
    <img src="<?php echo UPLOAD_PATH . '/social/color-facebook.svg' ?>" alt="Compartir en facebook" />
  </a>
  <a
    href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>"
    target="_blank"
    rel="noopener noreferrer">
    <img src="<?php echo UPLOAD_PATH . '/social/color-linkedin.svg' ?>" alt="Compartir en linkedin" />
  </a>
  <a
    href="https://x.com/intent/tweet?text=<?php echo urlencode(get_the_title()); ?>&url=<?php echo urlencode(get_permalink()); ?>"
    target="_blank"
    rel="noopener noreferrer">
    <img src="<?php echo UPLOAD_PATH . '/social/color-x.svg' ?>" alt="Compartir en x" />
  </a>
  <a
    href="https://wa.me/?text=<?php echo urlencode(get_the_title() . ' ' . get_permalink()); ?>"
    target="_blank"
    rel="noopener noreferrer">
    <img src="<?php echo UPLOAD_PATH . '/social/color-whatsapp.svg' ?>" alt="Compartir en whatsapp" />
  </a>
</div>
