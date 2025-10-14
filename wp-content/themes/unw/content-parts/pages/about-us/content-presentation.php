<?php
$presentation = get_field('presentation');

if ( $presentation && is_array($presentation) ) :
?>
<section class="us-presentation">
  <div class="x-container x-container--pad-213 us-presentation__wrapper">
    <h2 class="us-presentation__title">
      <?= $presentation['title']; ?>
    </h2>
    <p class="us-presentation__description">
      <strong><?= $presentation['subtitle']; ?></strong>
      <br /><br />
      <?= $presentation['description']; ?>
    </p>
  </div>
</section>
<?php endif; ?>