<section class="hero">
  <!-- Slider main container -->
  <div class="swiper-hero swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide">
        <picture className="swiper-hero__picture">
          <source srcset="<?php echo get_template_directory_uri(); ?>/upload/home/hero/hero-desktop.png" media="(min-width: 768px)" />
          <img src="<?php echo get_template_directory_uri(); ?>/upload/home/hero/hero-mobile.png" alt="Universidad Norbert Wiener" class="swiper-hero__picture--img" />
        </picture>
      </div>
      ...
    </div>
  </div>
</section>
