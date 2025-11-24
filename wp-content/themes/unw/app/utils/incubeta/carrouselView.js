/**
 * Carrousel View Tracking
 * Maneja el evento carrousel_view cuando el usuario visualiza un swiper en pantalla
 */

/**
 * Envía el evento carrousel_view al dataLayer
 * @param {Object} data - Datos del carrousel
 */
function sendCarrouselViewEvent(data) {
  window.dataLayer = window.dataLayer || []

  const dataLayerEvent = {
    event: 'carrousel_view',
    carrousel_id: data.carrousel_id
  }

  const sendEvent = () => {
    window.dataLayer.push(dataLayerEvent)
    console.log('[Incubeta] ✅ carrousel_view enviado:', dataLayerEvent)
  }

  // Si GTM ya está cargado, enviar inmediatamente
  if (window.google_tag_manager) {
    sendEvent()
    return
  }

  // Si no, esperar a que se cargue
  let attempts = 0
  const maxAttempts = 50 // 5 segundos máximo

  const checkGTM = setInterval(() => {
    attempts++

    if (window.google_tag_manager) {
      clearInterval(checkGTM)
      sendEvent()
    } else if (attempts >= maxAttempts) {
      clearInterval(checkGTM)
      console.warn('[Incubeta] GTM no disponible después de 5s, enviando carrousel_view de todos modos')
      sendEvent()
    }
  }, 100)
}

/**
 * Genera un ID único para el carrousel basado en su posición y contexto
 * @param {HTMLElement} element - El elemento swiper
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
 * Inicializa el tracking de carrousel_view
 * Usa IntersectionObserver para detectar cuando los swipers son visibles
 */
export function initCarrouselViewTracking() {
  const swipers = document.querySelectorAll('[data-type-component="swiper"]')

  if (swipers.length === 0) {
    console.log('[Incubeta] No se encontraron swipers, skip carrousel_view')
    return
  }

  const trackedSwipers = new Set()

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        // Cuando el swiper es visible y aún no se ha rastreado
        if (entry.isIntersecting && !trackedSwipers.has(entry.target)) {
          const carrouselId = generateCarrouselId(entry.target)

          console.log('[Incubeta] Swiper visible, enviando carrousel_view:', carrouselId)

          sendCarrouselViewEvent({
            carrousel_id: carrouselId
          })

          trackedSwipers.add(entry.target)
          // Dejar de observar este swiper específico
          observer.unobserve(entry.target)
        }
      })
    },
    {
      threshold: 0.2 // Se dispara cuando el 20% del swiper es visible
    }
  )

  swipers.forEach((swiper) => {
    observer.observe(swiper)
  })

  console.log(`[Incubeta] Observando ${swipers.length} swipers para carrousel_view`)
}
