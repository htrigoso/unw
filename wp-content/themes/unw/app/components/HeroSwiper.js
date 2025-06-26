import Swiper from 'swiper/bundle'

const HeroSwiper = (sectionEl = '.hero') => {
  return new Swiper(`${sectionEl} .swiper-container`, {
    loop: true,
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
    autoHeight: false,
    pagination: {
      el: `${sectionEl} .swiper-pagination`,
      clickable: true
    }
  })
}

export default HeroSwiper
