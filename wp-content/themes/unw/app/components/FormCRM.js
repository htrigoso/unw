import Component from '../classes/Component'

// ==========================
// Constantes de formularios
// ==========================
const FORM_CARRIERS_PRESENCIAL =
  'https://forms.zohopublic.com/adminzoho11/form/WebCarreras/formperma/T3JIAMOGnJxkHbk-qsPtLTz8XUz9NaQDXxHjjRe_AKk/htmlRecords/submit'

const FORM_CARRIERS_VIRTUAL =
  'https://forms.zohopublic.com/adminzoho11/form/WebCarrerasVirtual/formperma/f1PqvMaVQ3bdPj9ELVT4XJWYy_eHSjrAECWfWqSB_uE/htmlRecords/submit'

export default class FormCRM extends Component {
  constructor({ element, container, onCompleted }) {
    super({ element, elements: {} })
    this.createListeners()
  }

  // ==========================
  // Inicializadores
  // ==========================
  createListeners() {
    this.handleDepartmentChange()
    this.handleFormMixtoChange()
  }

  // ==========================
  // Handlers
  // ==========================
  handleDepartmentChange() {
    const selectDepartament = this.element.querySelector('#departament')
    const hiddenDepartament = this.element.querySelector('#hidden_departament')
    if (!selectDepartament || !hiddenDepartament) return

    selectDepartament.addEventListener('change', () => {
      const selectedText =
        selectDepartament.options[selectDepartament.selectedIndex].text
      hiddenDepartament.value = this.sanitizeForInput(selectedText)
    })
  }

  handleFormMixtoChange() {
    const radios = this.element.querySelectorAll('input[name="form_mixto"]')
    const campus = JSON.parse(this.element.dataset.campus || '[]')
    const isMixto = JSON.parse(this.element.dataset.mixto || 0)

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

            if (isMixto && campus.length > 0) {
              this.createSelectCampus()
            }
            break

          case 'virtual':
            this.element.action = FORM_CARRIERS_VIRTUAL
            this.setClaseName('f-50')
            this.createSelectDepartament()

            if (isMixto && campus.length > 0) {
              this.removeSelectCampus()
            }
            break

          default:
            console.warn(`Opción inválida para form_mixto: "${radio.value}"`)
            break
        }
      })
    })
  }

  // ==========================
  // Helpers
  // ==========================
  sanitizeForInput(str) {
    if (typeof str !== 'string') return ''
    return str
      .replace(/&/g, '&amp;')
      .replace(/</g, '&lt;')
      .replace(/>/g, '&gt;')
      .replace(/"/g, '&quot;')
      .replace(/'/g, '&#039;')
  }

  setClaseName(value) {
    const htmlNameFirst = this.element.querySelector(
      '[data-html-name="name_first"]'
    )
    if (htmlNameFirst) {
      htmlNameFirst.className = value
    }
  }

  // ==========================
  // Creadores dinámicos
  // ==========================
  createSelectDepartament() {
    const departaments = JSON.parse(this.element.dataset.departaments || '[]')
    if (departaments.length === 0) return

    const containerHtml = this.element.querySelector(
      '[data-html-name="departament"]'
    )
    if (!containerHtml) return

    // Evitar duplicados
    if (containerHtml.querySelector('#departament')) return

    const wrapperDiv = this.buildSelectWrapper({
      id: 'departament',
      name: 'SingleLine7',
      label: 'Departamento de procedencia',
      options: departaments
    })

    containerHtml.prepend(wrapperDiv)
  }

  createSelectCampus() {
    const campus = JSON.parse(this.element.dataset.campus || '[]')
    if (campus.length === 0) return

    const containerHtml = this.element.querySelector('[data-html-name="campus"]')
    if (!containerHtml) return

    const wrapperDiv = this.buildSelectWrapper({
      id: 'campus',
      name: 'SingleLine7',
      label: 'Elige tu campus',
      options: campus
    })

    // Si existe reemplaza, sino agrega
    const existing = containerHtml.querySelector('.f-50')
    existing ? existing.replaceWith(wrapperDiv) : containerHtml.appendChild(wrapperDiv)
  }

  // ==========================
  // Removedores dinámicos
  // ==========================
  removeSelectDepartament() {
    this.removeSelect('[data-html-name="departament"]', '#departament')
  }

  removeSelectCampus() {
    this.removeSelect('[data-html-name="campus"]', '#campus')
  }

  removeSelect(containerSelector, selectId) {
    const containerHtml = this.element.querySelector(containerSelector)
    if (!containerHtml) return

    const existingSelect = containerHtml.querySelector(selectId)
    if (existingSelect) {
      existingSelect.closest('.f-50')?.remove()
    }
  }

  // ==========================
  // Generador de select genérico
  // ==========================
  buildSelectWrapper({ id, name, label, options }) {
    const wrapperDiv = document.createElement('div')
    wrapperDiv.classList.add('f-50')

    const fieldDiv = document.createElement('div')
    fieldDiv.classList.add('form-field', 'form-field-select')

    const select = document.createElement('select')
    select.name = name
    select.id = id
    select.required = true

    // Opción por defecto
    const defaultOption = document.createElement('option')
    defaultOption.value = ''
    defaultOption.textContent = '--Seleccionar--'
    defaultOption.disabled = true
    defaultOption.selected = true
    select.appendChild(defaultOption)

    // Opciones dinámicas
    options.forEach(opt => {
      const option = document.createElement('option')
      option.value = opt.value || ''
      option.textContent = opt.name || ''
      select.appendChild(option)
    })

    const labelEl = document.createElement('label')
    labelEl.htmlFor = id
    labelEl.textContent = label

    const errorSpan = document.createElement('span')
    errorSpan.classList.add('error-message')
    errorSpan.textContent = 'Datos inválidos'

    fieldDiv.appendChild(select)
    fieldDiv.appendChild(labelEl)
    fieldDiv.appendChild(errorSpan)
    wrapperDiv.appendChild(fieldDiv)

    return wrapperDiv
  }
}
