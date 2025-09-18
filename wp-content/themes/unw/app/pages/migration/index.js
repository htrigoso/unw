import FormCrmGeneral from '../../components/FormCRM/FormCrmGeneral'
import Page from '../../classes/Page'
import { ModalManager } from '../../components/Modal'
import { $element } from '../../utils/dom'

export default class BackupPage {
  constructor() {
    this.create()
    // super.create()
  }

  create() {
    this.initFormGeneral()
    new ModalManager()
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
