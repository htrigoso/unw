<?php
$hero = get_field('Hero');
if ( $hero && is_array($hero) ) :
  get_template_part(
    ADMISSION_CONTENT_PATH,
    'admission-hero',
    [
      'title'      => $hero['title'] ?? '',
      'img_desktop'=> $hero['images']['desktop']['url'] ?? '',
      'img_mobile' => $hero['images']['mobile']['url'] ?? '',
    ]
  );
endif;
?>

<?php
$admission = get_field('list');

if ( $admission && is_array($admission) ) :
?>
<section class="admission">
  <div class="x-container x-container--pad-213 admission__wrapper">
    <h1 class="admission__title"><?= esc_html($admission['title'] ?? '') ?></h1>

    <div class="dynamic-accordion admission__modalities">
      <?php foreach ( $admission['options'] as $i => $item ) :
         $requirements = [];
        if ( !empty($item['content']['requirements']) ) {
          $requirements = array_filter(array_map('trim', explode("\n", $item['content']['requirements'])));
        }

        get_template_part(
          ADMISSION_CONTENT_PATH,
          'modality-accordion',
          [
            'label'       => ($i + 1) . '. ' . ($item['label'] ?? ''),
            'title'       => $item['content']['title'] ?? '',
            'description' => $item['content']['description'] ?? '',
            'requirements'=> $requirements,
          ]
        );
      endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>


<?php
$faq = get_field('faq');
if ( $faq && is_array($faq) ) :
?>
<section class="admission__faq">
  <div class="x-container x-container--pad-213 admission__faq__wrapper">
    <h2 class="admission__faq__title">
      <i>
        <svg width="32" height="32">
          <use xlink:href="#question-mark"></use>
        </svg>
      </i>
      <span><?= esc_html($faq['title']); ?></span>
    </h2>
    <div class="dynamic-accordion">
      <?php foreach ($faq['list'] as $item) {
        get_template_part(COMMON_CONTENT_PATH, 'accordion', [
          'label' => $item['title'],
          'content' => $item['description'],
        ]);
      } ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php
$cta = get_field('cta');
if ( $cta && is_array($cta) ) :
?>
<section class="admission__cta">
  <div class="x-container x-container--pad-213 admission__cta__wrapper">
    <?php
    get_template_part(COMMON_CONTENT_PATH, 'cta-card', [
      'title'       => $cta['title'] ?? '',
      'description' => $cta['description'] ?? '',
      'label'       => $cta['link']['title'] ?? '',
      'href'        => $cta['link']['url'] ?? '',
      'target'      => $cta['link']['target'] ?? '_self',
    ]);
    ?>
  </div>
</section>
<?php endif; ?>
