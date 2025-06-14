import Swiper from 'swiper/bundle'

const InternationalSwiper = (sectionEl = '.international-agreements') => {
  return new Swiper(`${sectionEl} .swiper-container`, {
    slidesPerView: 7,
    centeredSlides: false,
    spaceBetween: 24,
    grabCursor: true,
    autoplay: {
      delay: 0,
      disableOnInteraction: false
    },
    speed: 3000,
    loop: true
  })
}

export default InternationalSwiper
