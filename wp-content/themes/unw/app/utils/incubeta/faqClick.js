/**
 * FAQ Click Tracking
 * Maneja el evento faq cuando el usuario hace click en una pregunta frecuente
 */

import { withIncubeta } from '../incubeta-utils'

/**
 * Envía el evento faq al dataLayer
 * @param {Object} data - Datos del FAQ
 */
const sendFaqEvent = withIncubeta(function (data) {
  window.dataLayer = window.dataLayer || []

  const dataLayerEvent = {
    event: 'faq',
    question: data.question,
    position: data.position,
    content_title: data.content_title
  }

  const sendEvent = () => {
    window.dataLayer.push(dataLayerEvent)
    console.log('[Incubeta] ✅ faq enviado:', dataLayerEvent)
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
      console.warn('[Incubeta] GTM no disponible después de 3s, enviando faq de todos modos')
      sendEvent()
    }
  }, 100)
})

/**
 * Inicializa el tracking de faq
 * Detecta clicks en preguntas del accordion (ambos tipos: PHP y JS component)
 */
export const initFaqClickTracking = withIncubeta(function () {
  document.addEventListener('click', (e) => {
    let question = null
    let position = null
    let accordionElement = null

    // Tipo 1: Accordion PHP (.trigger_acordeon)
    const triggerPHP = e.target.closest('.trigger_acordeon')
    if (triggerPHP) {
      accordionElement = triggerPHP.closest('.acordeon')
      if (accordionElement) {
        // Obtener el título de la pregunta (h4 dentro del trigger)
        const h4Element = triggerPHP.querySelector('h4')
        if (h4Element) {
          question = h4Element.textContent.trim()
        }

        // Calcular la posición del acordeón (1-indexed)
        const allAccordions = document.querySelectorAll('.acordeon')
        position = Array.from(allAccordions).indexOf(accordionElement) + 1
      }
    }

    // Tipo 2: Accordion JS Component (.accordion-header)
    const headerJS = e.target.closest('.accordion-header')
    if (headerJS && !question) {
      accordionElement = headerJS.closest('.accordion-item')
      if (accordionElement) {
        // Obtener el título de la pregunta desde el header
        question = headerJS.textContent.trim()

        // Calcular la posición del acordeón (1-indexed)
        const allAccordions = document.querySelectorAll('.accordion-item')
        position = Array.from(allAccordions).indexOf(accordionElement) + 1
      }
    }

    // Si no se encontró ningún accordion, salir
    if (!question || !position || !accordionElement) return

    // Obtener el título de la página como content_title
    const contentTitle = document.title

    console.log('[Incubeta] Click en FAQ:', { question, position, contentTitle })

    sendFaqEvent({
      question: question,
      position: String(position),
      content_title: contentTitle
    })
  })

  console.log('[Incubeta] Tracking de faq inicializado (PHP + JS Component)')
})
