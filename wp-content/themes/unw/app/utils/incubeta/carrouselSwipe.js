/**
 * Carrousel Swipe Tracking
 * Maneja el evento carrousel_swipe cuando el usuario cambia de slider
 */

import { withIncubeta } from '../incubeta-utils'

/**
 * Envía el evento carrousel_swipe al dataLayer
 * @param {Object} data - Datos del swipe
 */
const sendCarrouselSwipeEvent = withIncubeta(function (data) {
  window.dataLayer = window.dataLayer || []

  const dataLayerEvent = {
    event: 'carrousel_swipe',
    direction: data.direction,
    slide_name: data.slide_name,
    slide_position: data.slide_position,
    carrousel_id: data.carrousel_id
  }

  const sendEvent = () => {
    window.dataLayer.push(dataLayerEvent)
    console.log('[Incubeta] ✅ carrousel_swipe enviado:', dataLayerEvent)
  }

  // Si GTM ya está cargado, enviar inmediatamente
  if (window.google_tag_manager) {
    sendEvent()
    return
  }

  // Si no, esperar a que se cargue
  let attempts = 0
  const maxAttempts = 30 // 3 segundos máximo

  const checkGTM = setInterval(() => {
    attempts++

    if (window.google_tag_manager) {
      clearInterval(checkGTM)
      sendEvent()
    } else if (attempts >= maxAttempts) {
      clearInterval(checkGTM)
      console.warn('[Incubeta] GTM no disponible después de 3s, enviando carrousel_swipe de todos modos')
      sendEvent()
    }
  }, 100)
})

/**
 * Genera un ID único para el carrousel (igual lógica que carrouselView.js)
 * @param {HTMLElement} element - El elemento swiper-container
 * @returns {string} - ID único del carrousel
 */
function generateCarrouselId(element) {
  // Intentar obtener un ID desde atributos data
  const dataId = element.getAttribute('data-carrousel-id')
  if (dataId) return dataId

  // Buscar el section padre más cercano
  const section = element.closest('section')
  if (section) {
    // Intentar obtener una clase identificable del section
    const classList = Array.from(section.classList)
    const meaningfulClass = classList.find(cls => !cls.startsWith('swiper') && cls !== 'x-container')

    if (meaningfulClass) {
      return meaningfulClass
    }
  }

  // Buscar clases identificables en el propio elemento
  const elementClasses = Array.from(element.classList)
  const meaningfulElementClass = elementClasses.find(cls =>
    !cls.startsWith('swiper') &&
    cls !== 'is-draggable' &&
    cls !== 'switch-pagination-navigation'
  )

  if (meaningfulElementClass) {
    return meaningfulElementClass
  }

  // Si no hay clases útiles, usar la posición en la página
  const allSwipers = document.querySelectorAll('[data-type-component="swiper"]')
  const index = Array.from(allSwipers).indexOf(element)

  return `swiper-${index + 1}`
}

/**
 * Obtiene el nombre del slide actual
 * @param {HTMLElement} slide - El slide activo
 * @returns {string} - Nombre del slide
 */
function getSlideName(slide) {
  // Intentar obtener desde atributo data-slide-name
  const dataName = slide.getAttribute('data-slide-name')
  if (dataName) return dataName

  // Buscar un título (h1, h2, h3, h4) dentro del slide
  const heading = slide.querySelector('h1, h2, h3, h4, h5, h6')
  if (heading) {
    return heading.textContent.trim().toLowerCase().replace(/\s+/g, '_').substring(0, 50)
  }

  // Buscar un título en img alt
  const img = slide.querySelector('img')
  if (img && img.alt) {
    return img.alt.toLowerCase().replace(/\s+/g, '_').substring(0, 50)
  }

  // Usar clase del slide si existe
  const slideClasses = Array.from(slide.classList)
  const meaningfulClass = slideClasses.find(cls => !cls.startsWith('swiper'))
  if (meaningfulClass) {
    return meaningfulClass
  }

  return 'slide_sin_nombre'
}

/**
 * Inicializa el tracking de carrousel_swipe
 * Detecta cuando el slider cambia de slide (por click, arrastre, autoplay, etc.)
 */
export const initCarrouselSwipeTracking = withIncubeta(function () {
  // Esperar a que los swipers se inicialicen
  const checkSwipers = setInterval(() => {
    const swipers = document.querySelectorAll('[data-type-component="swiper"]')

    if (swipers.length === 0) {
      return
    }

    let initialized = false

    swipers.forEach((swiperContainer) => {
      // Verificar si el swiper ya tiene instancia de Swiper inicializada
      if (swiperContainer.swiper) {
        initialized = true

        // Escuchar el evento slideChange de Swiper
        swiperContainer.swiper.on('slideChange', function () {
          const swiper = this

          // Determinar la dirección del cambio
          let direction = 'next'
          if (swiper.activeIndex < swiper.previousIndex) {
            direction = 'prev'
          }

          // Obtener el slide activo
          const activeSlide = swiper.slides[swiper.activeIndex]

          if (!activeSlide) {
            console.warn('[Incubeta] No se pudo encontrar el slide activo')
            return
          }

          // Obtener la posición del slide (1-indexed)
          const slidePosition = String(swiper.activeIndex + 1)

          // Obtener el nombre del slide
          const slideName = getSlideName(activeSlide)

          // Obtener el ID del carrousel
          const carrouselId = generateCarrouselId(swiperContainer)

          console.log('[Incubeta] Cambio de slide detectado:', {
            direction,
            slideName,
            slidePosition,
            carrouselId
          })

          sendCarrouselSwipeEvent({
            direction: direction,
            slide_name: slideName,
            slide_position: slidePosition,
            carrousel_id: carrouselId
          })
        })
      }
    })

    // Si al menos un swiper está inicializado, detener el intervalo
    if (initialized) {
      clearInterval(checkSwipers)
      console.log('[Incubeta] Tracking de carrousel_swipe inicializado')
    }
  }, 500) // Revisar cada 500ms hasta que los swipers estén listos

  // Timeout de seguridad para detener el intervalo después de 10 segundos
  setTimeout(() => {
    clearInterval(checkSwipers)
  }, 10000)
})
