import FormCrmGeneral from '../../components/FormCRM/FormCrmGeneral'
import Page from '../../classes/Page'
import { ModalManager } from '../../components/Modal'

export default class BackupPage {
  constructor() {
    this.create()
    // super.create()
  }

  create() {
    new ModalManager()

    new FormCrmGeneral({
      element: '#form-general',
      container: '.more-form'
    })
  }
}
new BackupPage()
