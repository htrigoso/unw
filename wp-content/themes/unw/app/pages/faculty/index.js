import PostSwiper from '../../components/PostSwiper'
import HeroSwiper from '../../components/HeroSwiper'
import PostSwiperDesktop from '../../components/PostSwiperDesktop'
import InternationalSwiper from '../../components/InternationalSwiper'
import { ModalManager } from '../../components/Modal'
import Tabs from '../../components/Tabs'

(function () {
  HeroSwiper('.hero-swiper', {
    loop: false,
    autoplay: false,
    allowTouchMove: false
  })

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

  PostSwiper('.laboratories-modal-swiper', {
    slidesPerView: 1,
    breakpoints: {
      576: { slidesPerView: 1, spaceBetween: 8 },
      1024: { slidesPerView: 1, spaceBetween: 8 }
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
      InternationalSwiper(`#${id}`)
      // Si quieres hacer algo más con el ID:
      // por ejemplo: pasarlo a otra función
      // InternationalSwiper(element)
    })
  }
  International()

  const tabsElement = document.querySelector('.faculty-tabs')
  if (tabsElement) {
    new Tabs({
      element: tabsElement,
      preventDefault: true
    })
  }

  new ModalManager({
    onOpen: (modal) => {
      const swiperElement = modal.querySelector('.laboratories-modal-swiper')

      if (swiperElement) {
        if (swiperElement.swiper) {
          swiperElement.swiper.update()
        } else {
          PostSwiper('.laboratories-modal-swiper', {
            slidesPerView: 1,
            breakpoints: {
              576: { slidesPerView: 1, spaceBetween: 8 },
              1024: { slidesPerView: 1, spaceBetween: 8 }
            }
          })
        }
      }
    }
  })
})()
