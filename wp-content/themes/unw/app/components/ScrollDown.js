import Component from '../classes/Component'
import { $element } from '../utils/dom'

export default class ScrollDown extends Component {
  constructor ({ element }) {
    super({
      element,
      elements: {
        button: '.btn-basic-icon'
      }
    })

    this.to = this.element.getAttribute('data-to')

    if (this.to) {
      this.createListeners()
    }
  }

  createListeners () {
    this.elements.button?.addEventListener('click', (e) => {
      e.preventDefault()
      const el = $element(`#${this.to}`)
      if (el) {
        this.scrollTo(el)
      }
    })
  }

  scrollTo (el) {
    el.scrollIntoView({
      behavior: 'smooth'
    })
  }
}
