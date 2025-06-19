import HeroSwiper from '../../components/HeroSwiper'
import { CursorMove } from '../../functions/cursor-move'
import Tabs from '../../components/Tabs'
import PostSwiper from '../../components/PostSwiper'
import TabSwiper from '../../components/TabsSwiper'

(function () {
  CursorMove()
  HeroSwiper()
  TabSwiper()
  PostSwiper('.post-swiper')

  const tabsElement = document.querySelector('.tabs')
  if (tabsElement) {
    const r = new Tabs({ element: tabsElement })
  }
})()
