import HeroSwiper from '../../components/HeroSwiper'
import PostSwiper from '../../components/PostSwiper'
import InternationalSwiper from '../../components/InternationalSwiper'
import PostSwiperDesktop from '../../components/PostSwiperDesktop'
import { ModalManager } from '../../components/Modal'
import FormCrmGeneral from '../../components/FormCRM/FormCrmGeneral'
import { $element } from '../../utils/dom'
import { managePagination } from '../../utils/swiper'

export default class HomePage {
  constructor() {
    this.create()
  }

  create() {
    new ModalManager()

    const heroSwiper = HeroSwiper('.hero-swiper', {
      pagination: {
        el: '.hero-swiper .home-hero-pagination',
        type: 'bullets',
        clickable: false
      },
      navigation: {
        nextEl: '.hero-swiper .home-hero-button-next',
        prevEl: '.hero-swiper .home-hero-button-prev'
      },
      loop: true
    })

    if (heroSwiper) {
      managePagination(heroSwiper)
    }

    PostSwiperDesktop('.post-swiper-desktop')
    PostSwiper('.testimonial-swiper')
    PostSwiper('.last-news-swiper')
    PostSwiper('.featured-events-swiper')
    InternationalSwiper()
    this.initFormGeneral()
  }

  initFormGeneral() {
    const form = $element('#form-general')
    if (form) {
      new FormCrmGeneral({
        element: form,
        container: '.more-form'
      })
    }
  }
}
new HomePage()
