<?php
$history = get_field('history');


  if ($history && is_array($history)) :
?>

<section class="our-history">
  <div class="x-container x-container--pad-213 our-history__wrapper">
    <h2 class="our-history__title"><?= $history['title']; ?></h2>
    <ul class="milestone-list">
      <?php foreach ($history['list'] as $milestone): ?>
      <li class="milestone-item">
        <span class="milestone-year"><?= $milestone['year']; ?></span>
        <div class="milestone-content--wrapper">
          <div class="milestone-content">
            <?php if (!empty($milestone['image'])): ?>
            <img src="<?=placeholder() ?>" data-src="<?= $milestone['image']['url']; ?>" alt="<?= $milestone['image']['alt']; ?>"
              class="milestone-image lazyload">
            <?php endif; ?>
            <p class="milestone-description">
              <?= $milestone['description']; ?>
            </p>
          </div>
        </div>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
<?php endif; ?>
