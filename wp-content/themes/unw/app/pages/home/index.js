import HeroSwiper from '../../components/HeroSwiper'
import PostSwiper from '../../components/PostSwiper'
import InternationalSwiper from '../../components/InternationalSwiper'
import PostSwiperDesktop from '../../components/PostSwiperDesktop'
import { ModalManager } from '../../components/Modal'
import FormCrmGeneral from '../../components/FormCRM/FormCrmGeneral'
import { $element } from '../../utils/dom'

export default class HomePage {
  constructor() {
    this.create()
  }

  create() {
    new ModalManager()

    HeroSwiper('.hero-swiper', {
      pagination: {
        el: '.hero-swiper .home-hero-pagination',
        type: 'bullets'
      },
      navigation: {
        nextEl: '.hero-swiper .home-hero-button-next',
        prevEl: '.hero-swiper .home-hero-button-prev'
      }
    })
    PostSwiper('.testimonial-swiper')
    PostSwiper('.last-news-swiper', {
      pagination: {
        el: '.last-news-swiper .swiper-pagination',
        type: 'fraction'
      }
    })
    PostSwiper('.featured-events-swiper', {
      pagination: false
    })
    PostSwiperDesktop()
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
