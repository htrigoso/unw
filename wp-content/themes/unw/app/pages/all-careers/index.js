import { initializeScrollableTabs } from './../../functions/scrollable-tabs'
import { ModalManager } from './../../components/Modal'

(function () {
  new ModalManager()

  const allTabsContainers = document.querySelectorAll('.nav-tabs')
  if (allTabsContainers.length > 0) {
    allTabsContainers.forEach(tabsContainer => {
      initializeScrollableTabs(tabsContainer)
    })
  }
})()
