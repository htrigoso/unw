import LazyLoad from 'vanilla-lazyload'
import Component from '../classes/Component'
import { $elements } from '../utils/dom'

export default class ImagesLoaded extends Component {
  constructor ({ element }) {
    super({
      element,
      elements: {}
    })

    this.loaded = false
    this.total = 0
    this.errors = []
    this.elements_selector = '.lazy'

    this.createLoader()
  }

  createLoader () {
    try {
      // Validation length assets
      this.setTotalImages()

      this.lazy = new LazyLoad({
        // threshold: 600,
        // use_native: true,
        elements_selector: this.elements_selector,
        callback_loaded: (elt, { loadingCount }) => {
          if (!this.total) {
            this.setTotalImages()
          }

          const percent = this.total
            ? (this.total - loadingCount) / this.total
            : 1

          this.emit('progress', percent)
        },
        callback_error: (elt, instance) => {
          this.errors.push(elt)
        },
        callback_finish: () => {
          this.loaded = true
          this.emit('done')
        }
      })

      const timeout = setTimeout(() => {
        if (this.total === 0 && !this.loaded) {
          this.loaded = true
          this.emit('progress', 1)
          this.emit('done')
        }

        if (this.total > 0) {
          this.lazy.loadAll()
        }

        clearTimeout(timeout)
      }, 100)
    } catch (error) {
      this.emit('error', error)
    }
  }

  // Set images collection length
  setTotalImages () {
    const images = $elements(this.elements_selector)
    this.total = images.length
  }
}
