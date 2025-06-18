import each from 'lodash/each'

const formFieldTypes = [
  'form-field',
  'form-field-file',
  'form-field-date',
  'form-field-select',
]

const floatingInputLabel = ({ container, selectors = 'input, textarea, select' }) => {
  const inputs = container.querySelectorAll(selectors)

  each(inputs, input => {
    const parentInput = input.closest('.wpcf7-form-control-wrap')

    if (parentInput) {
      // Get parent form field (input, textarea, select) if has some class formFieldTypes
      const formField = parentInput.closest(`.${formFieldTypes.join(', .')}`)
      const formFieldType = input.tagName.toLowerCase()

      // Add label to form field (input and textarea)
      if (
        ['input', 'textarea'].includes(formFieldType) &&
        formField.classList.contains('form-field') &&
        !formField.classList.contains('form-field-file') &&
        !formField.classList.contains('form-field-date')
      ) {
        input.addEventListener('focus', () => {
          parentInput.classList.add('is-active')
        })

        input.addEventListener('blur', () => {
          if (input.value.length > 0) {
            parentInput.classList.add('is-active')
          } else {
            parentInput.classList.remove('is-active')
          }
        })

        // Add event click to label
        const label = formField.querySelector('label')

        label.addEventListener('click', () => {
          input.focus()
        })
      }

      // Add label to form field (select)
      if (formFieldType === 'select' && formField.classList.contains('form-field-select')) {
        const select = formField.querySelector('select')
        if (select.value.length > 0) {
          parentInput.classList.add('is-active')
        }

        select.addEventListener('change', () => {
          if (select.value.length > 0) {
            parentInput.classList.add('is-active')
          } else {
            parentInput.classList.remove('is-active')
          }
        })
      }

      // Add label to form field (file, date)
      if (
        formFieldType === 'input' &&
        (formField.classList.contains('form-field-file') || formField.classList.contains('form-field-date'))
      ) {
        parentInput.classList.add('is-active')
      }
    }
  })
}

export default floatingInputLabel
