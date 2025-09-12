
import Component from '../classes/Component'

const VARIANT_CLASSES = ['toaster--info', 'toaster--success', 'toaster--error', 'toaster--warning']

export default class Toaster extends Component {
  constructor({ element, duration = 3000, onClose = null }) {
    super({
      element,
      elements: {
        toaster: '.toaster',
        message: '.toaster__message',
        closeBtn: '.toaster__close'
      }
    })
    this.duration = duration
    this.onClose = onClose
    this.timeoutId = null
    this.isVisible = false
    this.currentVariant = 'info'
    this.init()
  }

  init() {
    this.elements.closeBtn?.addEventListener('click', this.hide.bind(this))
  }

  show(message, options = {}) {
    if (!this.elements.toaster || !this.elements.message) return
    this.elements.message.textContent = message
    this.setVariant(options.variant || 'info')
    this.elements.toaster.classList.add('active')
    setTimeout(() => {
      this.elements.toaster.classList.add('visible')
      this.isVisible = true
    }, 50)

    if (this.timeoutId) clearTimeout(this.timeoutId)
    const autoClose = options.autoClose !== undefined ? options.autoClose : true
    const duration = options.duration || this.duration
    if (autoClose) {
      this.timeoutId = setTimeout(() => this.hide(), duration)
    }
  }

  setVariant(variant) {
    VARIANT_CLASSES.forEach(cls => this.elements.toaster.classList.remove(cls))
    const className = `toaster--${variant}`
    if (VARIANT_CLASSES.includes(className)) {
      this.elements.toaster.classList.add(className)
      this.currentVariant = variant
    } else {
      this.elements.toaster.classList.add('toaster--info')
      this.currentVariant = 'info'
    }
  }

  hide() {
    if (!this.isVisible || !this.elements.toaster) return
    this.elements.toaster.classList.remove('visible')
    this.isVisible = false
    if (this.timeoutId) {
      clearTimeout(this.timeoutId)
      this.timeoutId = null
    }
    setTimeout(() => {
      this.elements.toaster.classList.remove('active')
      if (typeof this.onClose === 'function') {
        this.onClose()
      }
    }, 300)
  }
}
