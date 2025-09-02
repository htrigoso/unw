import Component from '../classes/Component'

const FORM_CARRIERS_PRESENCIAL = 'https://forms.zohopublic.com/adminzoho11/form/WebCarreras/formperma/T3JIAMOGnJxkHbk-qsPtLTz8XUz9NaQDXxHjjRe_AKk/htmlRecords/submit'
const FORM_CARRIERS_VIRTUAL = 'https://forms.zohopublic.com/adminzoho11/form/WebCarrerasVirtual/formperma/f1PqvMaVQ3bdPj9ELVT4XJWYy_eHSjrAECWfWqSB_uE/htmlRecords/submit'

export default class FormCRM extends Component {
  constructor({ element, container, onCompleted }) {
    super({ element, elements: {} })
    this.createListeners()
  }

  sanitizeForInput(str) {
    if (typeof str !== 'string') return ''
    return str
      .replace(/&/g, '&amp;')
      .replace(/</g, '&lt;')
      .replace(/>/g, '&gt;')
      .replace(/"/g, '&quot;')
      .replace(/'/g, '&#039;')
  }

  createListeners() {
    this.handleDepartmentChange()
    this.handleFormMixtoChange()
  }

  handleDepartmentChange() {
    const selectDepartament = this.element.querySelector('#departament')
    const hiddenDepartament = this.element.querySelector('#hidden_departament')
    if (!selectDepartament || !hiddenDepartament) return

    selectDepartament.addEventListener('change', () => {
      const selectedText = selectDepartament.options[selectDepartament.selectedIndex].text
      hiddenDepartament.value = this.sanitizeForInput(selectedText)
    })
  }

  setClaseName(value) {
    const htmlNameFirst = this.element.querySelector('[data-html-name="name_first"]')
    if (!htmlNameFirst) return
    htmlNameFirst.className = value
  }

  handleFormMixtoChange() {
    const radios = this.element.querySelectorAll('input[name="form_mixto"]')

    if (!radios.length) return

    radios.forEach(radio => {
      radio.addEventListener('change', () => {
        if (!radio.checked) return

        const value = radio.value.trim().toLowerCase()
        switch (value) {
          case 'pregrado':
            this.element.action = FORM_CARRIERS_PRESENCIAL
            this.setClaseName('f-100')
            this.removeSelectDepartament()
            this.createSelectCampus()
            break
          case 'virtual':
            this.element.action = FORM_CARRIERS_VIRTUAL
            this.createSelectDepartament()
            this.setClaseName('f-50')
            break
          default:
            console.warn(`Opción inválida para form_mixto: "${radio.value}"`)
            break
        }
      })
    })
  }

  createSelectDepartament() {
    const departaments = JSON.parse(this.element.dataset.departaments || '[]')

    if (departaments.length === 0) return
    const containerHtml = this.element.querySelector('[data-html-name="departament"]')
    if (!containerHtml) return

    // Evitamos duplicados: si ya existe, no crear de nuevo
    if (containerHtml.querySelector('#departament')) return

    const wrapperDiv = document.createElement('div')
    wrapperDiv.classList.add('f-50')

    const fieldDiv = document.createElement('div')
    fieldDiv.classList.add('form-field', 'form-field-select')

    const select = document.createElement('select')
    select.name = 'SingleLine7'
    select.id = 'departament'
    select.required = true

    const defaultOption = document.createElement('option')
    defaultOption.value = ''
    defaultOption.textContent = '--Seleccionar--'
    defaultOption.disabled = true
    defaultOption.selected = true
    select.appendChild(defaultOption)

    departaments.forEach(dep => {
      const option = document.createElement('option')
      option.value = dep.value || ''
      option.textContent = dep.name || ''
      select.appendChild(option)
    })

    const label = document.createElement('label')
    label.htmlFor = 'departament'
    label.textContent = 'Departamento de procedencia'

    const errorSpan = document.createElement('span')
    errorSpan.classList.add('error-message')
    errorSpan.textContent = 'Datos inválidos'

    fieldDiv.appendChild(select)
    fieldDiv.appendChild(label)
    fieldDiv.appendChild(errorSpan)
    wrapperDiv.appendChild(fieldDiv)

    containerHtml.prepend(wrapperDiv)
  }

  removeSelectDepartament() {
    const containerHtml = this.element.querySelector('[data-html-name="departament"]')
    if (!containerHtml) return

    const existingSelect = containerHtml.querySelector('#departament')
    if (existingSelect) {
      existingSelect.closest('.f-50')?.remove()
    }
  }
}
