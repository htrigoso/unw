import Component from '../classes/Component'

export default class Menu extends Component {
  constructor({ element, navbar }) {
    super({
      element,
      elements: {}
    })

    this.navbar = navbar
    this.createListeners()
  }

  createListeners() {
    if (!this.navbar || !this.element) return

    this.element.classList.add('is-ready')

    this.btnOpen = this.navbar.querySelector('#btn-open-menu')
    this.btnClose = this.element.querySelector('#btn-close-menu')
    this.menuLinks = this.element.querySelectorAll('.sidebar__menu-link')
    this.submenuBackButtons = this.element.querySelectorAll('.sidebar__submenu-back')

    this.handleOpen()
    this.handleClose()
    this.handleSubmenuOpen()
    this.handleSubmenuBack()
  }

  handleOpen() {
    this.btnOpen?.addEventListener('click', (e) => {
      e.preventDefault()
      this.show()
    })
  }

  handleClose() {
    this.btnClose?.addEventListener('click', (e) => {
      e.preventDefault()
      this.hide()
    })
  }

  handleSubmenuOpen() {
    if (!this.menuLinks.length) return

    this.menuLinks.forEach((link) => {
      link.addEventListener('click', (e) => {
        e.preventDefault()
        const parent = link.closest('.sidebar__menu-item')
        const submenu = parent?.querySelector('.sidebar__submenu')
        submenu?.classList.add('is-active')
      })
    })
  }

  handleSubmenuBack() {
    if (!this.submenuBackButtons.length) return

    this.submenuBackButtons.forEach((btn) => {
      btn.addEventListener('click', (e) => {
        e.preventDefault()
        const parent = btn.closest('.sidebar__menu-item')
        const submenu = parent?.querySelector('.sidebar__submenu')
        submenu?.classList.remove('is-active')
      })
    })
  }

  show() {
    this.element.classList.add('is-active')
    document.body.classList.add('sidebar-open')
  }

  hide() {
    this.element.classList.remove('is-active')
    document.body.classList.remove('sidebar-open')
  }
}
