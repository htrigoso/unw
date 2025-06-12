import Component from '../classes/Component'

export default class Menu extends Component {
  constructor ({ element, navbar }) {
    super({
      element,
      elements: {}
    })

    this.navbar = navbar
    this.createListeners()
  }

  createListeners () {
    if (!this.navbar) {
      return
    }

    this.element.classList.add('is-ready')

    this.btnOpen = this.navbar.querySelector('#btn-open-menu')
    this.btnClose = this.element.querySelector('#btn-close-menu')

    this.handleOpen()
    this.handleClose()
  }

  handleOpen () {
    if (!this.btnOpen) {
      return
    }

    this.btnOpen.addEventListener('click', (e) => {
      e.preventDefault()
      this.show()
    })
  }

  handleClose () {
    if (!this.btnClose) {
      return
    }

    this.btnClose.addEventListener('click', (e) => {
      e.preventDefault()
      this.hide()
    })
  }

  show () {
    this.element.classList.add('is-active')
  }

  hide () {
    this.element.classList.remove('is-active')
  }
}
