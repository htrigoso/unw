/**
 * Incubeta DataLayer Utilities
 * Funciones genéricas para implementar tracking según especificaciones de Incubeta
 *
 * Control: ENABLE_INCUBETA en .env (true/false)
 */

import { hashValue } from '../../components/FormCRM/utils'
import { withIncubeta } from '../incubeta-utils'

/**
 * Obtiene los datos del formulario de manera estandarizada
 * @param {HTMLFormElement} form - Elemento del formulario
 * @returns {Object} - Objeto con todos los elementos del formulario
 */
export function getFormData(form) {
  const checked = form.querySelector('input[name="form_mixto"]:checked')
  const careerSelect = form.querySelector('#careerSelect')
  const selectedOption = careerSelect?.options[careerSelect.selectedIndex]
  const campusSelect = form.querySelector('#campusSelect')
  const campusOption = campusSelect?.options[campusSelect.selectedIndex]
  const departamentSelect = form.querySelector('#departament')
  const departamentOption = departamentSelect?.options[departamentSelect.selectedIndex]

  return {
    checked,
    careerSelect,
    selectedOption,
    campusSelect,
    campusOption,
    departamentSelect,
    departamentOption,
    modalidad: checked?.value,
    carrera: selectedOption?.textContent.trim(),
    campus: campusOption?.textContent.trim(),
    departamento: departamentOption?.textContent.trim()
  }
}

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
export const pushToDataLayer = withIncubeta(function (dataLayerEvent) {
  if (window.dataLayer && Array.isArray(window.dataLayer)) {
    window.dataLayer.push(dataLayerEvent)
  } else {
    console.warn('dataLayer no está disponible')
  }
})

/**
 * Maneja el envío completo de un formulario con tracking de Incubeta
 * @param {HTMLFormElement} form - Elemento del formulario
 * @param {Object} data - Datos adicionales del formulario
 * @param {Function} callback - Función callback que recibe el dataLayerEvent generado
 * @returns {Promise<Object>} - Objeto dataLayer generado
 */
export const handleFormSubmitTracking = withIncubeta(async function (form, data, callback) {
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
})

/**
 * Construye el evento view_item_list para listado de carreras
 * Evento: view_item_list - Se dispara cuando el usuario ve un listado de carreras
 *
 * @param {Array} careers - Array de carreras (posts de WordPress)
 * @param {string} listName - Nombre de la lista (ej: 'carreras_a_distancia', 'carreras_pregrado')
 * @param {string} itemBrand - Marca del item (ej: 'Carrera a distancia', 'Carrera presencial')
 * @returns {Object} - Objeto dataLayer para view_item_list
 */
export function buildViewItemListDataLayer(careers, listName, itemBrand) {
  const items = careers.map((career, index) => ({
    item_id: String(career.ID),
    item_name: career.post_title,
    affiliation: '',
    coupon: '',
    discount: 0,
    index: index,
    item_brand: itemBrand,
    item_category: '',
    item_category2: '',
    item_category3: '',
    item_category4: '',
    item_category5: '',
    item_list_id: listName,
    item_list_name: listName,
    item_variant: '',
    location_id: '',
    price: 0,
    quantity: 1
  }))

  return {
    event: 'view_item_list',
    ecommerce: {
      item_list_id: listName,
      item_list_name: listName,
      items: items
    }
  }
}

/**
 * Envía el evento view_item_list al dataLayer
 * @param {Array} careers - Array de carreras
 * @param {string} listName - Nombre de la lista
 * @param {string} itemBrand - Marca del item
 */
export const trackViewItemList = withIncubeta(function (careers, listName, itemBrand) {
  if (!careers || careers.length === 0) {
    console.warn('No hay carreras para trackear en view_item_list')
    return
  }

  // Limpiar objeto ecommerce previo
  pushToDataLayer({ ecommerce: null })

  // Enviar evento
  const dataLayerEvent = buildViewItemListDataLayer(careers, listName, itemBrand)
  pushToDataLayer(dataLayerEvent)

  console.log('✅ view_item_list enviado:', dataLayerEvent)
})
