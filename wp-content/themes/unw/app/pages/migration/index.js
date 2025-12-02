import FormCrmGeneral from '../../components/FormCRM/FormCrmGeneral'
import { ModalManager } from '../../components/Modal'
import { $element } from '../../utils/dom'
import { initFaqClickTracking } from '../../utils/incubeta/faqClick'

export default class BackupPage {
  constructor() {
    this.create()
    // super.create()
  }

  create() {
    this.initFormGeneral()
    new ModalManager()
    initFaqClickTracking()
  }

  initFormGeneral() {
    const form = $element('#form-general')
    if (form) {
      new FormCrmGeneral({
        element: form,
        container: '.more-form'
      })
    }
  }
}
new BackupPage()
