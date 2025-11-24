import CarouselSwiper from '../../components/CarouselSwiper'
import PostSwiper from '../../components/PostSwiper'
import { initViewContentTracking } from '../../utils/incubeta/viewContent'

(function () {
  // Inicializar tracking de view_content
  initViewContentTracking()

  CarouselSwiper()
  PostSwiper('.featured-news-swiper')
})()
