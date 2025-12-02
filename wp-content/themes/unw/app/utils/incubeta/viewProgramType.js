/**
 * View Program Type Tracking
 * Maneja el evento view_program_type cuando se muestra la sección de programas en el home
 */

/**
 * Envía el evento view_program_type al dataLayer
 */
function sendViewProgramTypeEvent() {
  window.dataLayer = window.dataLayer || []

  const dataLayerEvent = {
    event: 'view_program_type'
  }

  window.dataLayer.push(dataLayerEvent)
  console.log('[Incubeta] ✅ view_program_type enviado:', dataLayerEvent)
}

/**
 * Espera a que GTM esté disponible y envía el evento
 * @param {Function} callback - Función a ejecutar cuando GTM esté listo
 */
function waitForGTM(callback) {
  if (window.google_tag_manager) {
    callback()
    return
  }

  let attempts = 0
  const maxAttempts = 50 // 5 segundos máximo

  const checkGTM = setInterval(() => {
    attempts++

    if (window.google_tag_manager) {
      clearInterval(checkGTM)
      callback()
    } else if (attempts >= maxAttempts) {
      clearInterval(checkGTM)
      console.warn('[Incubeta] GTM no disponible después de 5s, enviando view_program_type de todos modos')
      callback()
    }
  }, 100)
}

/**
 * Inicializa el tracking de view_program_type usando MutationObserver
 * Se ejecuta cuando la sección .programs se hace visible en el home
 */
export function initViewProgramTypeTracking() {
  // Verificar que estamos en el home
  const homePage = document.getElementById('home-page')
  if (!homePage) {
    console.log('[Incubeta] No es la página de inicio, skip view_program_type tracking')
    return
  }

  const programsSection = document.querySelector('section.programs')
  if (!programsSection) {
    console.log('[Incubeta] No se encontró section.programs en el home')
    return
  }

  let eventSent = false

  // Crear IntersectionObserver para detectar cuando la sección es visible
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      // Si la sección es visible y aún no enviamos el evento
      if (entry.isIntersecting && !eventSent) {
        console.log('[Incubeta] section.programs visible, enviando view_program_type')
        eventSent = true

        // Esperar a GTM y enviar el evento
        waitForGTM(() => {
          sendViewProgramTypeEvent()
        })

        // Dejar de observar después de enviar
        observer.disconnect()
      }
    })
  }, {
    // Configuración: se considera visible cuando al menos 20% es visible
    threshold: 0.2
  })

  // Comenzar a observar la sección
  observer.observe(programsSection)
  console.log('[Incubeta] 👁️ Observando section.programs para view_program_type')
}
