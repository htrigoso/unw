<?php
$presentation = $args['presentation'] ?? null;
if (!$presentation) return;

$title       = $presentation['title'] ?? 'Carrera';
$desktopImg  = $presentation['images']['desktop']['url'] ?? IMAGE_DEFAULT;
$mobileImg   = $presentation['images']['mobile']['url'] ?? IMAGE_DEFAULT;
$altImg      = $presentation['images']['desktop']['alt']??'';
$resumen     = $presentation['resumen']['resumen_info']??'';
$detailText  = $presentation['detail'];
?>

<section class="career-intro">
  <?php if ($title): ?>
  <h2 class="career-intro__title"><?=wp_kses_post($title); ?></h2>
  <?php endif; ?>

  <div class="career-intro__content">
    <div class="career-intro__visual">
      <picture class="career-intro__visual--picture">
        <?php if ($desktopImg): ?>
        <source srcset="<?=esc_url($desktopImg); ?>" media="(min-width: 768px)" />
        <?php endif; ?>
        <?php if ($mobileImg): ?>
        <img src="<?= placeholder() ?>" data-src="<?=esc_url($mobileImg); ?>" alt="<?=esc_attr($altImg); ?>"
          class="career-intro__visual--img lazyload" />
        <?php endif; ?>
      </picture>
    </div>
    <?php
     ?>
    <div class="career-intro__summary">
      <h3 class="career-intro__summary-name">Resumen de la Carrera</h3>
      <div class="career-intro__list">
        <div class="career-intro__list-row">
          <div class="career-intro__item">
            <strong>Semestres</strong>
            <span class="career-intro__highlight"><?=get_value_or_default($resumen['semesters'], true, '0'); ?></span>
          </div>
          <div class="career-intro__item">
            <strong>Total de créditos</strong>
            <span
              class="career-intro__highlight"><?=get_value_or_default($resumen['total_credits'], true, '0'); ?></span>
          </div>
        </div>
        <div class="career-intro__item">
          <strong>Grado Académico</strong>
          <span class="career-intro__highlight"><?=get_value_or_default($resumen['academic_degree'], true); ?></span>
        </div>
        <div class="career-intro__item">
          <strong>Título Profesional</strong>
          <span class="career-intro__highlight"><?=get_value_or_default($resumen['professional_title'], true); ?></span>
        </div>
        <?php if(isset($resumen['modalities']) && !empty($resumen['modalities'])): ?>
        <div class="career-intro__item">
          <strong>Modalidades</strong>
          <span class="career-intro__highlight"><?=esc_html(uw_get_modalities_titles($resumen['modalities'])); ?></span>
        </div>
        <?php endif; ?>
        <?php if(isset($resumen['campus']) && !empty($resumen['campus'])): ?>
        <div class="career-intro__item">
          <strong>Campus</strong>
          <span class="career-intro__highlight"><?=esc_html(uw_terms_to_string($resumen['campus'])); ?></span>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <?php if (!empty($detailText)): ?>
  <div class="career-intro__detail">
    <h3 class="career-intro__detail-title">Detalle</h3>
    <div class="career-intro__detail-content" data-content="paragraph">
      <?=wpautop(wp_kses_post($detailText)); ?>
    </div>
  </div>
  <?php endif; ?>
</section>
