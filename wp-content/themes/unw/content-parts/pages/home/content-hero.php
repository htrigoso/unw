<section class="hero">
  <!-- Slider main container -->
  <div class="swiper-hero swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper swiper-hero__wrapper">
      <!-- Slides -->
      <div class="swiper-slide">
        <picture className="swiper-hero__picture">
          <source srcset="<?php echo get_template_directory_uri(); ?>/upload/home/hero/hero-desktop.png" media="(min-width: 768px)" />
          <img src="<?php echo get_template_directory_uri(); ?>/upload/home/hero/hero-mobile.png" alt="Universidad Norbert Wiener" class="swiper-hero__picture--img" />
        </picture>
      </div>
      <div class="hero__content">
        <article class="x-container hero__content--body">
          <h1 class="hero__content--title">
            Tu futuro empieza aquí.
          </h1>
          <p class="hero__content--text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
          </p>
          <a class="btn btn-primary hero__content--cta" href="#">Solicitar más información</a>
          <a class="btn btn-outline-primary hero__content--cta" href="#">Solicitar más información</a>
        </article>
      </div>

      ...
    </div>
  </div>
</section>
