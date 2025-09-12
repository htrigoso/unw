import Component from '../../classes/Component'
import { buildOptionsCampus, createHiddenInputs, createSelectDepartament, FORMS, hideCampusSelect, removeNameAttributeCampus, removeSelectDepartament, resetCustomHidden, setClaseName, setNameAttributeCampus, showCampusSelect, updateHiddenFieldCampus, updateHiddenInputs, updateOptionsCareers, validateInputs } from './utils'

// ==========================
// Constantes de formularios
// ==========================
const FORM_ADMISSION_PRESENCIAL =
  'https://forms.zohopublic.com/adminzoho11/form/Admisin/formperma/qazbrVloDUNKCisJII7v7HMG2gMsSkD30FMV9GEJM4E/htmlRecords/submit'

const FORM_ADMISSION_VIRTUAL =
  'https://forms.zohopublic.com/adminzoho11/form/WebAdmisinIVirtual/formperma/pQcbclF2i7Gt1QAKd0zl3Ow5bT3dxSrcE3-ybtsYQoE/htmlRecords/submit'

export default class FormCrmAdmission extends Component {
  constructor({ element, container, onCompleted }) {
    super({ element, elements: {} })
    this.formContainer = container
    this.createListeners()
  }

  // ==========================
  // Inicializadores
  // ==========================
  createListeners() {
    validateInputs()
    this.handleFormMixtoChange()
    this.handleCarrersChange()
    this.handleDepartamentChange()
    this.handleCampusChange()
  }

  // ==========================
  // Handlers
  // ==========================

  handleFormMixtoChange() {
    if (!this.element) return
    const radios = this.element.querySelectorAll('input[name="form_mixto"]')

    if (!radios.length) return
    const departaments = JSON.parse(this.element.dataset.departaments || '[]')
    const careers = JSON.parse(this.element.dataset.careers || '[]')

    radios.forEach(radio => {
      radio.addEventListener('change', () => {
        if (!radio.checked) return

        const value = radio.value.trim().toLowerCase()
        const select = this.element.querySelector('#careerSelect')
        const hiddenContainer = this.element.querySelector('.custom-hidden')

        switch (value) {
          case FORMS.PREGRADO:
            this.element.action = FORM_ADMISSION_PRESENCIAL
            resetCustomHidden({ element: this.element })
            select.setAttribute('name', 'SingleLine3')

            setClaseName('f-100', this.element)

            if (departaments.length > 0) {
              removeSelectDepartament(this.element)
            }

            if (select.value) {
              this.updateHiddenFields({ select, hiddenContainer })
            }

            updateHiddenInputs([
              { name: 'SingleLine1', value: 'UNW_Pregrado' },
              { name: 'SingleLine2', value: 'Web Admisión I' }
            ])

            setNameAttributeCampus({ element: this.element })

            updateOptionsCareers({ element: this.element, careers, value })

            showCampusSelect({ element: this.element })

            break

          case FORMS.WORK:
          case FORMS.VIRTUAL:
            if (value === FORMS.WORK) {
              select.setAttribute('name', 'SingleLine5')
              removeSelectDepartament(this.element)
              removeNameAttributeCampus({ element: this.element })
            }

            resetCustomHidden({ element: this.element })
            hideCampusSelect({ value, element: this.element })
            this.element.action = FORM_ADMISSION_VIRTUAL
            setClaseName('f-50', this.element)

            select.setAttribute('name', 'SingleLine5')

            updateHiddenInputs([
              { name: 'SingleLine1', value: 'UNW_Pregrado_Distancia' },
              { name: 'SingleLine2', value: 'Web Admisión I - Virtual' }
            ])
            if (value === FORMS.VIRTUAL) {
              if (departaments.length > 0) {
                createSelectDepartament({ element: this.element })
              }
            }

            if (select.value) {
              this.updateHiddenFields({ select, hiddenContainer })
            }
            updateOptionsCareers({ element: this.element, careers, value: 'virtual' })
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
          { name: 'SingleLine5', facultyName },
          { name: 'SingleLine4', careerName }
        ]
      })
    }

    if (type === FORMS.VIRTUAL || type === FORMS.WORK) {
      return createHiddenInputs({
        type,
        fields: [
          { name: 'SingleLine4', facultyName },
          { name: 'SingleLine6', careerName }
        ]
      })
    }

    return ''
  }

  updateHiddenFields({ select, hiddenContainer }) {
    const checked = this.element.querySelector('input[name="form_mixto"]:checked')
    const selectedOption = select.options[select.selectedIndex]
    const parentOptgroup = selectedOption.parentElement
    const careerName = selectedOption.textContent.trim()

    if (parentOptgroup.tagName !== 'OPTGROUP') return

    const facultyName = parentOptgroup.label
    const html = this.buildHiddenInputs({
      facultyName,
      careerName,
      type: checked.value
    })

    hiddenContainer.innerHTML = html
  }

  handleCarrersChange() {
    const form = this.element

    if (!form) return

    const select = form.querySelector('#careerSelect')
    const campus = JSON.parse(this.element.dataset.campus || '[]')

    const hiddenContainer = form.querySelector('.custom-hidden')

    const boundUpdate = () => {
      const checked = form.querySelector('input[name="form_mixto"]:checked')
      const selectedOption = select.options[select.selectedIndex]

      if (!selectedOption) return

      const parentOptgroup = selectedOption.parentElement
      if (!parentOptgroup || parentOptgroup.tagName !== 'OPTGROUP') return
      const facultyName = parentOptgroup.label
      const careerName = selectedOption.textContent.trim()
      if (checked) {
        this.updateHiddenFields({ select, hiddenContainer })
        const slugCareers = selectedOption.dataset.key
        const modalidad = selectedOption.dataset.mode
        buildOptionsCampus({ campus, slugCareers, modalidad, element: this.element })
      } else {
        // Cuando no exist el check
        hiddenContainer.innerHTML = `
        <input type="hidden" name="SingleLine5" value="${facultyName}">
        <input type="hidden" name="SingleLine4" value="${careerName}">`
      }
    }

    select.addEventListener('change', boundUpdate)
    this.element.querySelectorAll('input[name="form_mixto"]')
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
    this.element.addEventListener('change', (event) => {
      const target = event.target

      if (target && target.matches('#departament')) {
        const form = target.closest('form')
        if (!form) return

        const selectedOption = target.options[target.selectedIndex]
        const text = selectedOption?.textContent.trim() || ''

        this.element.querySelector('input[name="SingleLine9"]').value = text
      }
    })
  }
}
