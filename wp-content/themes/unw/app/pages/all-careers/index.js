import { initializeScrollableTabs } from './../../functions/scrollable-tabs'
import { ModalManager } from './../../components/Modal'
import FormCrmCategory from '../../components/FormCRM/FormCrmCategory'
import { $element } from '../../utils/dom'

(function () {
  new ModalManager()

  const allTabsContainers = document.querySelectorAll('.nav-tabs')
  if (allTabsContainers.length > 0) {
    allTabsContainers.forEach(tabsContainer => {
      initializeScrollableTabs(tabsContainer)
    })
  }

  const initFormsByPosition = (position) => {
    const form = $element(`[data-position-form="${position}"]`)
    if (form) new FormCrmCategory({ element: form })
  }

  initFormsByPosition('desktop')
  initFormsByPosition('mobile')
})()
