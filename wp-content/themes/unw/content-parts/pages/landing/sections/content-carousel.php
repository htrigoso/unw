<?php
$data = get_query_var('section_data', null);
$section_description = $data['description'] ?? '';
$source_cards = $data['cards'] ?? [];

$gallery_items = [];
foreach ($source_cards as $card) {
  $icon = $card['icon'] ?? null;

  $description = $card['content'] ?? '';
  $title = '';

  if ($icon) {
    $gallery_items[] = [
      'title'       => $title,
      'description' => $description,
      'photo'       => $icon['url'],
    ];
  }
}
?>

<section class="landing-carousel">
  <div class="x-container x-container--pad-213 landing-carousel__wrapper">
    <?php if (!empty($section_description)) : ?>
      <div class="landing-carousel-description">
        <?php echo wp_kses_post(wpautop($section_description)); ?>
      </div>
    <?php endif; ?>

    <div class="landing-carousel-gallery">
      <?php
      get_template_part(COMMON_CONTENT_PATH, 'infra-gallery', [
        'items'           => $gallery_items,
        'swiper_id'       => 'destacados-swiper',
        'modal_id'        => 'destacados-modal',
        'modal_swiper_id' => 'destacados-modal-swiper'
      ]);
      ?>
    </div>
  </div>
</section>
