<?php
$presentation = $args['presentation'] ?? null;
if (!$presentation) return;

$title       = $presentation['title'] ?? '';
$desktopImg  = $presentation['images']['desktop']['url'] ?? '';
$mobileImg   = $presentation['images']['mobile']['url'] ?? '';
$altImg      = $presentation['images']['desktop']['alt'] ?? 'Imagen presentación';
$resumen     = $presentation['resumen']['resumen_info'] ?? [];
$detailText  = $presentation['detail'] ?? '';
?>

<section class="career-intro">
  <?php if ($title): ?>
 <h2 class="career-intro__title"><?php echo wp_kses_post($title); ?></h2>
  <?php endif; ?>

  <div class="career-intro__content">
    <div class="career-intro__visual">
      <picture class="career-intro__visual--picture">
        <?php if ($desktopImg): ?>
        <source srcset="<?php echo esc_url($desktopImg); ?>" media="(min-width: 768px)" />
        <?php endif; ?>
        <?php if ($mobileImg): ?>
        <img src="<?=placeholder() ?>" data-src="<?php echo esc_url($mobileImg); ?>" alt="<?php echo esc_attr($altImg); ?>"
          class="career-intro__visual--img lazyload" />
        <?php endif; ?>
      </picture>
    </div>

    <div class="career-intro__summary">
      <h3 class="career-intro__summary-name">Resumen de la Carrera</h3>
      <ul class="career-intro__list">
        <div class="career-intro__list-row">
          <li class="career-intro__item">
            <strong>Semestres</strong>
            <span class="career-intro__highlight"><?php echo esc_html($resumen['semesters'] ?? '-'); ?></span>
          </li>
          <li class="career-intro__item">
            <strong>Total de créditos</strong>
            <span class="career-intro__highlight"><?php echo esc_html($resumen['total_credits'] ?? '-'); ?></span>
          </li>
        </div>
        <li class="career-intro__item">
          <strong>Grado Académico</strong>
          <span class="career-intro__highlight"><?php echo esc_html($resumen['academic_degree'] ?? '-'); ?></span>
        </li>
        <li class="career-intro__item">
          <strong>Título Profesional</strong>
          <span class="career-intro__highlight"><?php echo esc_html($resumen['professional_title'] ?? '-'); ?></span>
        </li>
      </ul>
    </div>
  </div>

  <?php if (!empty($detailText)): ?>
  <div class="career-intro__detail">
    <h4 class="career-intro__detail-title">Detalle</h4>
    <div class="career-intro__detail-content">
      <?php echo wpautop(wp_kses_post($detailText)); ?>
    </div>
  </div>
  <?php endif; ?>
</section>
