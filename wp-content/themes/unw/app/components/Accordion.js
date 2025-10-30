import Component from '../classes/Component'

function toArray(element) {
  if (!element) return []
  if (Array.isArray(element)) return element
  // eslint-disable-next-line no-prototype-builtins
  if (NodeList.prototype.isPrototypeOf(element) || HTMLCollection.prototype.isPrototypeOf(element)) {
    return Array.from(element)
  }
  return [element]
}

export default class Accordion extends Component {
  constructor({ element, allowMultiple = false }) {
    super({
      element,
      elements: {
        items: '.accordion-item',
        headers: '.accordion-header',
        contents: '.accordion-content'
      }
    })

    this.elements.items = toArray(this.elements.items)
    this.elements.headers = toArray(this.elements.headers)
    this.elements.contents = toArray(this.elements.contents)

    this.allowMultiple = allowMultiple
    this.init()
  }

  init() {
    this.elements.headers.forEach((header, idx) => {
      header.addEventListener('click', event => this.handleAccordionClick(event, idx))
    })
    this.closeAll()
  }

  handleAccordionClick(event, idx) {
    event.preventDefault()

    const item = this.elements.items[idx]
    const isOpen = item.classList.contains('is-open')
    const btn = item.querySelector('button')
    const content = item.querySelector('.accordion-content')

    if (btn) {
      btn.setAttribute('aria-expanded', String(!isOpen))
      content.setAttribute('aria-hidden', String(isOpen))
    }

    if (this.allowMultiple) {
      item.classList.toggle('is-open')
    } else {
      console.log('2')
      if (!isOpen) {
        this.closeAll()
      } else {
        item.classList.remove('is-open')
      }
    }
  }

  closeAll() {
    this.elements.items.forEach((item, i) => {
      item.classList.remove('is-open')
    })
  }
}
