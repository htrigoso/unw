import Tabs from '../../components/Tabs'
import PostSwiper from '../../components/PostSwiper'
import HeroSwiper from '../../components/HeroSwiper'
import PostSwiperDesktop from '../../components/PostSwiperDesktop'

(function () {
  HeroSwiper()

  PostSwiper('.testimonial-swiper')
  PostSwiperDesktop()
  PostSwiper('.simple-events-swiper', {
    breakpoints: {
      1024: { slidesPerView: 2 },
      1200: { slidesPerView: 3 }
    }
  })

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
