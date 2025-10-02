import { initializeScrollableTabs } from './../../functions/scrollable-tabs'

(function () {
  const allTabsContainers = document.querySelectorAll('.nav-tabs')
  if (allTabsContainers.length > 0) {
    allTabsContainers.forEach(tabsContainer => {
      initializeScrollableTabs(tabsContainer)
    })
  }
})()
