/**
 * Incubeta DataLayer Utilities
 * Funciones genéricas para implementar tracking según especificaciones de Incubeta
 */

import { hashValue } from '../../components/FormCRM/utils'

/**
 * Normaliza el valor de modalidad
 * @param {string} modalidad - Valor de modalidad del formulario
 * @returns {string} - Modalidad normalizada
 */
export function normalizeModalidad(modalidad) {
  if (!modalidad) return 'unknown'
  return modalidad === 'work' ? 'virtual' : modalidad
}

/**
 * Construye el objeto dataLayer para envío de formulario
 * Evento: form_submit - Se dispara cuando el usuario envía sus datos tras haber llenado el formulario
 *
 * @param {Object} formData - Datos del formulario
 * @param {HTMLFormElement} formData.form - Elemento del formulario
 * @param {string} formData.modalidad - Modalidad seleccionada
 * @param {string} formData.carrera - Carrera seleccionada
 * @param {string} formData.campus - Campus seleccionado
 * @param {string} formData.departamento - Departamento seleccionado
 * @returns {Promise<Object>} - Objeto dataLayer con datos hasheados
 */
export async function buildFormSubmitDataLayer(formData) {
  const { form, modalidad, carrera, campus, departamento } = formData

  // Obtener elementos del formulario
  const submitBtn = form.querySelector('[type="submit"]')
  const nameInput = form.querySelector('[name="Name_First"], [name="Name"]')
  const lastNameInput = form.querySelector('[name="Name_Last"]')
  const emailInput = form.querySelector('[name="Email"]')
  const phoneInput = form.querySelector('[name="PhoneNumber_countrycode"]')
  const docInput = form.querySelector('[name="SingleLine"]')

  // Construir objeto base
  const dataLayerEvent = {
    event: 'form_submit',
    form_id: form.id || 'form-general',
    form_name: form.name || 'Form General',
    form_destination: form.action,
    form_submit_text: submitBtn?.textContent.trim() || 'Enviar',
    lead_name: nameInput?.value || '',
    lead_last_name: lastNameInput?.value || '',
    phone_number: phoneInput?.value || '',
    email: emailInput?.value || '',
    document_id: docInput?.value || '',
    modalidad: normalizeModalidad(modalidad),
    carrera: carrera || '',
    campus: campus || '-',
    departamento: departamento || '-'
  }

  // Hashear datos sensibles (SHA256)
  const [hashedName, hashedLastName, hashedPhone, hashedEmail] = await Promise.all([
    hashValue(dataLayerEvent.lead_name),
    hashValue(dataLayerEvent.lead_last_name),
    hashValue(dataLayerEvent.phone_number),
    hashValue(dataLayerEvent.email)
  ])

  // Reemplazar con valores hasheados
  dataLayerEvent.lead_name = hashedName
  dataLayerEvent.lead_last_name = hashedLastName
  dataLayerEvent.phone_number = hashedPhone
  dataLayerEvent.email = hashedEmail

  return dataLayerEvent
}

/**
 * Envía un evento al dataLayer
 * @param {Object} dataLayerEvent - Objeto de evento a enviar
 */
export function pushToDataLayer(dataLayerEvent) {
  if (window.dataLayer && Array.isArray(window.dataLayer)) {
    window.dataLayer.push(dataLayerEvent)
  } else {
    console.warn('dataLayer no está disponible')
  }
}

/**
 * Maneja el envío completo de un formulario con tracking de Incubeta
 * @param {HTMLFormElement} form - Elemento del formulario
 * @param {Object} data - Datos adicionales del formulario
 * @param {Function} callback - Función callback que recibe el dataLayerEvent generado
 * @returns {Promise<Object>} - Objeto dataLayer generado
 */
export async function handleFormSubmitTracking(form, data, callback) {
  try {
    const dataLayerEvent = await buildFormSubmitDataLayer({
      form,
      ...data
    })

    pushToDataLayer(dataLayerEvent)

    // Ejecutar callback si existe
    if (callback && typeof callback === 'function') {
      callback(dataLayerEvent)
    }

    return dataLayerEvent
  } catch (error) {
    console.error('Error en tracking de formulario:', error)
    throw error
  }
}
