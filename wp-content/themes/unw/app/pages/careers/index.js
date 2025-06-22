import HeroSwiper from '../../components/HeroSwiper'
import { CursorMove } from '../../functions/cursor-move'
import Tabs from '../../components/Tabs'
import PostSwiper from '../../components/PostSwiper'
import PostSwiperDesktop from '../../components/PostSwiperDesktop'
import InternationalSwiper from '../../components/InternationalSwiper'

(function () {
  CursorMove()
  HeroSwiper()

  PostSwiper('.post-swiper')
  PostSwiperDesktop('.post-swiper-desktop')
  InternationalSwiper()

  const tabsElement = document.querySelector('.tabs')
  if (tabsElement) {
    new Tabs({ element: tabsElement })
  }
})()
