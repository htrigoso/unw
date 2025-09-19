import { initializeScrollableTabs } from './../../functions/scrollable-tabs'

(function () {
  const allTabsContainers = document.querySelectorAll('.nav-tabs')

  allTabsContainers.forEach(tabsContainer => {
    initializeScrollableTabs(tabsContainer)
  })
})()
