import Swiper from 'swiper/bundle'
import { deepMerge } from '../utils/deepMerge'

export function createSwiper(sectionEl, config = {}, defaultConfig) {
  const mergedConfig = deepMerge(
    JSON.parse(JSON.stringify(defaultConfig)),
    config
  )
  mergedConfig.pagination.el = `${sectionEl} .swiper-pagination`
  if (mergedConfig.navigation) {
    mergedConfig.navigation.nextEl = `${sectionEl} .swiper-primary-button-next`
    mergedConfig.navigation.prevEl = `${sectionEl} .swiper-primary-button-prev`
  }
  return new Swiper(`${sectionEl} .swiper-container`, mergedConfig)
}
