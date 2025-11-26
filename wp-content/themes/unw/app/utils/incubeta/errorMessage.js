/**
 * Error Message Tracking
 * Maneja el evento error_message cuando se muestra un error de validación
 */

/**
 * Envía el evento error_message al dataLayer (espera a GTM si es necesario)
 * @param {string} errorText - Texto del mensaje de error
 * @param {string} formId - ID del formulario donde ocurrió el error
 */
export function trackErrorMessage(errorText, formId) {
  // Inicializar dataLayer si no existe
  window.dataLayer = window.dataLayer || []

  const dataLayerEvent = {
    event: 'error_message',
    error_message_text: errorText,
    error_message_location: formId
  }

  const sendEvent = () => {
    window.dataLayer.push(dataLayerEvent)
    console.log('[Incubeta] ✅ error_message enviado:', dataLayerEvent)
  }

  // Si GTM ya está cargado, enviar inmediatamente
  if (window.google_tag_manager) {
    sendEvent()
    return
  }

  // Si no, esperar a que se cargue (con timeout corto para errores)
  let attempts = 0
  const maxAttempts = 20 // 2 segundos máximo (más rápido que otros eventos)

  const checkGTM = setInterval(() => {
    attempts++

    if (window.google_tag_manager) {
      clearInterval(checkGTM)
      sendEvent()
    } else if (attempts >= maxAttempts) {
      clearInterval(checkGTM)
      console.warn('[Incubeta] GTM no disponible, enviando error_message de todos modos')
      sendEvent()
    }
  }, 100)
}

/**
 * Traduce mensajes de error de HTML5 al español
 * @param {HTMLInputElement} input - El campo de entrada
 * @returns {string} - Mensaje de error traducido
 */
function getSpanishErrorMessage(input) {
  const validity = input.validity

  if (validity.valueMissing) {
    return 'Por favor, completa este campo'
  }
  if (validity.typeMismatch) {
    if (input.type === 'email') {
      return 'Por favor, ingresa un correo electrónico válido'
    }
    if (input.type === 'url') {
      return 'Por favor, ingresa una URL válida'
    }
    return 'Por favor, ingresa un valor válido'
  }
  if (validity.patternMismatch) {
    return 'Por favor, ajusta el formato solicitado'
  }
  if (validity.tooShort) {
    return `Por favor, ingresa al menos ${input.minLength} caracteres`
  }
  if (validity.tooLong) {
    return `Por favor, ingresa máximo ${input.maxLength} caracteres`
  }
  if (validity.rangeUnderflow) {
    return `Por favor, ingresa un valor mayor o igual a ${input.min}`
  }
  if (validity.rangeOverflow) {
    return `Por favor, ingresa un valor menor o igual a ${input.max}`
  }
  if (validity.stepMismatch) {
    return 'Por favor, ingresa un valor válido'
  }
  if (validity.badInput) {
    return 'Por favor, ingresa un valor válido'
  }

  // Fallback al mensaje original si no se identifica el tipo
  return input.validationMessage || 'Error de validación'
}

/**
 * Observa errores de validación HTML5 en formularios
 * @param {HTMLFormElement} form - Formulario a observar
 */
export function observeFormErrors(form) {
  if (!form) return

  const formId = form.id || 'unknown-form'
  let firstErrorSent = false

  // Capturar errores de validación HTML5 (invalid event)
  // Solo enviar el PRIMER error que ve el usuario (el navegador solo muestra uno a la vez)
  form.addEventListener('invalid', (event) => {
    const input = event.target
    const fieldName = input.name || input.id || input.type

    // Obtener mensaje en español
    const errorMessage = getSpanishErrorMessage(input)

    // Cambiar el mensaje personalizado del navegador
    input.setCustomValidity(errorMessage)

    // Limpiar el mensaje personalizado después de que el usuario corrija
    input.addEventListener('input', function clearCustomMessage() {
      input.setCustomValidity('')
      input.removeEventListener('input', clearCustomMessage)
    }, { once: true })

    // Solo enviar el tracking del primer error
    if (!firstErrorSent) {
      console.log(`[Error Message] Primer error visible - Campo: ${fieldName}, Error: ${errorMessage}`)
      trackErrorMessage(errorMessage, formId)
      firstErrorSent = true

      // Reset después de un momento para el próximo intento de submit
      setTimeout(() => {
        firstErrorSent = false
      }, 100)
    }
  }, true) // useCapture = true para capturar en fase de captura

  // Observar cuando se muestran mensajes de error personalizados
  const errorElements = form.querySelectorAll('.error-message, .form-error, [role="alert"]')

  errorElements.forEach((errorElement) => {
    // Usar MutationObserver para detectar cuando aparece el error
    const observer = new MutationObserver((mutations) => {
      mutations.forEach((mutation) => {
        if (mutation.type === 'childList' || mutation.type === 'characterData') {
          const errorText = errorElement.textContent.trim()

          if (errorText && errorElement.offsetParent !== null) { // Visible
            trackErrorMessage(errorText, formId)
          }
        }
      })
    })

    observer.observe(errorElement, {
      childList: true,
      characterData: true,
      subtree: true
    })
  })
}

/**
 * Inicializa el tracking de errores para todos los formularios
 */
export function initErrorMessageTracking() {
  // Observar formularios Zoho
  const zohoForms = document.querySelectorAll('[data-form="zoho"]')
  zohoForms.forEach(form => observeFormErrors(form))

  // Observar formularios CRM
  const crmForms = document.querySelectorAll('.form-crm')
  crmForms.forEach(form => observeFormErrors(form))

  // Observar cuando se agregan nuevos formularios dinámicamente
  const bodyObserver = new MutationObserver((mutations) => {
    mutations.forEach((mutation) => {
      mutation.addedNodes.forEach((node) => {
        if (node.nodeType === 1) { // Element node
          if (node.matches('[data-form="zoho"], .form-crm')) {
            observeFormErrors(node)
          }

          // Buscar formularios dentro del nodo agregado
          const forms = node.querySelectorAll('[data-form="zoho"], .form-crm')
          forms.forEach(form => observeFormErrors(form))
        }
      })
    })
  })

  bodyObserver.observe(document.body, {
    childList: true,
    subtree: true
  })
}
