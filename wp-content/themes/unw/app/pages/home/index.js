import PostSwiper from '../../components/PostSwiper'
import InternationalSwiper from '../../components/InternationalSwiper'
import PostSwiperDesktop from '../../components/PostSwiperDesktop'
import { ModalManager } from '../../components/Modal'
import FormCrmGeneral from '../../components/FormCRM/FormCrmGeneral'
import { $element } from '../../utils/dom'
import { initViewProgramTypeTracking } from '../../utils/incubeta/viewProgramType'
import { initSelectProgramTypeTracking } from '../../utils/incubeta/selectProgramType'
import { initViewEventListTracking } from '../../utils/incubeta/viewEventList'
import { initSelectEventTracking } from '../../utils/incubeta/selectEvent'

export default class HomePage {
  constructor() {
    this.create()
  }

  create() {
    new ModalManager()
    PostSwiperDesktop('.post-swiper-desktop')
    PostSwiper('.testimonial-swiper')
    PostSwiper('.last-news-swiper')
    PostSwiper('.featured-events-swiper')
    InternationalSwiper()
    this.initFormGeneral()
    initViewProgramTypeTracking()
    initSelectProgramTypeTracking()
    initViewEventListTracking()
    initSelectEventTracking()
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
