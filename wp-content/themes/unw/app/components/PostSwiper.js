import Swiper from 'swiper/bundle'
import { deepMerge } from '../utils/deepMerge'

const postSwiperDefaultConfig = {
  loop: false,
  slidesPerView: 'auto',
  spaceBetween: 8,
  grabCursor: true,
  pagination: {
    el: '.post-swiper .swiper-pagination',
    clickable: true
  },
  navigation: {
    nextEl: '.post-swiper .post-swiper-button-next',
    prevEl: '.post-swiper .post-swiper-button-prev'
  },
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
}

const PostSwiper = (sectionEl = '.post-swiper', config = {}) => {
  const mergedConfig = deepMerge(
    JSON.parse(JSON.stringify(postSwiperDefaultConfig)),
    config
  )
  mergedConfig.pagination.el = `${sectionEl} .swiper-pagination`
  mergedConfig.navigation.nextEl = `${sectionEl} .post-swiper-button-next`
  mergedConfig.navigation.prevEl = `${sectionEl} .post-swiper-button-prev`
  return new Swiper(`${sectionEl} .swiper-container`, mergedConfig)
}

export default PostSwiper
