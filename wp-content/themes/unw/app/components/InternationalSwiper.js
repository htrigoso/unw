import Swiper from 'swiper/bundle'

const InternationalSwiper = (sectionEl = '.international-agreements') => {
  return new Swiper(`${sectionEl} .swiper-container`, {
    slidesPerView: 'auto',
    spaceBetween: 12,
    centeredSlides: false,
    // autoplay: {
    //   delay: 0,
    //   disableOnInteraction: false
    // },
    // speed: 3000,
    // allowTouchMove: false,
    // simulateTouch: false,
    grabCursor: true,
    breakpoints: {
      576: {
        slidesPerView: 'auto',
        spaceBetween: 16
      },
      1024: {
        slidesPerView: 'auto',
        spaceBetween: 24
      }
    }
  })
}

export default InternationalSwiper
