import Component from '../classes/Component'

export default class Tabs extends Component {
  constructor({ element }) {
    super({
      element,
      elements: {
        tabItems: '.tab__item',
        tabContents: '.tab__content'
      }
    })

    this.currentTabId = null

    this.init()
  }

  init() {
    this.activateFirstTab()
    this.bindTabEvents()
    window.addEventListener('resize', this.handleResize.bind(this))
  }

  handleResize() {
    const activeTab = this.elements.tabItems.find(tab =>
      tab.classList.contains('is-active')
    )
    if (activeTab) {
      this.scrollToTab(activeTab)
    }
  }

  activateFirstTab() {
    const firstTab = this.elements.tabItems[5]
    if (!firstTab) return

    const targetId = firstTab.dataset.target
    this.currentTabId = targetId

    this.setActiveTab(firstTab)
    this.showTabContent(targetId)
  }

  bindTabEvents() {
    this.elements.tabItems?.forEach(tab => {
      tab.addEventListener('click', event => this.handleTabClick(event, tab))
    })
  }

  handleTabClick(event, tab) {
    event.preventDefault()

    const targetId = tab.dataset.target
    if (!targetId || this.currentTabId === targetId) return

    const targetContent = document.getElementById(targetId)
    if (!targetContent) return

    this.currentTabId = targetId
    this.setActiveTab(tab)
    this.showTabContent(targetId)
    this.scrollToContent(targetContent)
    this.scrollToTab(tab)
  }

  setActiveTab(activeTab) {
    this.elements.tabItems.forEach(tab =>
      tab.classList.remove('is-active')
    )
    activeTab.classList.add('is-active')
  }

  showTabContent(targetId) {
    this.elements.tabContents.forEach(content => {
      content.style.display = content.id === targetId ? 'block' : 'none'
    })
  }

  scrollToContent(targetContent) {
    requestAnimationFrame(() => {
      const offset = 130
      const top =
        targetContent.getBoundingClientRect().top +
        window.pageYOffset -
        offset

      window.scrollTo({ top, behavior: 'smooth' })
    })
  }

  scrollToTab(tab) {
    requestAnimationFrame(() => {
      const isWide = window.innerWidth >= 1440
      tab.scrollIntoView({
        behavior: 'smooth',
        inline: isWide ? 'nearest' : 'center',
        block: 'nearest'
      })
    })
  }
}
