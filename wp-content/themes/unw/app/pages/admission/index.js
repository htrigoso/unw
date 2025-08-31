import Accordion from '../../components/Accordion'

(function () {
  document.querySelectorAll('.dynamic-accordion').forEach(element => {
    new Accordion({ element, allowMultiple: true })
  })

  document.addEventListener('DOMContentLoaded', function () {
    const formIds = ['form-convalidation', 'form-pregrado', 'form-traslado']

    formIds.forEach(id => {
      const form = document.getElementById(id)
      if (!form) return

      form.addEventListener('submit', function () {
        if (typeof window.dataLayer !== 'undefined') {
          alert('form submit')
          window.dataLayer.push({
            event: 'gtm.formSubmit',
            formId: id
          })
        }
      })
    })
  })
})()
