import { buildOptionsCampus, createHiddenInputs, createSelectDepartament, FORMS, hideCampusSelect, resetCustomHidden, removeNameAttributeCampus, removeSelectDepartament, setClaseName, setNameAttributeCampus, updateHiddenFieldCampus, updateHiddenInputs, validateInputs, showCampusSelect, validatePhone, updateOptionsCareersByFacultad } from './utils'

// ==========================
// Constantes de formularios
// ==========================
const FORM_GENERAL_PRESENCIAL =
  'https://forms.zohopublic.com/adminzoho11/form/WebFacultades/formperma/fDTnpldKeP_IhYXDSkyc6rF7sXx2IKYDi1scDuEShjI/htmlRecords/submit'

const FORM_GENERAL_VIRTUAL =
  'https://forms.zohopublic.com/adminzoho11/form/WebFacultadesVirtual/formperma/XZxvtW2GuLFc2zHw6RV9IKsDHhw5fMTH_275g92vXQM/htmlRecords/submit'

export default class FormCrmCategoryPregrado {
  constructor({ element, container }) {
    this.element = element

    this.formContainer = container
    this.createListeners()
  }

  // ==========================
  // Inicializadores
  // ==========================
  createListeners() {
    validateInputs()
    validatePhone()
    this.handleFormMixtoChange()
    this.handleCarrersChange()
    this.handleDepartamentChange()
    this.handleCampusChange()
  }

  removeCustomHiddenDepartament() {
    const customDepartament = this.element.querySelector('.custom-hidden-departament')
    if (customDepartament) {
      customDepartament.innerHTML = ''
    }
  }

  // ==========================
  // Handlers
  // ==========================

  handleFormMixtoChange() {
    if (!this.element) return
    const radios = this.element.querySelectorAll('input[name="form_mixto"]')
    if (!radios.length) return

    const departaments = window.appConfigUnw.departaments || []
    const careers = window.appConfigUnw.careers || []
    const facultadName = this.element.dataset.facultadName || ''

    radios.forEach(radio => {
      radio.addEventListener('change', () => {
        if (!radio.checked) return

        const value = radio.value.trim().toLowerCase()
        const select = this.element.querySelector('#careerSelect')
        const hiddenContainer = this.element.querySelector('.custom-hidden')

        switch (value) {
          case FORMS.PREGRADO:
            this.element.action = FORM_GENERAL_PRESENCIAL
            resetCustomHidden({ element: this.element })
            setClaseName('f-100', this.element)

            if (departaments.length > 0) {
              removeSelectDepartament(this.element)
            }

            if (select.value) {
              this.updateHiddenFields({ select, hiddenContainer })
            }

            updateHiddenInputs([
              { name: 'SingleLine1', value: 'UNW_Pregrado' },
              { name: 'SingleLine2', value: 'Web Facultades' }
            ], this.element)
            setNameAttributeCampus({ element: this.element })

            updateOptionsCareersByFacultad({ element: this.element, careers, value, facultadName })

            showCampusSelect({ element: this.element })
            this.removeCustomHiddenDepartament()
            break

          case FORMS.WORK:
          case FORMS.VIRTUAL:
            this.element.action = FORM_GENERAL_VIRTUAL

            if (value === FORMS.WORK) {
              removeNameAttributeCampus({ element: this.element })
              removeSelectDepartament(this.element)
            }

            resetCustomHidden({ element: this.element })
            hideCampusSelect({ value, element: this.element })
            this.element.action = FORM_GENERAL_VIRTUAL
            setClaseName('f-50', this.element)
            select.setAttribute('name', 'SingleLine5')

            updateHiddenInputs([
              { name: 'SingleLine1', value: 'UNW_Pregrado_Distancia' },
              { name: 'SingleLine2', value: 'Web Facultades – Virtual' }
            ], this.element)
            if (value === FORMS.VIRTUAL) {
              if (departaments.length > 0) {
                createSelectDepartament({ element: this.element })
              }
            }

            if (select.value) {
              this.updateHiddenFields({ select, hiddenContainer })
            }
            updateOptionsCareersByFacultad({ element: this.element, careers, value: 'virtual', facultadName })
            this.removeCustomHiddenDepartament()
            break

          default:
            console.warn(`Opción inválida para form_mixto: "${radio.value}"`)
            break
        }
      })
    })
  }

  buildHiddenInputs({ facultyName, careerName, type }) {
    if (type === FORMS.PREGRADO) {
      return createHiddenInputs({
        type,
        fields: [
          { name: 'SingleLine4', facultyName },
          { name: 'SingleLine3', facultyName },
          { name: 'SingleLine6', careerName }
        ]
      })
    }

    if (type === FORMS.VIRTUAL || type === FORMS.WORK) {
      return createHiddenInputs({
        type,
        fields: [
          { name: 'SingleLine4', facultyName },
          { name: 'SingleLine3', facultyName },
          { name: 'SingleLine6', careerName }
        ]
      })
    }

    return ''
  }

  updateHiddenFields({ select, hiddenContainer, type }) {
    const selectedOption = select.options[select.selectedIndex]
    const parentOptgroup = selectedOption.parentElement

    if (parentOptgroup.tagName !== 'OPTGROUP') return

    const html = this.buildHiddenInputs({
      facultyName: parentOptgroup.label,
      careerName: selectedOption.textContent.trim(),
      type
    })

    hiddenContainer.innerHTML = html
  }

  handleCarrersChange() {
    const select = this.element.querySelector('#careerSelect')
    if (!select) return

    const campus = window.appConfigUnw.campus || []

    const hiddenContainer = this.element.querySelector('.custom-hidden')

    const boundUpdate = () => {
      const checked = this.element.querySelector('input[name="form_mixto"]:checked')
      const selectedOption = select.options[select.selectedIndex]

      if (!selectedOption) return

      const parentOptgroup = selectedOption.parentElement
      if (!parentOptgroup || parentOptgroup.tagName !== 'OPTGROUP') return

      const slugCareers = selectedOption.dataset.key
      const modalidad = selectedOption.dataset.mode

      const type = checked?.value || 'virtual'

      this.updateHiddenFields({ select, hiddenContainer, type })
      buildOptionsCampus({ campus, slugCareers, modalidad, element: this.element })
    }

    select.addEventListener('change', boundUpdate)
    this.element
      .querySelectorAll('input[name="form_mixto"]')
      .forEach(radio => radio.addEventListener('change', boundUpdate))

    boundUpdate()
  }

  handleCampusChange() {
    const select = this.element.querySelector('#campusSelect')
    if (!select) return

    select.addEventListener('change', (event) => {
      const selectedOption = event.target.options[event.target.selectedIndex]
      const text = selectedOption.textContent.trim()
      const value = selectedOption.value
      if (value) {
        updateHiddenFieldCampus({ text, value, element: this.element })
      }
    })
  }

  handleDepartamentChange() {
    document.addEventListener('change', (event) => {
      const target = event.target

      if (target && target.matches('#departament')) {
        const form = target.closest('form')
        if (!form) return

        const selectedOption = target.options[target.selectedIndex]
        const text = selectedOption?.textContent.trim() || ''
        const customDepartament = this.element.querySelector('.custom-hidden-departament')
        if (customDepartament) {
          customDepartament.innerHTML = `<input type="hidden" name="SingleLine9" value="${text}">`
        }
      }
    })
  }
}
