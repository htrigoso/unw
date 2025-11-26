import PostSwiper from '../../components/PostSwiper'
import { initSelectContentTracking } from '../../utils/incubeta/selectContent'

(function () {
  PostSwiper('.featured-news-swiper')

  // Inicializar tracking de select_content
  initSelectContentTracking()
})()
