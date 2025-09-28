import { createSwiper } from './createSwiper'

const HeroSwiper = (sectionEl = '.hero-swiper', config = {}) => {
  const defaultConfig = {
    // ✅ Evita observadores automáticos que disparan reflows
    observer: false,
    observeParents: false,

    // ✅ Desactiva tracking continuo de progresos/dimensiones
    watchSlidesProgress: false,
    watchOverflow: true, // Mantener para evitar render innecesario si hay solo un slide
    updateOnWindowResize: false,
    loop: false,
    slidesPerView: 1,
    centeredSlides: false,
    spaceBetween: 0,
    speed: 500,
    lazy: false,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    autoHeight: false,
    pagination: {
      el: `${sectionEl} .swiper-pagination`,
      clickable: true
    }
  }

  return createSwiper(sectionEl, config, defaultConfig)
}

export default HeroSwiper
