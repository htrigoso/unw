import HeroSwiper from '../../components/HeroSwiper'
import PostSwiper from '../../components/PostSwiper'
import PostSwiperMobile from '../../components/PostSwiperMobile'
import { initSelectContentTracking } from '../../utils/incubeta/selectContent'

(function () {
  HeroSwiper('.hero-swiper')
  PostSwiper('.featured-events-swiper')
  PostSwiperMobile('.all-events-swiper')

  // Inicializar tracking de select_content
  initSelectContentTracking()
})()
