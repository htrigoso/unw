/**
 * View Event List Tracking
 * Maneja el evento view_event_list cuando el usuario visualiza la sección de eventos destacados en el home
 */

/**
 * Envía el evento view_event_list al dataLayer
 */
function sendViewEventListEvent() {
  window.dataLayer = window.dataLayer || []

  const dataLayerEvent = {
    event: 'view_event_list',
    content_type: 'Event'
  }

  const sendEvent = () => {
    window.dataLayer.push(dataLayerEvent)
    console.log('[Incubeta] ✅ view_event_list enviado:', dataLayerEvent)
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
      console.warn('[Incubeta] GTM no disponible después de 5s, enviando view_event_list de todos modos')
      sendEvent()
    }
  }, 100)
}

/**
 * Inicializa el tracking de view_event_list
 * Usa IntersectionObserver para detectar cuando la sección de eventos destacados es visible
 */
export function initViewEventListTracking() {
  // Solo ejecutar en el home
  if (!document.body.classList.contains('home')) {
    console.log('[Incubeta] No es el home, skip view_event_list')
    return
  }

  const featuredEventsSection = document.querySelector('.featured-events')

  if (!featuredEventsSection) {
    console.log('[Incubeta] No se encontró la sección .featured-events, skip view_event_list')
    return
  }

  let eventSent = false

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        // Cuando la sección es visible y aún no se ha enviado el evento
        if (entry.isIntersecting && !eventSent) {
          console.log('[Incubeta] Sección de eventos destacados visible, enviando view_event_list')
          sendViewEventListEvent()
          eventSent = true
          // Dejar de observar después de enviar el evento
          observer.disconnect()
        }
      })
    },
    {
      threshold: 0.2 // Se dispara cuando el 20% de la sección es visible
    }
  )

  observer.observe(featuredEventsSection)
  console.log('[Incubeta] Observando sección de eventos destacados para view_event_list')
}
