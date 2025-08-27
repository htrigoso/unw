<?php
$presentation = get_field('presentation');
if ($presentation && is_array($presentation)) :
?>
  <section class="presentation">
    <div class="x-container x-container--pad-213 presentation__wrapper">
      <div class="presentation__content">
        <h2 class="presentation__title"><?= $presentation['title'] ?></h2>
        <p class="presentation__text"><?= nl2br($presentation['description']); ?></p>
      </div>
    </div>
  </section>
<?php endif ?>
<?php get_template_part(QUALITY_POLICY_CONTENT_PATH, 'promote'); ?>

<?php
$guidelines = get_field('guidelines');
if ($guidelines && is_array($guidelines)) :
?>
  <section class="guidelines">
    <div class="x-container x-container--pad-213 guidelines__wrapper">
      <div class="guidelines__content">
        <h2 class="guidelines__title"><?= esc_html($guidelines['title']) ?></h2>
        <ul class="guidelines__list list-primary">
          <?php foreach ($guidelines['list'] as $list) : ?>
            <li class="guidelines__item">
              <?= nl2br(wp_kses_post($list['title'])) ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>
<?php endif ?>
<?php
$commitment = get_field('commitment');
if ($commitment) :
?>
  <section class="commitment">
    <div class="x-container x-container--pad-213 commitment__wrapper">
      <div class="commitment__content">
        <h2 class="commitment__title"><?= esc_html($commitment['title']) ?></h2>
        <p class="commitment__text">
          <?= esc_html($commitment['description']) ?> </p>
      </div>
    </div>
  </section>
<?php endif ?>