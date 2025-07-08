import Swiper from 'swiper/bundle'
import { deepMerge } from '../utils/deepMerge'

export function createPostSwiper(sectionEl, config = {}, defaultConfig) {
  const mergedConfig = deepMerge(
    JSON.parse(JSON.stringify(defaultConfig)),
    config
  )
  console.log('Creating PostSwiper with config:', mergedConfig)
  mergedConfig.pagination.el = `${sectionEl} .swiper-pagination`
  mergedConfig.navigation.nextEl = `${sectionEl} .post-swiper-button-next`
  mergedConfig.navigation.prevEl = `${sectionEl} .post-swiper-button-prev`
  return new Swiper(`${sectionEl} .swiper-container`, mergedConfig)
}
