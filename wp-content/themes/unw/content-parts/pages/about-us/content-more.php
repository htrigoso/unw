<?php
$cards = [
  [
    'image' => UPLOAD_PATH . '/about-us/more/card-1.jpg',
    'title' => 'Nuestra Historia',
    'href' => '/nuestra-historia',
    'target' => '_self'
  ],
  [
    'image' => UPLOAD_PATH . '/about-us/more/card-2.jpg',
    'title' => 'Política de calidad y valores',
    'href' => '/politica-de-calidad-y-valores',
    'target' => '_self'
  ]
]
?>

<section class="us-more">
  <div class="x-container x-container--pad-213 us-more__wrapper">
    <h3 class="us-more__title">Conoce más</h3>
    <div class="us-more__list">
      <?php foreach ($cards as $card): ?>
        <a class="us-more__item" href="<?php echo esc_url($card['href']); ?>" target="<?php echo esc_attr($card['target']); ?>">
          <img class="us-more__item--image" src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>">
          <div class="us-more__item--overlay">
            <div class="us-more__item--content">
              <h4 class="us-more__item--title"><?php echo esc_html($card['title']); ?></h4>
              <i class="us-more__item--icon">
                <svg width="24" height="24">
                  <use xlink:href="#arrow-right"></use>
                </svg>
              </i>
            </div>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
