import Swiper from 'swiper/bundle'

const TabSwiper = (sectionEl = '.tabs') => {
  return new Swiper(`${sectionEl} .swiper-container`, {
    loop: false,
    slidesPerView: 'auto',
    spaceBetween: 12,
    grabCursor: true
  })
}

export default TabSwiper
