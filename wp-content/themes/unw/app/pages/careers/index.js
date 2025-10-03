import HeroSwiper from '../../components/HeroSwiper'
import Tabs from '../../components/Tabs'
import PostSwiper from '../../components/PostSwiper'
import InternationalSwiper from '../../components/InternationalSwiper'
import { updateSwipers } from '../../utils/swiper'
import Accordion from '../../components/Accordion'
import FormCrmCareer from '../../components/FormCRM/FormCrmCareer'
import { ModalManager } from '../../components/Modal'
import { $element } from '../../utils/dom'

(function () {
  HeroSwiper('.hero-swiper', {
    autoplay: {
      delay: 2500,
      disableOnInteraction: false
    },
    loop: false
  })
  PostSwiper('.testimonials-swiper')
  PostSwiper('.program-swiper')
  PostSwiper('.program-committee-swiper')
  PostSwiper('.staff-swiper')
  PostSwiper('.infra-swiper')
  PostSwiper('.admission-swiper')
  InternationalSwiper('.internationalization')

  document.querySelectorAll('.dynamic-accordion').forEach(element => {
    new Accordion({ element, allowMultiple: true })
  })

  const tabsElement = document.querySelector('.career-tabs')
  if (tabsElement) {
    new Tabs({
      element: tabsElement,
      onTabChange(tab, targetContent, tabIndex) {
        updateSwipers(targetContent)
      }
    })
  }
  const formDesktoPregrado = $element('[data-form-type="careers-desktop"]')

  if (formDesktoPregrado) {
    new FormCrmCareer({
      element: formDesktoPregrado
    })
  }
  const formDesktoVirtual = $element('[data-form-type="careers-mobile"]')

  if (formDesktoVirtual) {
    new FormCrmCareer({
      element: formDesktoVirtual
    })
  }

  new ModalManager({
    onOpen: (modal, trigger) => {
      const swiperElement = modal.querySelector('.infra-modal-swiper')

      if (swiperElement) {
        let swiperInstance = swiperElement.swiper

        if (!swiperInstance) {
          swiperInstance = PostSwiper('.infra-modal-swiper', {
            slidesPerView: 1,
            breakpoints: {
              0: { slidesPerView: 1, spaceBetween: 8 },
              576: { slidesPerView: 1, spaceBetween: 8 },
              1024: { slidesPerView: 1, spaceBetween: 8 },
              1200: { slidesPerView: 1, spaceBetween: 8 }
            }
          })
        }
        const slideIndex = trigger?.dataset?.slideIndex

        if (swiperInstance && slideIndex !== undefined) {
          swiperInstance.slideTo(parseInt(slideIndex, 10), 0)
          swiperInstance.update()
        }
      }
    }
  })
})()
