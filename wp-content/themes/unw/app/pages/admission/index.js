import Accordion from '../../components/Accordion'
import FormCrmAdmission from '../../components/FormCRM/FormCrmAdmission'
import FormCrmAdmissionTraslado from '../../components/FormCRM/FormCrmAdmissionTraslado'
import { ModalManager } from '../../components/Modal'
import { $element } from '../../utils/dom'
(function () {
  document.querySelectorAll('.dynamic-accordion').forEach(element => {
    new Accordion({ element, allowMultiple: true })
  })

  new ModalManager()

  const formAdmission = $element('[data-form-type="pregrado-desktop"]')

  if (formAdmission) {
    new FormCrmAdmission({
      element: formAdmission,
      container: '.formAdmision'
    })
  }
  const formAdmissionTraslado = $element('[data-form-type="traslado-desktop"]')
  if (formAdmissionTraslado) {
    new FormCrmAdmissionTraslado({
      element: formAdmissionTraslado,
      container: '.formAdmision'
    })
  }
})()
