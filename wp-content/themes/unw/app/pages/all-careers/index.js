import { initializeScrollableTabs } from './../../functions/scrollable-tabs'
import { ModalManager } from './../../components/Modal'
import FormCrmCategory from '../../components/FormCRM/FormCrmCategory'
import { $element } from '../../utils/dom'

(function () {
  new ModalManager()
  initFormCategory()
  const allTabsContainers = document.querySelectorAll('.nav-tabs')
  if (allTabsContainers.length > 0) {
    allTabsContainers.forEach(tabsContainer => {
      initializeScrollableTabs(tabsContainer)
    })
  }

  function initFormCategory() {
    const form = $element('#form-category-presencial')
    if (form) {
      new FormCrmCategory({
        element: form,
        container: '.more-form'
      })
    }
  }
})()
