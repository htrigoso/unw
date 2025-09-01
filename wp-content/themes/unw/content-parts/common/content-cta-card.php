<?php
$title = $args['title'];
$description = $args['description'] ?? '';
$label = $args['label'] ?? '';
$href = $args['href'] ?? '';
$target = $args['target'] ?? '';
?>

<div class="cta-card">
  <h3 class="cta-card--title"><?php echo $title; ?></h3>
  <p class="cta-card--description"><?php echo $description; ?></p>

  <a href="<?php echo $href; ?>" target="<?php echo $target; ?>" class="btn btn-black cta-card--button lazyload">
    <img src="<?php echo UPLOAD_PATH . '/icons/whatsapp.png'; ?>" aria-hidden="true" alt="" width="24" height="24"  />
    <?php echo $label; ?>
  </a>
</div>
