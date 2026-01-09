/**
 * View Item List Tracking
 * Maneja el evento view_item_list para listados de carreras
 * Espera a que GTM esté disponible antes de enviar
 */

import { withIncubeta } from '../incubeta-utils'

/**
 * Construye y envía el evento view_item_list
 * @param {Object} careersData - Datos de carreras desde PHP
 * @param {Array} careersData.careers - Array de carreras
 * @param {string} careersData.listName - Nombre de la lista
 * @param {string} careersData.itemBrand - Marca del item
 */
const sendViewItemListEvent = withIncubeta(function (careersData) {
  const { careers, listName, itemBrand } = careersData

  if (!careers || careers.length === 0) {
    console.warn('[Incubeta] No hay carreras para trackear en view_item_list')
    return
  }

  // Construir items
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

  // Limpiar objeto ecommerce previo
  window.dataLayer.push({ ecommerce: null })

  // Enviar evento
  const dataLayerEvent = {
    event: 'view_item_list',
    ecommerce: {
      item_list_id: listName,
      item_list_name: listName,
      items: items
    }
  }
  window.dataLayer.push(dataLayerEvent)
  console.log('[Incubeta 22] ✅ view_item_list enviado:', dataLayerEvent)
})

/**
 * Detecta cuando GTM está disponible y envía el evento
 * @param {Object} careersData - Datos de carreras
 */
const waitForGTM = withIncubeta(function (careersData) {
  // Si GTM ya está cargado, enviar inmediatamente
  if (window.google_tag_manager) {
    sendViewItemListEvent(careersData)
    return
  }

  // Si no, esperar a que se cargue
  let attempts = 0
  const maxAttempts = 50 // 5 segundos máximo (50 * 100ms)

  const checkGTM = setInterval(() => {
    attempts++

    if (window.google_tag_manager) {
      clearInterval(checkGTM)
      sendViewItemListEvent(careersData)
    } else if (attempts >= maxAttempts) {
      clearInterval(checkGTM)
      sendViewItemListEvent(careersData)
    }
  }, 100)
})

/**
 * Inicializa el tracking de view_item_list
 * Busca datos en window.unwCareersData y espera a GTM
 */
export const initViewItemListTracking = withIncubeta(function () {
  // Inicializar dataLayer si no existe
  window.dataLayer = window.dataLayer || []

  // Buscar datos de carreras
  if (!window.unwCareersData) {
    return
  }

  // Iniciar detección de GTM
  waitForGTM(window.unwCareersData)
})
