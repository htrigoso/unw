/**
 * Contact Click Tracking
 * Maneja el evento contact cuando el usuario hace click en opciones de contacto
 */

import { withIncubeta } from '../incubeta-utils'

/**
 * Envía el evento contact al dataLayer
 * @param {Object} data - Datos del contacto
 */
const sendContactEvent = withIncubeta(function (data) {
  window.dataLayer = window.dataLayer || []

  const dataLayerEvent = {
    event: 'contact',
    contact_platform: data.contact_platform,
    contact_type: data.contact_type
  }

  const sendEvent = () => {
    window.dataLayer.push(dataLayerEvent)
    console.log('[Incubeta] ✅ contact enviado:', dataLayerEvent)
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
      console.warn('[Incubeta] GTM no disponible después de 3s, enviando contact de todos modos')
      sendEvent()
    }
  }, 100)
})

/**
 * Inicializa el tracking de contact
 * Detecta clicks en .whatsapp-link, .book-link, .btn-contact
 */
export const initContactClickTracking = withIncubeta(function () {
  document.addEventListener('click', (e) => {
    // Buscar si el click fue en alguna de las clases de contacto
    const target = e.target.closest('.whatsapp-link, .book-link, .btn-contact')

    if (!target) return

    let contactPlatform = ''
    let contactType = ''

    // Obtener desde atributos data-* si existen
    contactPlatform = target.getAttribute('data-contact-platform') || ''
    contactType = target.getAttribute('data-contact-type') || ''

    // Si no hay atributos, inferir según la clase
    if (!contactPlatform && !contactType) {
      if (target.classList.contains('whatsapp-link')) {
        contactPlatform = 'whatsapp'
        contactType = 'widget'
      } else if (target.classList.contains('book-link')) {
        contactPlatform = 'modal'
        contactType = 'dudas'
      } else if (target.classList.contains('btn-contact')) {
        contactPlatform = 'modal'
        contactType = 'agenda'
      }
    }

    if (!contactPlatform || !contactType) {
      console.warn('[Incubeta] No se pudo determinar contact_platform o contact_type')
      return
    }

    console.log('[Incubeta] Click en contacto:', { contactPlatform, contactType })

    sendContactEvent({
      contact_platform: contactPlatform,
      contact_type: contactType
    })
  })

  console.log('[Incubeta] Tracking de contact inicializado')
})
