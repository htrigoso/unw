import Component from '../classes/Component'

export default class Menu extends Component {
  constructor({ element, navbar }) {
    super({
      element,
      elements: {
      }
    })

    this.navbar = navbar
    this.createListeners()
    this.handleResize = this.handleResize.bind(this)
    this.searchModalForm = document.querySelector('.search-modal__wrapper')
    window.addEventListener('resize', this.handleResize)
    this.handleResize()
  }

  createListeners() {
    if (!this.navbar || !this.element) return

    this.element.classList.add('is-ready')

    this.btnOpen = this.navbar.querySelector('#btn-open-menu')
    this.btnClose = this.element.querySelector('#btn-close-menu')
    this.menuLinks = this.element.querySelectorAll('.sidebar__menu-link')
    this.submenuBackButtons = this.element.querySelectorAll('.sidebar__submenu-back')
    this.btnSearchModalForm = this.navbar.querySelector('.btn-search-modal-form')
    this.btnCloseSearchModalForm = document.querySelector('#btn-close-modal')

    this.handleOpen()
    this.handleClose()
    this.handleSubmenuOpen()
    this.handleSubmenuBack()
    this.handleSearchModal()
  }

  handleResize() {
    if (window.innerWidth >= 1024) {
      this.hide()
    }
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
        const parent = link.closest('.sidebar__menu-item')
        const submenu = parent?.querySelector('.sidebar__submenu')
        if (submenu) {
          e.preventDefault()
          submenu.classList.add('is-active')
        }
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

  toggleSearchModal(open = true) {
    if (!this.searchModalForm) return
    this.searchModalForm.classList.toggle('is-active', open)
  }

  handleSearchModal() {
    if (this.btnSearchModalForm) {
      this.btnSearchModalForm.addEventListener('click', (e) => {
        e.preventDefault()
        this.toggleSearchModal(true)
      })
    }

    if (this.btnCloseSearchModalForm) {
      this.btnCloseSearchModalForm.addEventListener('click', (e) => {
        e.preventDefault()
        this.toggleSearchModal(false)
      })
    }
  }

  show() {
    this.element.classList.add('is-active')
    setTimeout(() => {
      document.body.classList.add('sidebar-open')
    }, 350)
  }

  hide() {
    this.element.classList.remove('is-active')
    document.body.classList.remove('sidebar-open')
  }

  destroy() {
    window.removeEventListener('resize', this.handleResize)
  }
}
