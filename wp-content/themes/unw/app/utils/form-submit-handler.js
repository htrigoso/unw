/**
 * Utilidades reutilizables para manejo de envío de formularios
 * Puede ser usado en cualquier componente que necesite gestionar formularios
 */

/**
 * Deshabilita el botón de envío y cambia su texto
 * @param {HTMLElement} form - El formulario
 * @param {string} selector - Selector del botón (default: '#button-send')
 * @param {string} loadingText - Texto mientras carga (default: 'Enviando...')
 * @returns {Object} { button, originalText }
 */
export function disableSubmitButton(form, selector = '#button-send', loadingText = 'Enviando...') {
  const button = form.querySelector(selector)
  const originalText = button?.innerText || 'Enviar'

  if (button) {
    button.disabled = true
    button.dataset.originalText = originalText
    button.innerText = loadingText
  }

  return { button, originalText }
}

/**
 * Restaura el botón de envío a su estado original
 * @param {HTMLElement} button - El botón a restaurar
 * @param {string} originalText - El texto original del botón
 */
export function restoreSubmitButton(button, originalText) {
  if (button) {
    button.disabled = false
    button.innerText = originalText
  }
}

/**
 * Envía eventos de tracking a GTM
 * @param {HTMLElement} form - El formulario
 * @param {Object} customData - Datos adicionales para el evento
 */
export function pushTrackingEvent(form, customData = {}) {
  console.log('mela', form?.id || null, form?.dataset?.formType || null)

  if (window.dataLayer && Array.isArray(window.dataLayer)) {
    const eventData = {
      event: 'gtm.formSubmit',
      formId: form?.id || null,
      formType: form?.dataset?.formType || form?.id || null,
      ...customData
    }

    // window.dataLayer.push(eventData)

    console.log('📊 Evento GTM enviado:', eventData)
  } else {
    console.warn('⚠️ dataLayer no está definido')
  }
}

/**
 * Valida que el formulario tenga la configuración necesaria
 * @param {HTMLElement} form - El formulario a validar
 * @returns {boolean} - true si es válido
 */
export function validateFormConfiguration(form) {
  if (!form) {
    console.error('❌ Error: Formulario no encontrado')
    return false
  }

  if (!form.action) {
    console.error('❌ Error: El formulario no tiene action definido')
    return false
  }

  return true
}

/**
 * Envía el formulario después de un delay
 * @param {HTMLElement} form - El formulario a enviar
 * @param {number} delay - Tiempo de espera en ms (default: 300)
 */
export async function submitFormWithDelay(form, delay = 300) {
  await new Promise(resolve => setTimeout(resolve, delay))
  console.log('🚀 Enviando formulario a:', form.action)
  form.submit()
}

/**
 * Valida los datos del formulario
 * @param {Object} formData - Datos del formulario
 * @returns {boolean} - true si es válido
 */
export function validateFormData(formData) {
  if (!formData || Object.keys(formData).length === 0) {
    console.error('❌ Error: No se pudieron obtener los datos del formulario')
    return false
  }
  return true
}

/**
 * Handler completo y reutilizable para envío de formularios
 * @param {Object} options - Opciones de configuración
 * @param {HTMLElement} options.form - El formulario
 * @param {Object} options.formData - Datos del formulario
 * @param {Function} options.trackingHandler - Función de tracking personalizada (opcional)
 * @param {number} options.delay - Delay antes de enviar (default: 300ms)
 * @param {Object} options.customTrackingData - Datos adicionales para tracking
 * @returns {Promise<void>}
 */
export async function handleFormSubmitFlow({
  form,
  formData,
  trackingHandler = null,
  delay = 300,
  customTrackingData = {}
}) {
  // Validar configuración
  if (!validateFormConfiguration(form)) {
    throw new Error('Configuración de formulario inválida')
  }

  // Validar datos
  if (!validateFormData(formData)) {
    throw new Error('Datos de formulario inválidos')
  }

  // Deshabilitar botón
  const { button, originalText } = disableSubmitButton(form)

  try {
    // Tracking GTM
    pushTrackingEvent(form, customTrackingData)

    // Tracking personalizado (si existe)
    if (trackingHandler && typeof trackingHandler === 'function') {
      await trackingHandler(form, formData)
    }

    // Enviar formulario con delay
    await submitFormWithDelay(form, delay)
  } catch (error) {
    // Restaurar estado del botón
    restoreSubmitButton(button, originalText)
    throw error
  }
}

/**
 * Previene el envío duplicado de formularios
 * @param {Object} state - Objeto de estado que contiene isSubmitting
 * @param {string} warningMessage - Mensaje de advertencia personalizado
 * @returns {boolean} - true si ya está enviando
 */
export function preventDuplicateSubmit(state, warningMessage = '⚠️ Envío ya en proceso') {
  if (state.isSubmitting) {
    console.warn(warningMessage)
    return true
  }
  state.isSubmitting = true
  return false
}

/**
 * Muestra un mensaje de error al usuario
 * @param {string} message - Mensaje a mostrar
 * @param {Error} error - Objeto de error (opcional)
 */
export function showFormError(message, error = null) {
  console.error('❌ Error en formulario:', message, error)
  alert(message)
}
