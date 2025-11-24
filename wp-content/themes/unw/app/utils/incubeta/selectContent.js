/**
 * Select Content Tracking
 * Maneja el evento select_content cuando se hace clic en Blog, Eventos o Noticias
 */

/**
 * Envía el evento select_content al dataLayer
 * @param {Object} data - Datos del contenido
 */
function sendSelectContentEvent(data) {
  window.dataLayer = window.dataLayer || []

  const dataLayerEvent = {
    event: 'select_content',
    click_element: data.click_element,
    content_type: data.content_type,
    content_id: data.content_id,
    content_title: data.content_title
  }

  const sendEvent = () => {
    window.dataLayer.push(dataLayerEvent)
    console.log('[Incubeta] ✅ select_content enviado:', dataLayerEvent)
  }

  // Si GTM ya está cargado, enviar inmediatamente
  if (window.google_tag_manager) {
    sendEvent()
    return
  }

  // Si no, esperar a que se cargue (timeout para clicks)
  let attempts = 0
  const maxAttempts = 30 // 3 segundos máximo

  const checkGTM = setInterval(() => {
    attempts++

    if (window.google_tag_manager) {
      clearInterval(checkGTM)
      sendEvent()
    } else if (attempts >= maxAttempts) {
      clearInterval(checkGTM)
      console.warn('[Incubeta] GTM no disponible, enviando select_content de todos modos')
      sendEvent()
    }
  }, 100)
}

/**
 * Inicializa el tracking de select_content para Blog, Eventos y Noticias
 */
export function initSelectContentTracking() {
  // Event delegation para capturar clicks solo en elementos con la clase específica
  document.addEventListener('click', (event) => {
    const target = event.target.closest('.btn-select-content-item-click')

    // Si no es un elemento trackeable, ignorar
    if (!target) return

    // Buscar la card más cercana
    const card = target.closest('.entry-card') || target.closest('.event-card')

    if (!card) return

    // Verificar que tiene los atributos de tracking
    const contentType = card.getAttribute('data-content-type')
    const contentId = card.getAttribute('data-content-id')
    const contentTitle = card.getAttribute('data-content-title')
    const categoryTag = card.getAttribute('data-category-tag') || ''

    if (!contentType || !contentId || !contentTitle) {
      // No tiene los atributos necesarios, skip
      return
    }

    console.log('[Incubeta] Click en contenido:', {
      click_element: categoryTag,
      content_type: contentType,
      content_id: contentId,
      content_title: contentTitle
    })

    // Enviar evento
    sendSelectContentEvent({
      click_element: categoryTag,
      content_type: contentType,
      content_id: contentId,
      content_title: contentTitle
    })
  })

  console.log('[Incubeta] 👆 Tracking de select_content iniciado (Blog, Eventos, Noticias)')
}
