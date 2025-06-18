import HeroSwiper from '../../components/HeroSwiper'
import PostSwiper from '../../components/PostSwiper'
import { CursorMove } from '../../functions/cursor-move'
import InternationalSwiper from './InternationalSwiper'

(function () {
  CursorMove()
  HeroSwiper()
  PostSwiper('.post-swiper')
  InternationalSwiper()
})()
