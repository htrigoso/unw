import { createSwiper } from './createSwiper'

const HeroSwiper = (sectionEl = '.hero-swiper', config = {}) => {
  const defaultConfig = {
    loop: false,
    slidesPerView: 1,
    centeredSlides: false,
    spaceBetween: 0,
    speed: 1000,
    lazy: {
      loadPrevNext: true,
      loadOnTransitionStart: true
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: true
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
