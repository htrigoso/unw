<?php
$countries = [
  ['name' => 'Spain',       'file' => '1.svg'],
  ['name' => 'Mexico',      'file' => '2.svg'],
  ['name' => 'Colombia',    'file' => '3.svg'],
  ['name' => 'Chile',       'file' => '4.svg'],
  ['name' => 'Italy',       'file' => '5.svg'],
  ['name' => 'Brazil',      'file' => '6.svg'],
  ['name' => 'Costa Rica',  'file' => '7.svg'],
  ['name' => 'Ecuador',     'file' => '8.svg'],
];
?>

<section class="international-agreements">
  <div class="x-container">
    <div class="international-agreements__wrapper">

      <h2 class="international-agreements__title">Haz que tu educación cruce fronteras.</h2>
      <p class="international-agreements__subtitle">
        Explora los <strong>+90 Convenios Internacionales</strong> en universidades reconocidas alrededor del mundo:
      </p>

      <div class="swiper-container swiper-agreements">
        <div class="swiper-wrapper international-agreements__items">
         <?php foreach ($countries as $country):?>
            <div class="swiper-slide international-agreements__item">
              <div class="international-agreements__card">
                <img width="80" height="80" src="<?php echo get_template_directory_uri(); ?>/upload/home/international-agreements/<?php echo $country['file']; ?>"
                    alt="País <?php echo $i; ?>"
                    class="international-agreements__flag">
                <p class="international-agreements__country"><?php echo $country['name']; ?></p>
              </div>
            </div>
           <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
