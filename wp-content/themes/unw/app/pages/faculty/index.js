import Tabs from '../../components/Tabs'
import PostSwiper from '../../components/PostSwiper'
import HeroSwiper from '../../components/HeroSwiper'
import PostSwiperDesktop from '../../components/PostSwiperDesktop'
import InternationalSwiper from '../../components/InternationalSwiper'

(function () {
  HeroSwiper()

  PostSwiper('.testimonials-swiper', {
    breakpoints: {
      1024: { slidesPerView: 2, spaceBetween: 24 },
      1200: { slidesPerView: 3, spaceBetween: 48 }
    }
  })
  PostSwiperDesktop('.laboratories-swiper', {
    breakpoints: {
      1024: { slidesPerView: 2, spaceBetween: 24 },
      1200: { slidesPerView: 3, spaceBetween: 48 }
    }
  })
  PostSwiper('.simple-events-swiper', {
    breakpoints: {
      1024: { slidesPerView: 2 },
      1200: { slidesPerView: 3, spaceBetween: 88 }
    }
  })

  const International = () => {
    const elements = document.querySelectorAll('.internationalization')

    elements.forEach((element) => {
      const id = element.id
      console.log('ID:', id)

      InternationalSwiper(`#${id}`)

      // Si quieres hacer algo más con el ID:
      // por ejemplo: pasarlo a otra función
      // InternationalSwiper(element)
    })
  }

  International()
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
