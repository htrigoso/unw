import AutoBind from 'auto-bind'
import EventEmitter from 'events'
import Prefix from 'prefix'
import each from 'lodash/each'
import { mapEach } from 'utils/dom'
import Paragraph from '../animation/Paragraph'

export default class extends EventEmitter {
  constructor({ classes, element, elements, isScrollable = true }) {
    super()

    AutoBind(this)

    this.classes = {
      ...classes
    }

    this.selectors = {
      element,
      elements: {
        animationsParagraphs: '[data-animation="paragraph"]',
        ...elements
      }
    }

    this.transformPrefix = Prefix('transform')

    this.create()
  }

  create() {
    this.animations = []

    this.element = document.querySelector(this.selectors.element)
    this.elements = {}

    each(this.selectors.elements, (selector, key) => {
      if (selector instanceof window.HTMLElement || selector instanceof window.NodeList) {
        this.elements[key] = selector
      } else if (Array.isArray(selector)) {
        this.elements[key] = selector
      } else {
        this.elements[key] = this.element.querySelectorAll(selector)

        if (this.elements[key].length === 0) {
          this.elements[key] = null
        } else if (this.elements[key].length === 1) {
          this.elements[key] = this.element.querySelector(selector)
        }
      }
    })

    this.createAnimations()
  }

  createAnimations() {
    this.animationsParagraphs = mapEach(this.elements.animationsParagraphs, element => {
      return new Paragraph({ element })
    })

    this.animations.push(...this.animationsParagraphs)
  }
}
