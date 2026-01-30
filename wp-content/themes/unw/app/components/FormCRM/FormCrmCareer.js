import { getFormData, handleFormSubmitTracking } from '../../utils/incubeta'
import { buildOptionsCampusCareers, createSelectCampus, createSelectDepartament, FORMS, removeSelectCampus, removeSelectDepartament, sanitizeForInput, setClaseName, validateInputs, validatePhone } from './utils'
import {
  disableSubmitButton,
  restoreSubmitButton,
  pushTrackingEvent,
  validateFormConfiguration,
  validateFormData,
  submitFormWithDelay,
  preventDuplicateSubmit,
  showFormError
} from '../../utils/form-submit-handler'
// ==========================
// Constantes de formularios
// ==========================
const FORM_CARRIERS_PRESENCIAL =
  'https://forms.zohopublic.com/adminzoho11/form/WebCarreras/formperma/T3JIAMOGnJxkHbk-qsPtLTz8XUz9NaQDXxHjjRe_AKk/htmlRecords/submit'

const FORM_CARRIERS_VIRTUAL =
  'https://forms.zohopublic.com/adminzoho11/form/WebCarrerasVirtual/formperma/f1PqvMaVQ3bdPj9ELVT4XJWYy_eHSjrAECWfWqSB_uE/htmlRecords/submit'

export default class FormCrmCareer {
  constructor({ element }) {
    this.element = element
    this.isSubmitting = false
    this.createListeners()
  }

  // ==========================
  // Inicializadores
  // ==========================
  createListeners() {
    validateInputs()
    validatePhone()
    this.handleDepartmentChange()
    this.handleFormMixtoChange()
    this.handleDepartamentChange()
    this.handleCampusChange()
    this.handleFormSubmit()
  }

  // ==========================
  // Handlers
  // ==========================

  handleFormSubmit() {
    if (!this.element) return

    this.element.addEventListener('submit', async (event) => {
      event.preventDefault()
      event.stopImmediatePropagation()

      // Validar configuración del formulario
      if (!validateFormConfiguration(this.element)) {
        return
      }

      // Prevenir doble envío
      if (preventDuplicateSubmit(this)) {
        return
      }

      // Gestionar estado del botón
      const { button, originalText } = disableSubmitButton(this.element)

      try {
        // Obtener y validar datos del formulario
        const formData = getFormData(this.element)

        if (!validateFormData(formData)) {
          throw new Error('Datos de formulario inválidos')
        }

        // Tracking GTM
        pushTrackingEvent(this.element)

        // Tracking Incubeta
        await handleFormSubmitTracking(this.element, formData, (dataLayerEvent) => {
          console.log('✅ DataLayer validado (Incubeta):', dataLayerEvent)
        })

        // Enviar formulario con delay para GTM
        await submitFormWithDelay(this.element)
      } catch (error) {
        // Restaurar estado del botón
        restoreSubmitButton(button, originalText)

        // Permitir reintentar
        this.isSubmitting = false

        // Feedback al usuario
        showFormError('Ocurrió un error al enviar el formulario. Por favor, intenta nuevamente.', error)
      }
    })
  }

  handleDepartmentChange() {
    const selectDepartament = this.element.querySelector('#departament')
    const hiddenDepartament = this.element.querySelector('#hidden_departament')
    if (!selectDepartament || !hiddenDepartament) return

    selectDepartament.addEventListener('change', () => {
      const selectedText =
        selectDepartament.options[selectDepartament.selectedIndex].text
      hiddenDepartament.value = sanitizeForInput(selectedText)
    })
  }

