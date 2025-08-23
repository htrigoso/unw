/* eslint-disable no-undef */
import { ModalManager } from '../../components/Modal'
import PostSwiperDesktop from '../../components/PostSwiperDesktop'

window.addEventListener('DOMContentLoaded', () => {
  // Language switch
  let currentLang = 'ES' // Puedes leer esto de localStorage o PHP

  const circle = document.getElementById('switchCircle')
  const switchContainer = document.getElementById('languageSwitch')

  switchContainer.addEventListener('click', () => {
    if (currentLang === 'ES') {
      currentLang = 'EN'
      circle.style.transform = 'translateX(-55%)'
      circle.innerText = 'EN'
      // localStorage.setItem('lang', 'en');
      // window.location.href = '?lang=en';
    } else {
      currentLang = 'ES'
      circle.style.transform = 'translateX(55%)'
      circle.innerText = 'ES'
      // localStorage.setItem('lang', 'es');
      // window.location.href = '?lang=es';
    }
  })

  PostSwiperDesktop('.highlight-swiper', {
    pagination: {
      el: '.highlight-swiper .swiper-pagination',
      type: 'fraction'
    }
  })

  const modals = new ModalManager()
  const section = document.querySelector('.pba-network')
  const countries = JSON.parse(section.dataset.countries)
  const container = document.getElementById('globeViz')

  const gData = countries.map((p, i) => ({
    id: i + 1,
    lat: p.lat,
    lng: p.lng,
    icono: p.icon,
    nombre: p.name,
    size: 30
  }))

  const tooltip = document.getElementById('tooltip')

  const globe = new Globe(document.getElementById('globeViz'))
    .globeImageUrl(`${window.appConfigUnw.uploadUrl}/powered-by-asu/globe/maps/america.jpg`)
    .backgroundColor('rgb(218, 247, 247, 1)')
    .showAtmosphere(false)
    .globeOffset([0, 0])
    .htmlElementsData(gData)
    .htmlElement(d => {
      const el = document.createElement('img')
      el.src = d.icono
      el.style.width = `${d.size}px`
      el.style.transition = 'opacity 250ms'
      el.style.pointerEvents = 'auto'
      el.style.cursor = 'pointer'

      // Tooltip al pasar el mouse
      el.addEventListener('mouseover', e => {
        tooltip.textContent = d.nombre
        tooltip.style.opacity = 1
      })

      el.addEventListener('mousemove', e => {
        tooltip.style.left = e.clientX + 10 + 'px'
        tooltip.style.top = e.clientY + 10 + 'px'
      })

      el.addEventListener('mouseout', e => {
        tooltip.style.opacity = 0
      })

      el.addEventListener('click', e => {
        e.stopPropagation()
        openModal({
          id: d.id,
          name: d.nombre,
          lat: d.lat.toFixed(2),
          lng: d.lng.toFixed(2)
        })
        globe.pointOfView(
          { lat: d.lat, lng: d.lng, altitude: 1.5 },
          1500
        )
      })

      return el
    })
    .htmlElementVisibilityModifier((el, isVisible) => {
      el.style.opacity = isVisible ? 1 : 0
    })

  function resizeGlobe() {
    const width = Math.min(window.innerWidth, 711)
    const height = Math.max(460, width)

    container.style.width = `${width}px`
    container.style.height = `${height}px`

    globe.width(width).height(height)
  }

  resizeGlobe()
  window.addEventListener('resize', resizeGlobe)

  globe.pointOfView({ lat: 0, lng: -90, altitude: 1.5 })

  document.querySelectorAll('#globeControls button').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('#globeControls button').forEach(b => {
        b.classList.remove('active')
      })

      btn.classList.add('active')

      const img = btn.dataset.map
      const lat = parseFloat(btn.dataset.lat)
      const lng = parseFloat(btn.dataset.lng)
      toggleMap(img, { lat, lng })
    })
  })

  function toggleMap(img, coords) {
    globe.globeImageUrl(img)
    globe.pointOfView(
      { lat: coords.lat, lng: coords.lng, altitude: 1.5 },
      1500
    )
  }

  function openModal(data) {
    modals.openModal(data.name)
  }
})
