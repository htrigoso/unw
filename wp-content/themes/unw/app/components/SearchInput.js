import Component from '../classes/Component'

export default class SearchInput extends Component {
  constructor({ element }) {
    super({ element })
    this.input = this.element.querySelector('.search-input__field')
    this.clearBtn = this.element.querySelector('.search-input__clear')
    this.form = this.input.closest('form')
    this.toggleClear = this.toggleClear.bind(this)
    this.handleClear = this.handleClear.bind(this)
    this.createListeners()
    this.toggleClear()
  }

  createListeners() {
    if (!this.input || !this.clearBtn) return
    this.input.addEventListener('input', this.toggleClear)
    this.clearBtn.addEventListener('click', this.handleClear)
    document.addEventListener('DOMContentLoaded', this.toggleClear)
  }

  toggleClear() {
    if (!this.clearBtn) return
    this.clearBtn.style.display = this.input.value ? 'inline' : 'none'
  }

  handleClear() {
    this.input.value = ''
    this.toggleClear()
    if (this.form) this.form.submit()
  }

  destroy() {
    if (!this.input || !this.clearBtn) return
    this.input.removeEventListener('input', this.toggleClear)
    this.clearBtn.removeEventListener('click', this.handleClear)
    document.removeEventListener('DOMContentLoaded', this.toggleClear)
  }
}
