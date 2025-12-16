/**
 * Select Item Tracking
 * Maneja el evento select_item cuando el usuario hace click en "Ver carrera"
 */

import { withIncubeta } from '../incubeta-utils'

/**
 * Construye el item para select_item
 * @param {HTMLElement} button - Botón clickeado
 * @param {number} index - Índice del item en la lista
 * @returns {Object} Item formateado
 */
function buildSelectItem(button, index) {
  const crmCode = button.getAttribute('data-crm-code') || ''
  const card = button.closest('.program-card')
  const title = card?.querySelector('.program-card--content__title')?.textContent.trim() || ''

  const { listName, itemBrand } = window.unwCareersData || {}

  return {
    item_id: crmCode,
    item_name: title,
    affiliation: '',
    coupon: '',
    discount: 0,
    index: index,
    item_brand: itemBrand || '',
    item_category: '',
    item_category2: '',
    item_category3: '',
    item_category4: '',
    item_category5: '',
    item_list_id: listName || '',
    item_list_name: listName || '',
    item_variant: '',
    location_id: '',
    price: 0,
    quantity: 1
  }
}

/**
 * Envía el evento select_item (espera a GTM si es necesario)
 * @param {HTMLElement} button - Botón clickeado
 * @param {number} index - Índice del item
 */
const sendSelectItemEvent = withIncubeta(function (button, index) {
  const { listName } = window.unwCareersData || {}

  const item = buildSelectItem(button, index)

  const sendEvent = () => {
    // Limpiar objeto ecommerce previo
    window.dataLayer.push({ ecommerce: null })

    // Enviar evento
    const dataLayerEvent = {
      event: 'select_item',
      ecommerce: {
        item_list_id: listName || '',
        item_list_name: listName || '',
        items: [item]
      }
    }

    window.dataLayer.push(dataLayerEvent)
    console.log('[Incubeta] ✅ select_item enviado:', dataLayerEvent)
  }

  // Si GTM ya está cargado, enviar inmediatamente
  if (window.google_tag_manager) {
    sendEvent()
    return
  }

  // Si no, esperar a que se cargue (con timeout)
  let attempts = 0
  const maxAttempts = 30 // 3 segundos máximo

  const checkGTM = setInterval(() => {
    attempts++

    if (window.google_tag_manager) {
      clearInterval(checkGTM)
      sendEvent()
    } else if (attempts >= maxAttempts) {
      clearInterval(checkGTM)
      console.warn('[Incubeta] GTM no disponible, enviando select_item de todos modos')
      sendEvent()
    }
  }, 100)
})

/**
 * Inicializa el tracking de clicks en carreras
 */
export const initSelectItemTracking = withIncubeta(function () {
  // Inicializar dataLayer si no existe
  window.dataLayer = window.dataLayer || []

  // Event delegation en el documento
  document.addEventListener('click', (event) => {
    const button = event.target.closest('.btn-careers-select-item')

    if (!button) return

    // NO ejecutar si es del home (tiene data-is-home="1")
    if (button.getAttribute('data-is-home') === '1') {
      console.log('[Incubeta] Skip select_item - es del home (data-is-home="1")')
      return
    }

    // Obtener índice del botón en la lista
    const allButtons = document.querySelectorAll('.btn-careers-select-item')
    const index = Array.from(allButtons).indexOf(button)

    // Enviar evento
    sendSelectItemEvent(button, index)
  })
})

/**
 * Envía select_item automáticamente para páginas single de carreras
 * @param {Object} careerData - Datos de la carrera
 * @param {string} careerData.id - Código CRM
 * @param {string} careerData.title - Título de la carrera
 * @param {string} careerData.listName - Nombre de la lista
 * @param {string} careerData.itemBrand - Marca del item
 */
export const trackCareerDetail = withIncubeta(function (careerData) {
  // Inicializar dataLayer si no existe
  window.dataLayer = window.dataLayer || []

  const { id, title, listName, itemBrand } = careerData

  const item = {
    item_id: id,
    item_name: title,
    affiliation: '',
    coupon: '',
    discount: 0,
    index: 0,
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
  }

  const sendEvent = () => {
    // Limpiar objeto ecommerce previo
    window.dataLayer.push({ ecommerce: null })

    // Enviar evento
    const dataLayerEvent = {
      event: 'select_item',
      ecommerce: {
        item_list_id: listName,
        item_list_name: listName,
        items: [item]
      }
    }

    window.dataLayer.push(dataLayerEvent)
    console.log('[Incubeta] ✅ select_item (detail) enviado:', dataLayerEvent)
  }

  // Si GTM ya está cargado, enviar inmediatamente
  if (window.google_tag_manager) {
    sendEvent()
    return
  }

  // Si no, esperar a que se cargue (con timeout)
  let attempts = 0
  const maxAttempts = 50 // 5 segundos máximo

  const checkGTM = setInterval(() => {
    attempts++

    if (window.google_tag_manager) {
      clearInterval(checkGTM)
      sendEvent()
    } else if (attempts >= maxAttempts) {
      clearInterval(checkGTM)
      console.warn('[Incubeta] GTM no disponible, enviando select_item (detail) de todos modos')
      sendEvent()
    }
  }, 100)
})
