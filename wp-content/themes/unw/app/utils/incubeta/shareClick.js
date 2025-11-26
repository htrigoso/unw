/**
 * Share Click Tracking
 * Maneja el evento ev_share cuando el usuario hace click en compartir contenido
 */

/**
 * Envía el evento ev_share al dataLayer
 * @param {Object} data - Datos del share
 */
function sendShareEvent(data) {
  window.dataLayer = window.dataLayer || []

  const dataLayerEvent = {
    event: 'ev_share',
    method: data.method,
    contact_type: data.contact_type,
    contact_title: data.contact_title
  }

  const sendEvent = () => {
    window.dataLayer.push(dataLayerEvent)
    console.log('[Incubeta] ✅ ev_share enviado:', dataLayerEvent)
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
      console.warn('[Incubeta] GTM no disponible después de 3s, enviando ev_share de todos modos')
      sendEvent()
    }
  }, 100)
}

/**
 * Inicializa el tracking de share
 * Detecta clicks en .btn-link-social
 */
export function initShareClickTracking() {
  document.addEventListener('click', (e) => {
    // Buscar si el click fue en un botón de compartir
    const target = e.target.closest('.btn-link-social')

    if (!target) return

    // Obtener los datos desde los atributos data-*
    const method = target.getAttribute('data-share-method')
    const contactType = target.getAttribute('data-share-type')
    const contactTitle = target.getAttribute('data-share-title')

    if (!method || !contactType || !contactTitle) {
      console.warn('[Incubeta] Faltan datos de share:', { method, contactType, contactTitle })
      return
    }

    console.log('[Incubeta] Click en share:', { method, contactType, contactTitle })

    sendShareEvent({
      method: method,
      contact_type: contactType,
      contact_title: contactTitle
    })
  })

  console.log('[Incubeta] Tracking de ev_share inicializado')
}
