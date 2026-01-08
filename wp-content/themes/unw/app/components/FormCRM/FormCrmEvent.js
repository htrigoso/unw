
import { buildOptionsCampus, createHiddenInputs, createSelectDepartament, FORMS, hideCampusSelect, resetCustomHidden, removeNameAttributeCampus, removeSelectDepartament, setClaseName, setNameAttributeCampus, updateHiddenInputs, updateOptionsCareers, validateInputs, showCampusSelect, validatePhone, updateHiddenFieldCampusEvent } from './utils'
import { handleFormSubmitTracking, getFormData } from '../../utils/incubeta'

// ==========================
// Constantes de formularios
// ==========================
const FORM_GENERAL_PRESENCIAL =
  'https://forms.zohopublic.com/adminzoho11/form/EventosHbridov2/formperma/2j3H_F_LzgaCnNmjSksgBTd3Z0M_D03NvmeOIsRMhwM/htmlRecords/submit'

const FORM_GENERAL_VIRTUAL =
  'https://forms.zohopublic.com/adminzoho11/form/EventosHbridov2/formperma/2j3H_F_LzgaCnNmjSksgBTd3Z0M_D03NvmeOIsRMhwM/htmlRecords/submit'

export default class FormCrmEvent {
  constructor({ element, container }) {
    this.element = element
    this.formContainer = container
    this.isSubmitting = false
    this.createListeners()
  }

  // ==========================
  // Inicializadores
  // ==========================
  createListeners() {
    validateInputs()
    validatePhone()
    this.updateRadioModalidad() // Inicializar valor
    this.handleFormMixtoChange()
    this.handleCarrersChange()
    this.handleDepartamentChange()
    this.handleCampusChange()
    this.handleFormSubmit()
  }

  handleFormSubmit() {
    if (!this.element) return

    this.element.addEventListener('submit', async (event) => {
      // Prevenir doble envío
      if (this.isSubmitting) {
        event.preventDefault()
        return
      }

      this.isSubmitting = true

      const formData = getFormData(this.element)

      // Usar función de Incubeta para tracking
      await handleFormSubmitTracking(this.element, formData, (dataLayerEvent) => {
        console.log('✅ DataLayer validado (submit):', dataLayerEvent)
      })
    })
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

  updateRadioModalidad() {
    if (!this.element) return

    const hiddenRadio = this.element.querySelector('#hidden-radio-modalidad')
    if (!hiddenRadio) return

    const valorSeleccionado = document.querySelector('input[name="form_mixto"]:checked')?.value || ''

    if (valorSeleccionado === 'pregrado') {
      hiddenRadio.value = 'Presencial'
    } else if (valorSeleccionado) {
      hiddenRadio.value = 'Carreras gente que trabaja'
    } else {
      hiddenRadio.value = ''
    }
  }

  handleFormMixtoChange() {
    if (!this.element) return
    const radios = this.element.querySelectorAll('input[name="form_mixto"]')
    if (!radios.length) return

    const departaments = window.appConfigUnw.departaments || []
    const careers = window.appConfigUnw.careers || []

    radios.forEach(radio => {
      radio.addEventListener('change', () => {
        if (!radio.checked) return

        // Actualizar campo Radio hidden
        this.updateRadioModalidad()

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
              { name: 'SingleLine11', value: 'UNW_pregrado' }
            ], this.element)
            setNameAttributeCampus({ element: this.element })

            updateOptionsCareers({ element: this.element, careers, value })

            showCampusSelect({ element: this.element })
            this.removeCustomHiddenDepartament()
            this.degreeofstudies(value)
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
            select.setAttribute('name', 'SingleLine3')

            updateHiddenInputs([
              { name: 'SingleLine11', value: 'UNW_a_distancia' }
            ], this.element)
            if (value === FORMS.VIRTUAL) {
              if (departaments.length > 0) {
                createSelectDepartament({ element: this.element, name: 'SingleLine8' })
              }
            }

            if (select.value) {
              this.updateHiddenFields({ select, hiddenContainer })
            }
            updateOptionsCareers({ element: this.element, careers, value: 'virtual' })
            this.removeCustomHiddenDepartament()
            this.degreeofstudies(value)
            break

          default:
            console.warn(`Opción inválida para form_mixto: "${radio.value}"`)
            break
        }
      })
    })
  }

  buildHiddenInputs({ facultyName, careerName, type }) {
    return createHiddenInputs({
      type,
      fields: [
        { name: 'SingleLine5', facultyName },
        { name: 'SingleLine4', careerName }
      ]
    })
  }

  updateHiddenFields({ select, hiddenContainer }) {
    const checked = document.querySelector('input[name="form_mixto"]:checked')
    const selectedOption = select.options[select.selectedIndex]
    const parentOptgroup = selectedOption.parentElement

    if (parentOptgroup.tagName !== 'OPTGROUP') return

    const html = this.buildHiddenInputs({
      facultyName: parentOptgroup.label,
      careerName: selectedOption.textContent.trim(),
      type: checked.value
    })

    hiddenContainer.innerHTML = html
  }

  handleCarrersChange() {
    const form = document.querySelector(`${this.formContainer} `)
    if (!form) return
    const select = document.getElementById('careerSelect')

    const campus = window.appConfigUnw.campus || []

    const hiddenContainer = form.querySelector('.custom-hidden')

    const boundUpdate = () => {
      const checked = document.querySelector('input[name="form_mixto"]:checked')
      const selectedOption = select.options[select.selectedIndex]

      if (!selectedOption) return

      const parentOptgroup = selectedOption.parentElement
      if (!parentOptgroup || parentOptgroup.tagName !== 'OPTGROUP') return

      if (checked) {
        this.updateHiddenFields({ select, hiddenContainer })
        const slugCareers = selectedOption.dataset.key
        const modalidad = selectedOption.dataset.mode

        buildOptionsCampus({ campus, slugCareers, modalidad, element: this.element })
      }
    }

    select.addEventListener('change', boundUpdate)
    document
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
        updateHiddenFieldCampusEvent({ text, value, element: this.element })
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

  degreeofstudies(type) {
    const htmlDegree = this.element.querySelector('[data-html-name="degree"]')
    if (!htmlDegree) return
    const selectDegree = htmlDegree.querySelector('select')
    if (!selectDegree) return

    if (type === 'pregrado') {
      // Hacer el campo requerido y agregar el name
      selectDegree.setAttribute('required', 'required')
      selectDegree.setAttribute('name', 'Dropdown2')
      htmlDegree.style.display = ''
    } else if (type === 'virtual' || type === 'work') {
      // Quitar el campo requerido y el name, ocultar el campo
      selectDegree.removeAttribute('required')
      selectDegree.removeAttribute('name')
      htmlDegree.style.display = 'none'
    }
  }
}
