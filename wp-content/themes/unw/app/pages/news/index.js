import PostSwiper from '../../components/PostSwiper'
import { initializeScrollableTabs } from '../../functions/scrollable-tabs'
import { initSelectContentTracking } from '../../utils/incubeta/selectContent'

(function () {
  const navTabs = document.querySelectorAll('.nav-tabs')
  if (navTabs.length > 0) {
    navTabs.forEach(initializeScrollableTabs)
  }

  PostSwiper('.featured-news-swiper')

  // Inicializar tracking de select_content
  initSelectContentTracking()
})()
