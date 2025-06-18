<section class="hero">
  <div class="swiper-container is-draggable">
    <div class="swiper-wrapper swiper-hero__wrapper">
      <div class="swiper-slide swiper-hero__slide">
        <picture className="swiper-hero__picture">
          <source srcset="<?php echo get_template_directory_uri(); ?>/upload/home/hero/hero-desktop.png"
            media="(min-width: 768px)" />
          <img src="<?php echo get_template_directory_uri(); ?>/upload/home/hero/hero-mobile.png"
            alt="Universidad Norbert Wiener" class="swiper-hero__picture--img" />
        </picture>
      </div>
      <div class="hero__wrapper">
        <div class="x-container hero__container">
          <article class="hero__content">
            <h1 class="hero__content--title">
              Carrera de Farmacia y <br> Bioquímica
            </h1>
          </article>
        </div>
      </div>
    </div>
  </div>
  <div class="move-cursor">
    <div>
      <div class="move-cursor__circle"></div>
      <div class="move-cursor__triangle"></div>
      <div class="move-cursor__triangle"></div>
    </div>
  </div>
</section>