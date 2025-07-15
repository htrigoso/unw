import Accordion from '../../components/Accordion'
import HeroSwiper from '../../components/HeroSwiper'
import Tabs from '../../components/Tabs'

(function () {
  HeroSwiper('.hero-swiper', {
    loop: false,
    autoplay: false
  })

  const tabsElement = document.querySelector('.admission-tabs')
  if (tabsElement) {
    const tabLabels = {
      'examen-admision': 'Examen de admisión',
      'beca-18': 'Beca 18',
      'graduado-titulado': 'Egresado Universidad',
      extraordinaria: 'Extraordinaria',
      prewiener: 'Pre Wiener'
    }
    new Tabs({ element: tabsElement, tabLabels })
  }

  document.querySelectorAll('.dynamic-accordion').forEach(element => {
    new Accordion({ element })
  })
})()
