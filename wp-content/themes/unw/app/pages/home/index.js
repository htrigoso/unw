import HeroSwiper from '../../components/HeroSwiper'
import PostSwiper from '../../components/PostSwiper'
import InternationalSwiper from '../../components/InternationalSwiper'
import PostSwiperDesktop from '../../components/PostSwiperDesktop'
import FormCrmGeneral from '../../components/FormCRM/FormCrmGeneral'
import Page from '../../classes/Page'
import { ModalManager } from '../../components/Modal'

export default class HomePage extends Page {
  constructor() {
    super({
      id: 'home-page',
      element: '.home-page'
    })
    this.create()
    // super.create()
  }

  create() {
    new ModalManager()

    HeroSwiper('.hero-swiper', {
      autoplay: false,
      allowTouchMove: false
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

    new FormCrmGeneral({
      element: '#form-general',
      container: '.more-form'
    })
  }
}
new HomePage()
