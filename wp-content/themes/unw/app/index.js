import Menu from './components/Menu'
import { $element } from './utils/dom'
import initLazyLoad from './utils/lazyload'
import { initViewItemListTracking } from './utils/incubeta/viewItemList'
import { initSelectItemTracking, trackCareerDetail } from './utils/incubeta/selectItem'
import { initErrorMessageTracking } from './utils/incubeta/errorMessage'
import { initFaqClickTracking } from './utils/incubeta/faqClick'
import { initFooterClickTracking } from './utils/incubeta/footerClick'
import { initContactClickTracking } from './utils/incubeta/contactClick'
import { initShareClickTracking } from './utils/incubeta/shareClick'
import { initCarrouselViewTracking } from './utils/incubeta/carrouselView'
import { initCarrouselSwipeTracking } from './utils/incubeta/carrouselSwipe'
import { initCarrouselClickTracking } from './utils/incubeta/carrouselClick'
import { initMenuClickTracking } from './utils/incubeta/menuClick'
import { onDOMReady } from './utils/dom-ready'

class App {
  constructor() {
    this.createLazyLoad()
    this.createNavbar()
    this.createMenu()
    this.megaMenuDesktop()
    this.tabMegaMenuDesktop()
    this.hideBackdrop()
    this.blockedClickButtonModal()
    this.initCareersTracking()
    this.initErrorTracking()
    this.initFaqTracking()
    this.initFooterTracking()
    this.initContactTracking()
    this.initShareTracking()
    this.initCarrouselTracking()
    this.initMenuTracking()
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

        // Aplicar top según altura del navbar
        const parent = link.closest('li')
        const parentWrapper = parent.querySelector('.main-submenu-wrapper')

        const navbar = document.querySelector('.navbar')
        if (navbar) {
          let navbarHeight = navbar.offsetHeight

          // Sumar altura del admin bar si existe
          const adminBar = document.getElementById('wpadminbar')
          if (adminBar) {
            navbarHeight += adminBar.offsetHeight
          }

          parentWrapper.style.top = `${navbarHeight}px`
        }

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

  initFaqTracking() {
    // Tracking de clicks en preguntas frecuentes (FAQ)
    initFaqClickTracking()
  }

  initFooterTracking() {
    // Tracking de clicks en enlaces del footer
    initFooterClickTracking()
  }

  initContactTracking() {
    // Tracking de clicks en opciones de contacto
    initContactClickTracking()
  }

  initShareTracking() {
    // Tracking de clicks en compartir contenido
    initShareClickTracking()
  }

  initCarrouselTracking() {
    // Tracking de visualización de carrousels/swipers
    initCarrouselViewTracking()
    // Tracking de cambios de slide en carrousels
    initCarrouselSwipeTracking()
    // Tracking de clicks en enlaces dentro de carrousels
    initCarrouselClickTracking()
  }

  initMenuTracking() {
    // Tracking de clicks en el menú de navegación
    initMenuClickTracking()
  }
}

onDOMReady(() => {
  new App()
})
