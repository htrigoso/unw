/* eslint-disable no-undef */
import { ModalManager } from '../../components/Modal'
import PostSwiperDesktop from '../../components/PostSwiperDesktop'

/* ======================================================
 *  ESPERA HASTA QUE LA LIBRERÍA Globe ESTÉ DISPONIBLE
 * ====================================================== */
function waitForGlobe(callback) {
  if (typeof Globe !== 'undefined') {
    callback()
  } else {
    setTimeout(() => waitForGlobe(callback), 1000)
  }
}
initPostSwiper()
waitForGlobe(() => {
  initGlobeSection()
})

/* ============================
 *  INICIALIZADOR DEL SWIPER
 * ============================ */
function initPostSwiper() {
  PostSwiperDesktop('.highlight-swiper', {
    breakpoints: {
      0: { slidesPerView: 1, spaceBetween: 8 },
      576: { slidesPerView: 1, spaceBetween: 8 },
      1024: { slidesPerView: 1, spaceBetween: 8 },
      1200: { slidesPerView: 1, spaceBetween: 8 }
    }
  })
}

/* ============================
 *  GLOBO INTERACTIVO
 * ============================ */
function initGlobeSection() {
  const section = document.querySelector('.pba-network')
  if (!section) return

  const modals = new ModalManager()
  const { marker, map } = section.dataset
  const countries = window.pbaCountries || []
  const container = document.getElementById('globeViz')
  const tooltip = document.getElementById('tooltip')

  const gData = countries.map((p, i) => ({
    id: i + 1,
    lat: p.lat,
    lng: p.lng,
    nombre: p.name,
    size: 30
  }))

  const globe = createGlobe(container, map, marker, gData, tooltip, modals)
  setupControls(globe)
  setupResize(globe, container)
}

/* ============================
 *  CREAR GLOBO
 * ============================ */
function createGlobe(container, map, marker, gData, tooltip, modals) {
  const globe = new Globe(container)
    .globeImageUrl(map)
    .backgroundColor('rgb(218, 247, 247, 1)')
    .showAtmosphere(false)
    .globeOffset([0, 0])
    .htmlElementsData(gData)
    .htmlElement(d => createMarker(d, marker, tooltip, globe, modals))
    .htmlElementVisibilityModifier((el, isVisible) => {
      el.style.opacity = isVisible ? 1 : 0
    })

  globe.pointOfView({ lat: 0, lng: -90, altitude: 1.5 })
  globe.controls().enableZoom = false

  return globe
}

/* ============================
 *  CREAR MARCADORES CON TOOLTIP
 * ============================ */
function createMarker(d, marker, tooltip, globe, modals) {
  const el = document.createElement('img')
  el.src = marker
  el.style.width = `${d.size}px`
  el.style.transition = 'opacity 250ms'
  el.style.pointerEvents = 'auto'
  el.style.cursor = 'pointer'

  el.addEventListener('mouseover', () => {
    tooltip.textContent = d.nombre
    tooltip.style.opacity = 1
  })

  el.addEventListener('mousemove', e => {
    tooltip.style.left = e.clientX + 10 + 'px'
    tooltip.style.top = e.clientY + 10 + 'px'
  })

  el.addEventListener('mouseout', () => {
    tooltip.style.opacity = 0
  })

  el.addEventListener('click', e => {
    e.stopPropagation()
    openModal(modals, d)
    globe.pointOfView({ lat: d.lat, lng: d.lng, altitude: 1.5 }, 1500)
  })

  return el
}

/* ============================
 *  ABRIR MODAL
 * ============================ */
function openModal(modals, data) {
  modals.openModal(data.nombre)
}

/* ============================
 *  AJUSTE RESPONSIVE DEL GLOBO
 * ============================ */
function setupResize(globe, container) {
  function resizeGlobe() {
    const width = Math.min(window.innerWidth, 711)
    const height = Math.max(460, width)
    container.style.width = `${width}px`
    container.style.height = `${height}px`
    globe.width(width).height(height)
  }

  resizeGlobe()
  window.addEventListener('resize', resizeGlobe)
}

/* ============================
 *  CONTROLES DE MAPA
 * ============================ */
function setupControls(globe) {
  const buttons = document.querySelectorAll('#globeControls button')
  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      buttons.forEach(b => b.classList.remove('active'))
      btn.classList.add('active')

      const img = btn.dataset.map
      const lat = parseFloat(btn.dataset.lat)
      const lng = parseFloat(btn.dataset.lng)
      toggleMap(globe, img, { lat, lng })
    })
  })
}

/* ============================
 *  CAMBIO DE MAPA
 * ============================ */
function toggleMap(globe, img, coords) {
  globe.globeImageUrl(img)
  globe.pointOfView(
    { lat: coords.lat, lng: coords.lng, altitude: 1.5 },
    1500
  )
}
