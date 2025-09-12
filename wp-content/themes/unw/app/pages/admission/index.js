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

  const formAdmissionDesktop = $element('[data-form-type="pregrado-desktop"]')

  if (formAdmissionDesktop) {
    new FormCrmAdmission({
      element: formAdmissionDesktop,
      container: '.formAdmision'
    })
  }
  const formAdmissionMobile = $element('[data-form-type="pregrado-mobile"]')

  if (formAdmissionMobile) {
    new FormCrmAdmission({
      element: formAdmissionMobile,
      container: '.formAdmision'
    })
  }
  const formAdmissionTrasladoDesktop = $element('[data-form-type="traslado-desktop"]')
  if (formAdmissionTrasladoDesktop) {
    new FormCrmAdmissionTraslado({
      element: formAdmissionTrasladoDesktop,
      container: '.formAdmision'
    })
  }
  const formAdmissionTrasladoMobile = $element('[data-form-type="traslado-mobile"]')
  if (formAdmissionTrasladoMobile) {
    new FormCrmAdmissionTraslado({
      element: formAdmissionTrasladoMobile,
      container: '.formAdmision'
    })
  }
})()
