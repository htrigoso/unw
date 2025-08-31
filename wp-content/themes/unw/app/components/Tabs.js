import Component from '../classes/Component'

export default class Tabs extends Component {
  constructor({ element, preventDefault = false, onTabChange = null }) {
    super({
      element,
      elements: {
        tabItems: '.tab__item',
        tabContents: '.tab__content'
      }
    })
    this.preventDefault = preventDefault
    this.currentTabId = null
    this.onTabChange = onTabChange

    this.init()
  }

  init() {
    this.activeTabFromUrl()
    this.bindTabEvents()
    window.addEventListener('resize', this.handleResize.bind(this))
  }

  handleResize() {
    const activeTab = [...this.elements.tabItems].find(tab =>
      tab.classList.contains('is-active')
    )
    if (activeTab) {
      this.scrollToTab(activeTab)
    }
  }

  activeTabFromUrl() {
    const urlParams = new URLSearchParams(window.location.search)
    const tabId = urlParams.get('tab')
    let tabToActivate = null

    if (tabId) {
      tabToActivate = [...this.elements.tabItems].find(tab => tab.dataset.target === tabId)
    }

    if (!tabToActivate) {
      tabToActivate = [...this.elements.tabItems].find(tab =>
        tab.classList.contains('is-active')
      )
    }

    const targetId = tabToActivate.dataset.target
    this.currentTabId = targetId

    this.setActiveTab(tabToActivate)
    this.showTabContent(targetId)
    this.scrollToTab(tabToActivate)

    // Callback para notificar el cambio de tab inicial
    if (typeof this.onTabChange === 'function') {
      const targetContent = document.getElementById(targetId)
      const tabIndex = this.getTabIndex(tabToActivate)
      this.onTabChange(tabToActivate, targetContent, tabIndex)
    }
  }

  bindTabEvents() {
    this.elements.tabItems?.forEach(tab => {
      if (!this.preventDefault) {
        tab.addEventListener('click', event => this.handleTabClick(event, tab))
      }
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
    this.updateUrl(targetId)

    // Callback para notificar el cambio de tab
    if (typeof this.onTabChange === 'function') {
      const tabIndex = this.getTabIndex(tab)
      this.onTabChange(tab, targetContent, tabIndex)
    }
  }

  getTabIndex(tab) {
    return [...this.elements.tabItems].indexOf(tab)
  }

  updateUrl(targetId) {
    const url = new URL(window.location)
    url.searchParams.set('tab', targetId)
    window.history.replaceState({}, '', url)
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
      const offset = 200
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
