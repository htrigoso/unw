import Accordion from '../../components/Accordion'
import FormCrmAdmission from '../../components/FormCRM/FormCrmAdmission'
import FormCrmAdmissionTraslado from '../../components/FormCRM/FormCrmAdmissionTraslado'
import { ModalManager } from '../../components/Modal'
(function () {
  document.querySelectorAll('.dynamic-accordion').forEach(element => {
    new Accordion({ element, allowMultiple: true })
  })

  new ModalManager()

  const formsConfig = [
    { selector: '[data-form-type="pregrado-desktop"]', Class: FormCrmAdmission },
    { selector: '[data-form-type="pregrado-mobile"]', Class: FormCrmAdmission },
    { selector: '[data-form-type="traslado-desktop"]', Class: FormCrmAdmissionTraslado },
    { selector: '[data-form-type="traslado-mobile"]', Class: FormCrmAdmissionTraslado }
  ]
  formsConfig.forEach(({ selector, Class }) => {
    const el = document.querySelector(selector)
    if (el) {
      new Class({
        element: el,
        container: '.formAdmision'
      })
    }
  })
})()
