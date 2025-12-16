import Swiper from 'swiper'

const TabSwiper = (sectionEl = '.tabs-swiper') => {
  return new Swiper(`${sectionEl} .swiper-container`, {
    loop: false,
    slidesPerView: 'auto',
    spaceBetween: 0,
    grabCursor: true
  })
}

export default TabSwiper
