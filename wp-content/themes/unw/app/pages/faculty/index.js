import Tabs from '../../components/Tabs'
import PostSwiper from '../../components/PostSwiper'
import HeroSwiper from '../../components/HeroSwiper'
import PostSwiperDesktop from '../../components/PostSwiperDesktop'

(function () {
  HeroSwiper()

  PostSwiper('.post-swiper')
  PostSwiperDesktop()

  const tabsElement = document.querySelector('.faculty-tabs')
  if (tabsElement) {
    const tabLabels = {
      'ciencias-salud': 'Ciencias de la Salud',
      arquitectura: 'Arquitectura',
      ingenieria: 'Ingeniería',
      'derecho-politica': 'Derecho y Ciencia Política',
      negocios: 'Negocios',
      comunicaciones: 'Comunicaciones'
    }
    new Tabs({ element: tabsElement, tabLabels })
  }
})()
