/**
 * Footer Interaction Tracking
 * Maneja el evento footer cuando el usuario hace click en una opción del footer
 */

import { withIncubeta } from '../incubeta-utils'

/**
 * Envía el evento footer al dataLayer
 * @param {Object} data - Datos del footer
 */
const sendFooterEvent = withIncubeta(function (data) {
  window.dataLayer = window.dataLayer || []

  const dataLayerEvent = {
    event: 'footer',
    footer_option: data.footer_option
  }

  const sendEvent = () => {
    window.dataLayer.push(dataLayerEvent)
    console.log('[Incubeta] ✅ footer enviado:', dataLayerEvent)
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
      console.warn('[Incubeta] GTM no disponible después de 3s, enviando footer de todos modos')
      sendEvent()
    }
  }, 100)
})

/**
 * Inicializa el tracking de footer
 * Detecta clicks en enlaces dentro del footer
 */
export const initFooterClickTracking = withIncubeta(function () {
  document.addEventListener('click', (e) => {
    // Buscar si el click fue dentro del footer
    const footerElement = e.target.closest('.footer')
    if (!footerElement) return

    // Buscar el enlace clickeado
    const link = e.target.closest('a')
    if (!link) return

    // Obtener el texto del enlace como footer_option
    let footerOption = link.textContent.trim()

    // Si no hay texto visible, intentar obtener el aria-label
    if (!footerOption) {
      footerOption = link.getAttribute('aria-label') || ''
    }

    // Si aún no hay texto, intentar obtener el alt de imagen
    if (!footerOption) {
      const img = link.querySelector('img')
      if (img) {
        footerOption = img.getAttribute('alt') || ''
      }
    }

    // Si no se pudo obtener ningún texto identificable, salir
    if (!footerOption) {
      console.log('[Incubeta] No se pudo identificar footer_option')
      return
    }

    console.log('[Incubeta] Click en footer:', footerOption)

    sendFooterEvent({
      footer_option: footerOption
    })
  })

  console.log('[Incubeta] Tracking de footer inicializado')
})
