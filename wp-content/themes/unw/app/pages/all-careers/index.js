import HeroSwiper from '../../components/HeroSwiper'
import Tabs from '../../components/Tabs'
import { changeSwiperSlide, updateSwipers } from '../../utils/swiper'

(function () {
  const heroSwiper = HeroSwiper('.hero-swiper', {
    loop: false,
    autoplay: false,
    allowTouchMove: false
  })

  const tabsElement = document.querySelector('.all-careers-tabs')
  if (tabsElement) {
    new Tabs({
      element: tabsElement,
      onTabChange(tab, targetContent, tabIndex) {
        changeSwiperSlide(tabIndex, heroSwiper)
        updateSwipers(targetContent)
      }
    })
  }
})()
