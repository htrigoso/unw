import Component from '../classes/Component'
import { $elements } from '../utils/dom'

export default class Tabs extends Component {
  constructor({ element }) {
    super({
      element,
      elements: {}
    })

    this.createTabs()
    this.addEventClickTabs()
    this.activateFirstTab()
  }

  createTabs() {
    this.elements.tabItems = $elements('.tab__item')
    this.elements.tabContents = $elements('.tab__content')
  }

  activateFirstTab() {
    const firstTab = this.elements.tabItems[0]
    const targetId = firstTab.dataset.target

    firstTab.classList.add('is-active')
    this.elements.tabContents.forEach(content => {
      content.style.display = content.id === targetId ? 'block' : 'none'
    })
  }

  addEventClickTabs() {
    this.elements.tabItems?.forEach(tab => {
      tab.addEventListener('click', event => {
        event.preventDefault()

        const targetId = tab.dataset.target

        // Manejo de clase activa
        this.elements.tabItems.forEach(item =>
          item.classList.remove('is-active')
        )
        tab.classList.add('is-active')

        // Mostrar solo el contenido correspondiente
        this.elements.tabContents.forEach(content => {
          content.style.display = content.id === targetId ? 'block' : 'none'
        })
      })
    })
  }
}
