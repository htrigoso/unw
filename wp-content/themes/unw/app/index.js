import Menu from './components/Menu'
import Preloader from './components/Preloader'
import ScrollDown from './components/ScrollDown'
import { $element } from './utils/dom'
import floatingInputLabel from './utils/floating-input-label'
import initLazyLoad from './utils/lazyload'

console.log('App started')

class App {
  constructor() {
    // this.createPreloader()
    this.createNavbar()
    this.createMenu()
  }

  createPreloader() {
    const container = $element('body')
    this.preloader = new Preloader({
      element: '.preloader',
      container,
      onCompleted: () => {
        this.onPreloaded()
        console.log('Preloader completed')
      }
    })
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
}

// eslint-disable-next-line no-new
new App()
