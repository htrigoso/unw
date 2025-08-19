import Accordion from '../../components/Accordion'

(function () {
  document.querySelectorAll('.dynamic-accordion').forEach(element => {
    new Accordion({ element, allowMultiple: true })
  })
})()
