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
  }

  handleOnSubmitForm() {
    document.addEventListener('DOMContentLoaded', () => {
      const form = document.querySelector('#form-general')
      if (!form) return

      let isSubmitting = false

      form.addEventListener('submit', (e) => {
        if (isSubmitting) {
          e.preventDefault()
          return
        }

        alert('Enviando formulario')
        isSubmitting = true

        const button = form.querySelector('#button-send')

        if (button) {
          button.disabled = true
          button.innerText = 'Enviando...'
        }

        if (window.dataLayer && Array.isArray(window.dataLayer)) {
          window.dataLayer.push({
            event: 'gtm.formSubmit',
            formId: form.id || null,
            formType: form.dataset.formType || null
          })
        } else {
          console.warn('⚠️ dataLayer no está definido')
        }
      })
    })
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
    this.handleOnSubmitForm()
  }
}
new HomePage()
