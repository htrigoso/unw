import Swiper from 'swiper/bundle'

const HeroSwiper = (sectionEl = '.hero') => {
  return new Swiper(`${sectionEl} .swiper-container`, {
    loop: false,
    slidesPerView: 1,
    centeredSlides: false,
    spaceBetween: 0,
    speed: 1500,
    lazy: false,
    autoplay: true,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    autoHeight: false
  })
}

export default HeroSwiper
