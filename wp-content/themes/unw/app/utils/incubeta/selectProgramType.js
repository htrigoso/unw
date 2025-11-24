/**
 * Select Program Type Tracking
 * Maneja el evento select_program_type cuando se hace clic en un tipo de programa en el home
 */

/**
 * Construye el objeto de datos para select_program_type
 * @param {HTMLElement} button - El botón clickeado
 * @returns {Object} - Datos del programa
 */
function buildSelectProgramType(button) {
  const contentType = button.getAttribute('data-content-type') || ''
  const contentId = button.getAttribute('data-content-id') || ''

  return {
    content_type: contentType,
    content_id: contentId
  }
}

/**
 * Envía el evento select_program_type al dataLayer
 * @param {Object} data - Datos del programa
 */
function sendSelectProgramTypeEvent(data) {
  window.dataLayer = window.dataLayer || []

  const dataLayerEvent = {
    event: 'select_program_type',
    content_type: data.content_type,
    content_id: data.content_id
  }

  const sendEvent = () => {
    window.dataLayer.push(dataLayerEvent)
    console.log('[Incubeta] ✅ select_program_type enviado:', dataLayerEvent)
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
      console.warn('[Incubeta] GTM no disponible, enviando select_program_type de todos modos')
      sendEvent()
    }
  }, 100)
}

/**
 * Inicializa el tracking de select_program_type
 * Solo se ejecuta para botones con data-is-home="1"
 */
export function initSelectProgramTypeTracking() {
  // Event delegation para capturar clicks en los botones del home
  document.addEventListener('click', (event) => {
    const button = event.target.closest('.btn-careers-select-item')

    // Verificar que es un botón y que tiene el flag de home
    if (button && button.getAttribute('data-is-home') === '1') {
      const programData = buildSelectProgramType(button)

      console.log('[Incubeta] Click en programa del home:', programData)
      sendSelectProgramTypeEvent(programData)
    }
  })

  console.log('[Incubeta] 👆 Tracking de select_program_type iniciado (solo home)')
}
