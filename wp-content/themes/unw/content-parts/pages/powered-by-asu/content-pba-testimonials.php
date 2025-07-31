<?php
$testimonials = [
  [
    'image' => UPLOAD_PATH . '/powered-by-asu/testimonials/principal-unw.jpg',
    'quote' => '"Con esta alianza estamos comprometidos con transformar vidas a través de la educación"',
    "author" => "Olga Horna",
    "position" => "Presidenta Ejecutiva, Universidad Norbert Wiener"
  ],
  [
    'image' => UPLOAD_PATH . '/powered-by-asu/testimonials/principal-asu.jpg',
    'quote' => '“Los estudiantes de  la Universidad Norbert Wiener accederán a una educación del siglo XXI”',
    "author" => "Michael M. Crow",
    "position" => "Presidente de Arizona State University"
  ]
]
?>

<section class="pba-testimonials">
  <div class="x-container x-container--pad-213 pba-testimonials__wrapper">
    <h2 class="pba-testimonials-title">Una alianza sin precedentes</h2>

    <div class="pba-testimonials-cards">
      <?php foreach ($testimonials as $i => $testimonial) : ?>
        <div class="pba-testimonials-card">
          <img src="<?php echo $testimonial['image']; ?>" alt="" aria-hidden="true" class="pba-testimonials-card__image">
          <div class="pba-testimonials-card__content"<?php if ($i === 1) { echo ' data-variant="asu"'; } ?>>
            <p class="pba-testimonials-card__content--quote"><?php echo $testimonial['quote']; ?></p>
            <p class="pba-testimonials-card__content--author line-clamp-1"><?php echo $testimonial['author']; ?></p>
            <p class="pba-testimonials-card__content--position"><?php echo $testimonial['position']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
