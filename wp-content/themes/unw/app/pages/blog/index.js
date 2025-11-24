import { initializeScrollableTabs } from './../../functions/scrollable-tabs'
import { initSelectContentTracking } from '../../utils/incubeta/selectContent'

(function () {
  const allTabsContainers = document.querySelectorAll('.nav-tabs')
  if (allTabsContainers.length > 0) {
    allTabsContainers.forEach(tabsContainer => {
      initializeScrollableTabs(tabsContainer)
    })
  }

  // Inicializar tracking de select_content
  initSelectContentTracking()
})()
