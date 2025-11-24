import HeroSwiper from '../../components/HeroSwiper'
import { initViewContentTracking } from '../../utils/incubeta/viewContent'
import { initBeginEventRegistrationTracking } from '../../utils/incubeta/beginEventRegistration'

(function () {
  // Inicializar tracking de view_content
  initViewContentTracking()

  // Inicializar tracking de begin_event_registration
  initBeginEventRegistrationTracking()

  HeroSwiper('.hero-swiper', {
    loop: false,
    autoplay: false
  })
})()
