import HeroSwiper from '../../components/HeroSwiper'
import PostSwiper from '../../components/PostSwiper'
import InternationalSwiper from '../../components/InternationalSwiper'
import PostSwiperDesktop from '../../components/PostSwiperDesktop'
import { CursorMove } from '../../functions/cursor-move'

(function () {
  CursorMove()
  HeroSwiper()
  PostSwiper('.post-swiper')
  PostSwiperDesktop()
  InternationalSwiper()
})()
