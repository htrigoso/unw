import { ModalManager } from '../../components/Modal'
import FormCrmGeneral from '../../components/FormCRM/FormCrmGeneral'
import { $element } from '../../utils/dom'
import { initViewProgramTypeTracking } from '../../utils/incubeta/viewProgramType'
import { initSelectProgramTypeTracking } from '../../utils/incubeta/selectProgramType'
import { initViewEventListTracking } from '../../utils/incubeta/viewEventList'
import { initSelectEventTracking } from '../../utils/incubeta/selectEvent'

export default class HomePage {
  constructor() {
    this.create()
  }

  create() {
    new ModalManager()
    this.initFormGeneral()
    initViewProgramTypeTracking()
    initSelectProgramTypeTracking()
    initViewEventListTracking()
    initSelectEventTracking()
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
new HomePage()
