import Swiper from 'swiper/bundle'
import { deepMerge } from '../utils/deep-merge'

export function createSwiper(sectionEl, config = {}, defaultConfig) {
  const mergedConfig = deepMerge(
    JSON.parse(JSON.stringify(defaultConfig)),
    config
  )
  return new Swiper(`${sectionEl} .swiper-container`, mergedConfig)
}
