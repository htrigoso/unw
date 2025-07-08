import Menu from './components/Menu'
import ScrollDown from './components/ScrollDown'
import { $element } from './utils/dom'
import floatingInputLabel from './utils/floating-input-label'
import initLazyLoad from './utils/lazyload'

class App {
  constructor() {
    this.createNavbar()
    this.createMenu()
    this.megaMenuDesktop()
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
        e.preventDefault() // por si acaso

        const parentItem = link.closest('li')
        if (!parentItem) return

        parentItem.classList.toggle('is-open')
      })
    })
  }
}

new App()
