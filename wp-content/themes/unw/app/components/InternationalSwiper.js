import Swiper from 'swiper/bundle'

const InternationalSwiper = (sectionEl = '.international-agreements') => {
  return new Swiper(`${sectionEl} .swiper-container`, {
    slidesPerView: 'auto',
    spaceBetween: 12,
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