  handleFormMixtoChange() {
    const radios = this.element.querySelectorAll('input[name="form_mixto"]')
    const campus = window.appConfigUnw.campus || []
    const isMixto = JSON.parse(this.element.dataset.mixto || 0)
    const codePre = this.element.dataset.codePre || ''
    const codeVir = this.element.dataset.codeVir || ''
    if (!radios.length) return

    radios.forEach(radio => {
      radio.addEventListener('change', () => {
        if (!radio.checked) return

        const value = radio.value.trim().toLowerCase()

        switch (value) {
          case FORMS.PREGRADO:
            this.element.action = FORM_CARRIERS_PRESENCIAL
            setClaseName('f-100', this.element)
            removeSelectDepartament(this.element)

            if (isMixto && campus.length > 0) {
              createSelectCampus(this.element, 'SingleLine8')
            }

            buildOptionsCampusCareers({ campus, element: this.element })

            this.setCodeTypeCareer(codePre)
            this.swapHiddenFields(FORMS.PREGRADO) // Invertir campos para presencial
            break

          case FORMS.VIRTUAL:
            this.element.action = FORM_CARRIERS_VIRTUAL
            setClaseName('f-50', this.element)
            createSelectDepartament({
              position: 'prepend',
              name: 'SingleLine7',
              element: this.element
            })

            if (isMixto && campus.length > 0) {
              removeSelectCampus(this.element)
            }
            this.setCodeTypeCareer(codeVir)
            this.swapHiddenFields(FORMS.VIRTUAL) // Mantener orden normal para virtual
            break
          case FORMS.WORK:
            this.element.action = FORM_CARRIERS_VIRTUAL
            removeSelectCampus(this.element)
            setClaseName('f-100', this.element)
            removeSelectDepartament(this.element)
            this.setCodeTypeCareer(codeVir)
            this.swapHiddenFields(FORMS.WORK) // Mantener orden normal para work
            break

          default:
            console.warn(`Opción inválida para form_mixto: "${radio.value}"`)
            break
        }
      })
    })
  }

  swapHiddenFields(type) {
    const form = this.element
    console.log('here')

    if (!form) return

    const hiddenContainerVirtual = form.querySelector('.custom-hidden-virtual')

    if (!hiddenContainerVirtual) {
      return
    }
    const term = form.dataset.term || ''
    const pageTitle = form.dataset.pageTitle || ''

    if (type === FORMS.PREGRADO) {
      hiddenContainerVirtual.innerHTML = `
        <input type="hidden" id="field-page-title" name="SingleLine5" value="${pageTitle}">
        <input type="hidden" id="field-term" name="SingleLine3" value="${term}">
      `
    }
    if (type === FORMS.VIRTUAL || type === FORMS.WORK) {
      hiddenContainerVirtual.innerHTML = `
        <input type="hidden" id="field-page-title" name="SingleLine5" value="${term}">
        <input type="hidden" id="field-term" name="SingleLine3" value="${pageTitle}">
      `
    }
  }

  setCodeTypeCareer(value) {
    const codeInput = this.element.querySelector('input[name="SingleLine4"]')
    if (!codeInput) return

    codeInput.value = value
  }

  handleDepartamentChange() {
    this.element.addEventListener('change', (event) => {
      const target = event.target
      if (!target) return
      if (!['departament', 'campus'].includes(target.id)) return

      const selectedOption = target.options[target.selectedIndex]
      const text = selectedOption?.textContent.trim() || ''

      const hiddenContainer = this.element.querySelector('.custom-hidden')
      if (!hiddenContainer) return

      const checked = this.element.querySelector('input[name="form_mixto"]:checked')
      if (!checked) return

      const map = {
        pregrado: { campus: 'SingleLine7' },
        virtual: { departament: 'SingleLine8' }
      }

      const hiddenName = map[checked.value]?.[target.id]
      if (hiddenName) {
        hiddenContainer.innerHTML = `<input type="hidden" name="${hiddenName}" value="${text}">`
      }
    })
  }

  handleCampusChange() {
    const select = this.element.querySelector('#campus')
    if (!select) return

    select.addEventListener('change', (event) => {
      const selectedOption = event.target.options[event.target.selectedIndex]
      const text = selectedOption.textContent.trim()
      const value = selectedOption.value
      if (value) {
        console.log('ok')

        this.element.querySelector('.custom-hidden-campus').innerHTML = `
            <input type="hidden" name="SingleLine7" value="${text}">`
      }
    })
  }
}
