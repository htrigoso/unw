<section class="hero">
  <div class="swiper-container">
    <div class="swiper-wrapper swiper-hero__wrapper">
      <div class="swiper-slide swiper-hero__slide">
        <picture className="swiper-hero__picture">
          <source srcset="<?php echo get_template_directory_uri(); ?>/upload/home/hero/hero-desktop.png" media="(min-width: 768px)" />
          <img src="<?php echo get_template_directory_uri(); ?>/upload/home/hero/hero-mobile.png" alt="Universidad Norbert Wiener" class="swiper-hero__picture--img" />
        </picture>
      </div>
      <div class="hero__wrapper">
        <div class="x-container hero__container">
          <article class="hero__content">
            <h1 class="hero__content--title">
              Tu futuro empieza aquí.
            </h1>
            <p class="hero__content--body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
            </p>
            <div class="hero__content--buttons">
              <a class="btn btn-primary hero__content--cta" href="#">Solicitar más información</a>
              <a class="btn btn-primary-outline hero__content--cta" href="#">Solicitar más información</a>
            </div>
          </article>
        </div>
      </div>
      ...
    </div>
  </div>
</section>
