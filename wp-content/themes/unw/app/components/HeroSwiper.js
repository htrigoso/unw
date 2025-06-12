import Swiper from 'swiper/bundle'

const HeroSwiper = (sectionEl = '.hero') => {
  return new Swiper(`${sectionEl} .swiper-container`, {
    loop: false,
    slidesPerView: 1,
    centeredSlides: false,
    spaceBetween: 0,
    speed: 1500,
    lazy: false,
    autoplay: false,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    autoHeight: false,
    navigation: {
      prevEl: `${sectionEl} .swiper-button-prev`,
      nextEl: `${sectionEl} .swiper-button-next`
    },
    pagination: {
      el: `${sectionEl} .swiper-pagination`,
      type: 'progressbar',
      clickable: false
    }
  })
}

export default HeroSwiper
