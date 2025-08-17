<?php
$cta = get_field('cta');
?>

<section class="pba-cta">
  <div class="x-container x-container--pad-216 pba-cta__wrapper">
    <?php
    get_template_part(COMMON_CONTENT_PATH, 'cta-card', [
      'title' => $cta['title'],
      'description' => $cta['description'],
      'label' => $cta['whatsapp']['title'],
      'href' => $cta['whatsapp']['url'],
      'target' => $cta['whatsapp']['target'],
    ]);
    ?>
    <div class="pba-cta__other">
      <?php foreach ($cta['link'] as $item): ?>
        <a href="<?php echo $item['link']['url']; ?>" target="<?php echo $item['link']['target']; ?>" class="btn btn-primary-two-outline">
          <?php echo $item['link']['title']; ?>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
