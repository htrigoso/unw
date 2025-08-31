import Menu from './components/Menu'
import { ModalManager } from './components/Modal'
import ScrollDown from './components/ScrollDown'
import { $element } from './utils/dom'
import floatingInputLabel from './utils/floating-input-label'
import initLazyLoad from './utils/lazyload'

class App {
  constructor() {
    this.createNavbar()
    this.createMenu()
    this.megaMenuDesktop()
    this.tabMegaMenuDesktop()
    this.hideBackdrop()
    this.createModal()
  }

  createModal() {
    new ModalManager()
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

  createScrollDown() {
    const element = $element('.scroll-down')

    if (!element) {
      return
    }

    this.scrollDown = new ScrollDown({ element })
  }

  onPreloaded() {
    initLazyLoad()
    this.onScroll()
    this.createMenu()

    const formContact = $element('#form-contact')

    if (formContact) {
      floatingInputLabel({
        container: $element('#form-contact')
      })
    }

    this.createScrollDown()
  }

  onScroll() {
    window.addEventListener('scroll', (e) => {
      const scrollTop = window.pageYOffset
      if (scrollTop > 10) {
        this.navbar.classList.add('active')
      } else {
        this.navbar.classList.remove('active')
      }
    })
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
}

new App()
