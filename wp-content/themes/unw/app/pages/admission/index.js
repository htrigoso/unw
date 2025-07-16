import Accordion from '../../components/Accordion'
import HeroSwiper from '../../components/HeroSwiper'
import Tabs from '../../components/Tabs'
import { updateBreadcrumbLabels } from '../../utils/breadcrumb'
import { updateSwipers } from '../../utils/swiper'

(function () {
  HeroSwiper('.hero-swiper', {
    loop: false,
    autoplay: false
  })

  const tabsElement = document.querySelector('.admission-tabs')
  if (tabsElement) {
    new Tabs({
      element: tabsElement,
      onTabChange(tab, targetContent, tabIndex) {
        updateBreadcrumbLabels(tab)
        updateSwipers(targetContent)
      }
    })
  }

  document.querySelectorAll('.dynamic-accordion').forEach(element => {
    new Accordion({ element })
  })
})()
