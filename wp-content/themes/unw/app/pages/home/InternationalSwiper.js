import Swiper from 'swiper/bundle'

const InternationalSwiper = (sectionEl = '.international-agreements') => {
  return new Swiper(`${sectionEl} .swiper-container`, {
    slidesPerView: 7,
    centeredSlides: false,
    spaceBetween: 24,
    autoplay: {
      delay: 0,
      disableOnInteraction: false
    },
    speed: 3000,
    loop: true,
    allowTouchMove: false,
    simulateTouch: false
  })
}

export default InternationalSwiper
