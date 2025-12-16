import Swiper, { Navigation, Pagination, Autoplay, EffectFade } from 'swiper'
import { deepMerge } from '../utils/deep-merge'

// Configurar módulos de Swiper v6
Swiper.use([Navigation, Pagination, Autoplay, EffectFade])

export function createSwiper(sectionEl, config = {}, defaultConfig) {
  const mergedConfig = deepMerge(
    JSON.parse(JSON.stringify(defaultConfig)),
    config
  )
  return new Swiper(`${sectionEl} .swiper-container`, mergedConfig)
}
