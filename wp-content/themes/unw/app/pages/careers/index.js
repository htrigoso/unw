import HeroSwiper from '../../components/HeroSwiper'
import { CursorMove } from '../../functions/cursor-move'
import Tabs from '../../components/Tabs'
import PostSwiper from '../../components/PostSwiper'

(function () {
  CursorMove()
  HeroSwiper()

  PostSwiper('.post-swiper')

  const tabsElement = document.querySelector('.tabs')
  if (tabsElement) {
    new Tabs({ element: tabsElement })
  }
})()
