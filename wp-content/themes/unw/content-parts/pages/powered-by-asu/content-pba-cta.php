<?php
$cta = get_field('cta');
?>

<section class="pba-cta">
  <div class="x-container x-container--pad-216 pba-cta__wrapper">
    <div class="pba-cta__card">
      <h3 class="pba-cta__title"><?php echo $cta['title']; ?></h3>
      <p class="pba-cta__description"><?php echo $cta['description']; ?></p>

      <a href="<?php echo $cta['whatsapp']['url']; ?>" target="<?php echo $cta['whatsapp']['target']; ?>" class="btn btn-black pba-cta__button">
        <img src="<?php echo UPLOAD_PATH . '/icons/whatsapp.png'; ?>" aria-hidden="true" alt="" width="24" height="24" />
        <?php echo $cta['whatsapp']['title']; ?>
      </a>
    </div>

    <div class="pba-cta__other">
      <?php foreach ($cta['link'] as $item): ?>
        <a href="<?php echo $item['link']['url']; ?>" target="<?php echo $item['link']['target']; ?>" class="btn btn-primary-two-outline">
          <?php echo $item['link']['title']; ?>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
