/**
 * View Content Tracking
 * Maneja el evento view_content cuando el usuario entra a leer un contenido
 */

/**
 * Envía el evento view_content al dataLayer
 * @param {Object} data - Datos del contenido
 */
function sendViewContentEvent(data) {
  window.dataLayer = window.dataLayer || []

  const dataLayerEvent = {
    event: 'view_content',
    content_type: data.content_type,
    content_id: data.content_id,
    content_title: data.content_title
  }

  const sendEvent = () => {
    window.dataLayer.push(dataLayerEvent)
    console.log('[Incubeta] ✅ view_content enviado:', dataLayerEvent)
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
      console.warn('[Incubeta] GTM no disponible después de 5s, enviando view_content de todos modos')
      sendEvent()
    }
  }, 100)
}

/**
 * Inicializa el tracking de view_content
 * Lee los datos del contenido desde window.unwContentData
 */
export function initViewContentTracking() {
  // Verificar si existen los datos del contenido
  if (!window.unwContentData) {
    console.log('[Incubeta] No hay datos de contenido (window.unwContentData), skip view_content')
    return
  }

  const { content_type: contentType, content_id: contentId, content_title: contentTitle } = window.unwContentData

  if (!contentType || !contentId || !contentTitle) {
    console.warn('[Incubeta] Datos de contenido incompletos:', window.unwContentData)
    return
  }

  console.log('[Incubeta] Enviando view_content para:', contentType, contentTitle)

  // Enviar evento
  sendViewContentEvent({
    content_type: contentType,
    content_id: contentId,
    content_title: contentTitle
  })
}
