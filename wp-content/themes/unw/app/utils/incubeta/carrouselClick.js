/**
 * Carrousel Click Tracking
 * Maneja el evento carrousel_click cuando el usuario hace click en un slider
 */

/**
 * Envía el evento carrousel_click al dataLayer
 * @param {Object} data - Datos del click
 */
function sendCarrouselClickEvent(data) {
  window.dataLayer = window.dataLayer || []

  const dataLayerEvent = {
    event: 'carrousel_click',
    link_url: data.link_url,
    link_text: data.link_text,
    slide_name: data.slide_name,
    slide_position: data.slide_position,
    carrousel_id: data.carrousel_id
  }

  const sendEvent = () => {
    window.dataLayer.push(dataLayerEvent)
    console.log('[Incubeta] ✅ carrousel_click enviado:', dataLayerEvent)
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
      console.warn('[Incubeta] GTM no disponible después de 3s, enviando carrousel_click de todos modos')
      sendEvent()
    }
  }, 100)
}

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
 * @param {HTMLElement} slide - El slide
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
 * Obtiene el texto del enlace o elemento clickeado
 * @param {HTMLElement} clickedElement - El elemento clickeado
 * @returns {string} - Texto del enlace
 */
function getLinkText(clickedElement) {
  // Si es un enlace con texto
  if (clickedElement.textContent && clickedElement.textContent.trim()) {
    return clickedElement.textContent.trim()
  }

  // Si tiene un atributo aria-label
  if (clickedElement.getAttribute('aria-label')) {
    return clickedElement.getAttribute('aria-label')
  }

  // Si tiene un title
  if (clickedElement.getAttribute('title')) {
    return clickedElement.getAttribute('title')
  }

  // Si es una imagen, usar el alt
  const img = clickedElement.querySelector('img')
  if (img && img.alt) {
    return img.alt
  }

  // Si el enlace solo tiene una imagen sin alt
  if (img) {
    return 'imagen_sin_descripcion'
  }

  return 'sin_texto'
}

/**
 * Inicializa el tracking de carrousel_click
 * Detecta clicks en enlaces dentro de slides de swipers
 */
export function initCarrouselClickTracking() {
  document.addEventListener('click', (e) => {
    // Buscar si el click fue en un enlace
    const link = e.target.closest('a, button')

    if (!link) return

    // Buscar si el enlace está dentro de un slide de swiper
    const slide = link.closest('.swiper-slide')

    if (!slide) return

    // Buscar el swiper-container
    const swiperContainer = slide.closest('[data-type-component="swiper"]')

    if (!swiperContainer) return

    // Obtener la URL del enlace
    const linkUrl = link.href || link.getAttribute('data-href') || 'sin_url'

    // Obtener el texto del enlace
    const linkText = getLinkText(link)

    // Obtener el nombre del slide
    const slideName = getSlideName(slide)

    // Obtener la posición del slide
    const allSlides = swiperContainer.querySelectorAll('.swiper-slide')
    const slidePosition = String(Array.from(allSlides).indexOf(slide) + 1)

    // Obtener el ID del carrousel
    const carrouselId = generateCarrouselId(swiperContainer)

    console.log('[Incubeta] Click en carrousel:', {
      linkUrl,
      linkText,
      slideName,
      slidePosition,
      carrouselId
    })

    sendCarrouselClickEvent({
      link_url: linkUrl,
      link_text: linkText,
      slide_name: slideName,
      slide_position: slidePosition,
      carrousel_id: carrouselId
    })
  })

  console.log('[Incubeta] Tracking de carrousel_click inicializado')
}
