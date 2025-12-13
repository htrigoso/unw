import HeroSwiper from '../../components/HeroSwiper'
import { initViewContentTracking } from '../../utils/incubeta/viewContent'
import { initBeginEventRegistrationTracking } from '../../utils/incubeta/beginEventRegistration'
import FormCrmEvent from '../../components/FormCRM/FormCrmEvent'

(function () {
  // Inicializar tracking de view_content
  initViewContentTracking()

  // Inicializar tracking de begin_event_registration
  initBeginEventRegistrationTracking()

  HeroSwiper('.hero-swiper', {
    loop: false,
    autoplay: false
  })

  initFormEvent()

  function initFormEvent() {
    const form = document.querySelector('#form-event')
    if (form) {
      new FormCrmEvent({
        element: form,
        container: '.more-form'
      })
    }
  }
})()
