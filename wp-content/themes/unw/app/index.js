import Menu from './components/Menu'
import { $element } from './utils/dom'
import initLazyLoad from './utils/lazyload'
import { initViewItemListTracking } from './utils/incubeta/viewItemList'
import { initSelectItemTracking, trackCareerDetail } from './utils/incubeta/selectItem'
import { initErrorMessageTracking } from './utils/incubeta/errorMessage'

class App {
  constructor() {
    this.createLazyLoad()
    this.createNavbar()
    this.createMenu()
    this.megaMenuDesktop()
    this.tabMegaMenuDesktop()
    this.hideBackdrop()
    this.handleOnSubmitForm()
    this.blockedClickButtonModal()
    this.initCareersTracking()
    this.initErrorTracking()
  }

  createNavbar() {
    this.navbar = $element('#navbar')
  }

  createMenu() {
    if (!this.navbar) {
      return
    }

    this.menu = new Menu({
      element: '#sidebar',
      navbar: this.navbar
    })
  }

  createLazyLoad() {
    initLazyLoad()
  }

  megaMenuDesktop() {
    const elements = document.querySelectorAll('.has-link-parent')

    elements.forEach((link) => {
      link.addEventListener('click', (e) => {
        e.preventDefault()
        const _html = document.querySelector('html')
        _html.style.overflow = 'hidden'

        const parentItem = link.closest('li')
        if (!parentItem) return

        document.querySelectorAll('li.is-open').forEach((item) => {
          if (item !== parentItem) {
            item.classList.remove('is-open')
          }
        })

        parentItem.classList.toggle('is-open')
        // Si ahora hay alguno abierto, bloquea scroll. Si no, lo quita.
        const anyOpen = document.querySelector('li.is-open')
        if (anyOpen) {
          _html.style.overflow = 'hidden'
        } else {
          _html.style.overflow = ''
        }
      })
    })
  }

  tabMegaMenuDesktop() {
    const elements = document.querySelectorAll('.submenu-tab > button')

    elements.forEach((link) => {
      const dataId = link.getAttribute('data-id')

      link.addEventListener('click', (e) => {
        e.preventDefault()

        const parentWrapper = link.closest('.main-submenu-wrapper__main')

        if (!parentWrapper) {
          return
        }

        // Obtener el contenedor .submenu-tab del botón clicado
        const submenuTab = link.closest('.submenu-tab')

        // Limpiar todos los botones activos dentro de este wrapper
        elements.forEach((btn) => {
          btn.classList.remove('is-active')
        })

        // Activar el botón clicado
        link.classList.add('is-active')

        // Si hay al menos uno activo, poner has-active al contenedor
        if (submenuTab) {
          submenuTab.classList.add('has-active')
        }

        // Desactivar todos los items del submenú
        const listItems = parentWrapper.querySelectorAll('.sub-menu-parent > li')

        listItems.forEach((li) => {
          const liId = li.getAttribute('id')

          if (liId === dataId) {
            li.classList.add('is-active')
          } else {
            li.classList.remove('is-active')
          }
        })
      })
    })
  }

  hideBackdrop() {
    this.addBackdropListeners()
  }

  addBackdropListeners() {
    const wrappers = document.querySelectorAll('.main-submenu-wrapper')

    wrappers.forEach((wrapper) => {
      wrapper.addEventListener('click', (e) => this.handleBackdropClick(e))
    })
  }

  handleBackdropClick(e) {
    if (e.target.closest('a')) {
      return
    }

    e.preventDefault()

    if (!this.shouldCloseBackdrop(e.target)) return

    this.closeOpenMenus()
  }

  shouldCloseBackdrop(target) {
    return !target.closest('.main-submenu-wrapper__main')
  }

  closeOpenMenus() {
    const openItems = document.querySelectorAll('#menu-navbar_menu > .menu-item-has-children.is-open')

    openItems.forEach((item) => item.classList.remove('is-open'))

    document.documentElement.style.overflow = ''
  }

  handleOnSubmitForm() {
    document.addEventListener('DOMContentLoaded', () => {
      const forms = document.querySelectorAll('[data-form="zoho"]')
      if (!forms.length) return

      forms.forEach((form) => {
        form.addEventListener('submit', (e) => {
          // Evitar doble envío
          if (form.dataset.submitted === 'true') {
            e.preventDefault()
            return
          }
          form.dataset.submitted = 'true'

          // Botón de envío
          const button = form.querySelector('#button-send')
          if (button) {
            button.disabled = true
            button.dataset.originalText = button.innerText
            button.innerText = 'Enviando...'
          }

          // Push a dataLayer
          if (window.dataLayer && Array.isArray(window.dataLayer)) {
            window.dataLayer.push({
              event: 'gtm.formSubmit',
              formId: form?.id || null,
              formType: form?.dataset?.formType || null
            })
          } else {
            console.warn('⚠️ dataLayer no está definido')
          }
        })
      })
    })
  }

  blockedClickButtonModal() {
    document.querySelectorAll('[data-modal-target]').forEach(btn => {
      btn.addEventListener('click', e => {
        e.preventDefault() // evita scroll
      })
    })
  }

  initCareersTracking() {
    // Tracking de view_item_list (cuando se carga la página de listado)
    initViewItemListTracking()

    // Tracking de select_item (cuando hacen click en "Ver carrera")
    initSelectItemTracking()

    // Tracking automático de select_item para páginas single
    if (window.unwCareerDetailData) {
      trackCareerDetail(window.unwCareerDetailData)
    }
  }

  initErrorTracking() {
    // Tracking de errores de validación en formularios
    initErrorMessageTracking()
  }
}

new App()
