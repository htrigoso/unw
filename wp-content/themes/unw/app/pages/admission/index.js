import Accordion from '../../components/Accordion'
import FormCrmAdmission from '../../components/FormCRM/FormCrmAdmission'

(function () {
  document.querySelectorAll('.dynamic-accordion').forEach(element => {
    new Accordion({ element, allowMultiple: true })
  })

  new FormCrmAdmission({
    element: 'form',
    container: '.formAdmision'
  })
})()
