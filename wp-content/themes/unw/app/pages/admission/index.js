import HeroSwiper from '../../components/HeroSwiper'
import Tabs from '../../components/Tabs'

(function () {
  HeroSwiper()

  const tabsElement = document.querySelector('.admission-tabs')
  if (tabsElement) {
    new Tabs({ element: tabsElement })
  }
})()
