import HeroSwiper from '../../components/HeroSwiper'
import SedesMap from '../../components/SedesMap'
import PostSwiper from '../../components/PostSwiper'
import { $element } from '../../utils/dom'
import initFacilitiesAccordion from './accordion'

window.addEventListener('load', initFacilities)

function initFacilities () {
  console.log('facilities')
  const sectionEl = $element('.facilities')
  const mapEl = $element('.facilities__map')

  const heroSwiper = HeroSwiper()

  if (sectionEl && mapEl) {
    initFacilitiesAccordion()

    const map = new SedesMap({
      element: mapEl,
      sectionEl
    })
  }

  const postSwiper = PostSwiper('.posts')
}
