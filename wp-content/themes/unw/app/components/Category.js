import Component from '../classes/Component'
import { $element } from '../utils/dom'

export default class Category extends Component {
  constructor({ id, element }) {
    super({
      element,
      elements: {}
    })

    this.id = id
    this.createTab()
    this.addEventClickTab()
  }

  createTab() {
    this.elements.tabItem = $element(
      `.category-tab__item-link[data-category="${this.id}"]`
    )
  }

  addEventClickTab() {
    this.elements.tabItem
      ?.addEventListener('click', () => {
        $element(`#${this.id}`)
          .scrollIntoView({ behavior: 'smooth' })
      })
  }
}
