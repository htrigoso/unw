import Tabs from '../../components/Tabs'
import { updateSwipers } from '../../utils/swiper'

(function () {
  const tabsElement = document.querySelector('.all-careers-tabs')
  if (tabsElement) {
    new Tabs({
      element: tabsElement,
      onTabChange(tab, targetContent, tabIndex) {
        updateSwipers(targetContent)
      }
    })
  }
})()
