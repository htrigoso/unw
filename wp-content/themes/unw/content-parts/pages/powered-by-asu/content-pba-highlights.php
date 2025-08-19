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
    <div class="pba-highlights__video" data-modal-target="highlight-modal" style="cursor: pointer;">
      <img
        src="<?php echo esc_url($highlights['imagen']['url']); ?>"
        alt="<?php echo esc_attr($highlights['imagen']['alt']); ?>"
        class="pba-highlights__video-img" />
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

<?php
ob_start();
?>
<div class="pba-highlights-modal__video">
  <img
    src="<?php echo esc_url($highlights['imagen']['url']); ?>"
    alt="<?php echo esc_attr($highlights['imagen']['alt']); ?>"
    class="pba-highlights-modal__video-img" />
  <button class="pba-highlights-modal__video-btn">
    <i>
      <svg width="88" height="88">
        <use xlink:href="#player"></use>
      </svg>
    </i>
  </button>
</div>
<?php
$content = ob_get_clean();
$id = 'highlight-modal';
?>
<?php
get_template_part(COMMON_CONTENT_PATH, 'modal', [
  'content' => $content,
  'id' => $id,
  'class' => 'pba-highlights-modal'
]);
?>
