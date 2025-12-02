/**
 * Begin Event Registration Tracking
 * Maneja el evento begin_event_registration cuando el usuario hace click en "Regístrate aquí"
 * dentro del detalle de un evento
 */

/**
 * Envía el evento begin_event_registration al dataLayer
 * @param {Object} data - Datos del evento
 */
function sendBeginEventRegistrationEvent(data) {
  window.dataLayer = window.dataLayer || []

  const dataLayerEvent = {
    event: 'begin_event_registration',
    content_type: 'Event',
    content_id: data.content_id,
    content_title: data.content_title
  }

  const sendEvent = () => {
    window.dataLayer.push(dataLayerEvent)
    console.log('[Incubeta] ✅ begin_event_registration enviado:', dataLayerEvent)
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
      console.warn('[Incubeta] GTM no disponible después de 3s, enviando begin_event_registration de todos modos')
      sendEvent()
    }
  }, 100)
}

/**
 * Inicializa el tracking de begin_event_registration
 * Detecta clicks en enlaces con la clase .btn-event-registration dentro del contenido del evento
 */
export function initBeginEventRegistrationTracking() {
  document.addEventListener('click', (e) => {
    // Buscar si el click fue en un enlace con la clase especial
    const target = e.target.closest('.btn-event-registration')

    if (!target) return

    // Obtener los datos desde los atributos data-* del enlace
    const contentType = target.getAttribute('data-content_type')
    const contentId = target.getAttribute('data-content_id')
    const contentTitle = target.getAttribute('data-content_title')

    if (!contentType || !contentId || !contentTitle) {
      console.warn('[Incubeta] Faltan datos en el enlace de registro:', {
        contentType,
        contentId,
        contentTitle
      })
      return
    }

    console.log('[Incubeta] Click en registro de evento:', contentTitle)

    sendBeginEventRegistrationEvent({
      content_id: contentId,
      content_title: contentTitle
    })
  })

  console.log('[Incubeta] Tracking de begin_event_registration inicializado')
}
