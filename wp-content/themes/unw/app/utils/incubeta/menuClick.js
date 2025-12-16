/**
 * Menu Interaction Tracking
 * Maneja el evento ev_menu cuando el usuario hace click en el menú
 */

import { withIncubeta } from '../incubeta-utils'

/**
 * Envía el evento ev_menu al dataLayer
 * @param {Object} data - Datos del menú
 * @param {string} data.primary_menu - Primer nivel del menú
 * @param {string} data.section - Presencial, en línea o posgrado
 * @param {string} data.secondary_menu - Segundo nivel del menú
 */
const sendMenuEvent = withIncubeta(function (data) {
  window.dataLayer = window.dataLayer || []

  const dataLayerEvent = {
    event: 'ev_menu',
    primary_menu: data.primary_menu,
    section: data.section,
    secondary_menu: data.secondary_menu
  }

  const sendEvent = () => {
    window.dataLayer.push(dataLayerEvent)
    console.log('[Incubeta] ✅ ev_menu enviado:', dataLayerEvent)
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
      console.warn('[Incubeta] GTM no disponible después de 3s, enviando ev_menu de todos modos')
      sendEvent()
    }
  }, 100)
})

/**
 * Inicializa el tracking de clicks en el menú
 * Agrega listeners directamente a los enlaces del submenú
 */
export const initMenuClickTracking = withIncubeta(function () {
  // Seleccionar todos los enlaces del submenú
  const menuLinks = document.querySelectorAll('.sub-menu-parent .sub-menu a, .sub-menu-parent a')

  menuLinks.forEach((link) => {
    link.addEventListener('click', (e) => {
      // Buscar el li padre que contiene todo el menú
      const wrapper = link.closest('.main-submenu-wrapper')
      if (!wrapper) return

      const primaryMenu = wrapper.parentElement.querySelector('.has-link-parent')?.innerText
      const section = wrapper.querySelector('.submenu-tab.has-active > button.is-active')
      const secondaryMenu = link?.innerText

      // Enviar evento
      sendMenuEvent({
        primary_menu: primaryMenu,
        section: section?.innerText,
        secondary_menu: secondaryMenu
      })
    })
  })

  const navbarMenuLinks = document.querySelectorAll('#menu-navbar_menu > li > a:not(.has-link-parent)')
  navbarMenuLinks.forEach((link) => {
    link.addEventListener('click', (e) => {
      const primaryMenu = link.innerText

      // Enviar evento
      sendMenuEvent({
        primary_menu: primaryMenu,
        section: '',
        secondary_menu: ''
      })
    })
  })
})
