/**
 * Select Event Tracking
 * Maneja el evento select_event cuando el usuario hace click en un evento del home
 */

/**
 * Envía el evento select_event al dataLayer
 * @param {Object} data - Datos del evento
 */
function sendSelectEventEvent(data) {
  window.dataLayer = window.dataLayer || []

  const dataLayerEvent = {
    event: 'select_event',
    content_type: 'Event',
    content_id: data.content_id,
    content_title: data.content_title
  }

  const sendEvent = () => {
    window.dataLayer.push(dataLayerEvent)
    console.log('[Incubeta] ✅ select_event enviado:', dataLayerEvent)
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
      console.warn('[Incubeta] GTM no disponible después de 3s, enviando select_event de todos modos')
      sendEvent()
    }
  }, 100)
}

/**
 * Inicializa el tracking de select_event
 * Detecta clicks en eventos del home
 */
export function initSelectEventTracking() {
  document.addEventListener('click', (e) => {
    const target = e.target.closest('.btn-select-content-item-click')

    if (!target) return

    // Solo disparar si es en el home (data-is-home="1")
    const isHome = target.getAttribute('data-is-home')
    if (isHome !== '1') return

    // Obtener el contenedor del evento (article.event-card)
    const eventCard = target.closest('[data-content-type][data-content-id][data-content-title]')

    if (!eventCard) {
      console.warn('[Incubeta] No se encontró el contenedor del evento con data attributes')
      return
    }

    const contentType = eventCard.getAttribute('data-content-type')
    const contentId = eventCard.getAttribute('data-content-id')
    const contentTitle = eventCard.getAttribute('data-content-title')

    // Validar que sea un evento
    if (contentType !== 'Evento') {
      console.log('[Incubeta] No es un evento, skip select_event')
      return
    }

    if (!contentId || !contentTitle) {
      console.warn('[Incubeta] Faltan datos del evento:', { contentId, contentTitle })
      return
    }

    console.log('[Incubeta] Evento clickeado en home:', contentTitle)

    sendSelectEventEvent({
      content_id: contentId,
      content_title: contentTitle
    })
  })

  console.log('[Incubeta] Tracking de select_event inicializado (solo home)')
}
