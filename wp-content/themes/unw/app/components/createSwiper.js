import Swiper from 'swiper/bundle'
import { deepMerge } from '../utils/deep-merge'

export function createSwiper(sectionEl, config = {}, defaultConfig) {
  const mergedConfig = deepMerge(
    JSON.parse(JSON.stringify(defaultConfig)),
    config
  )
  const container = document.querySelector(`${sectionEl} .swiper`) ||
    document.querySelector(`${sectionEl} .swiper-container`)

  if (!container) return null
  if (!container.classList.contains('swiper')) {
    container.classList.add('swiper')
  }

  return new Swiper(container, {
    ...mergedConfig
  })
}
