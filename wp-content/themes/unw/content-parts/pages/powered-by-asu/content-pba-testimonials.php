<?php
$acf_data = get_field('testimonials');
$section_title = $acf_data['title'];
$testimonials = $acf_data['testimonios'];
?>

<section class="pba-testimonials">
  <div class="x-container x-container--pad-213 pba-testimonials__wrapper">
    <h2 class="pba-testimonials-title"><?php echo $section_title; ?></h2>

    <div class="pba-testimonials-cards">
      <?php foreach ($testimonials as $i => $testimonial): ?>
      <div class="pba-testimonials-card">
        <img src="<?php echo $testimonial['image']['url']; ?>" alt="" aria-hidden="true"
          class="pba-testimonials-card__image">
        <div class="pba-testimonials-card__content" <?php if ($i === 1) echo ' data-variant="asu"'; ?>>
          <p class="pba-testimonials-card__content--quote"><?php echo $testimonial['quote']; ?></p>
          <p class="pba-testimonials-card__content--author line-clamp-1"><?php echo $testimonial['author']; ?></p>
          <p class="pba-testimonials-card__content--position"><?php echo $testimonial['position']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>