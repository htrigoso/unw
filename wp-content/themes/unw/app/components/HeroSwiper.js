import { createSwiper } from './createSwiper'

const HeroSwiper = (sectionEl = '.hero-swiper', config = {}) => {
  const defaultConfig = {
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
