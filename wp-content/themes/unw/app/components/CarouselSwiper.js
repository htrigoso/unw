import { createSwiper } from './createSwiper'

const CarouselSwiper = (sectionEl = '.carousel', config = {}) => {
  const defaultConfig = {
    slidesPerView: 1,
    centeredSlides: false,
    spaceBetween: 12,
    lazy: false,
    autoHeight: false,
    pagination: {
      el: `${sectionEl} .swiper-pagination`,
      type: 'fraction'
    },
    navigation: {
      nextEl: `${sectionEl} .swiper-primary-button-next`,
      prevEl: `${sectionEl} .swiper-primary-button-prev`
    }
  }

  return createSwiper(sectionEl, config, defaultConfig)
}

export default CarouselSwiper
