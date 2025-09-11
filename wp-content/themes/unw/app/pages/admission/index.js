import Accordion from '../../components/Accordion'
import FormCrmAdmission from '../../components/FormCRM/FormCrmAdmission'
import FormCrmAdmissionTraslado from '../../components/FormCRM/FormCrmAdmissionTraslado'
import { ModalManager } from '../../components/Modal'
(function () {
  document.querySelectorAll('.dynamic-accordion').forEach(element => {
    new Accordion({ element, allowMultiple: true })
  })

  new ModalManager()
  new FormCrmAdmission({
    element: '.form-admission-2-desktop',
    container: '.form-admission-1-desktop'
  })
  new FormCrmAdmissionTraslado({
    element: '.form-admission-2-desktop',
    container: '.form-admission-2-desktop'
  })
})()
