import Component from '../../classes/Component'
import { createHiddenInputs, createSelectDepartament, removeSelectDepartament, setClaseName, updateDepartmentHiddenInput, updateHiddenCareerFields, updateHiddenInputs, validateInputs } from './utils'

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
    this.handleCarrers()
    this.handleDepartamentChange()
  }

  // ==========================
  // Handlers
  // ==========================

  handleFormMixtoChange() {
    const radios = this.element.querySelectorAll('input[name="form_mixto"]')
    const departaments = JSON.parse(this.element.dataset.departaments || '[]')

    if (!radios.length) return

    radios.forEach(radio => {
      radio.addEventListener('change', () => {
        if (!radio.checked) return

        const value = radio.value.trim().toLowerCase()
        const select = this.element.querySelector('#careerSelect')
        const hiddenContainer = this.element.querySelector('.custom-hidden')

        switch (value) {
          case 'pregrado':
          case 'work':
            select.setAttribute('name', 'SingleLine3')

            setClaseName('f-100', this.element)

            if (departaments.length > 0) {
              removeSelectDepartament(this.element)
            }

            // ✅ si hay una carrera seleccionada, actualizar inputs
            if (select.value) {
              this.updateHiddenFields({ select, hiddenContainer })
            }

            this.element.action = (value === 'work')
              ? FORM_ADMISSION_VIRTUAL
              : FORM_ADMISSION_PRESENCIAL
            if (value === 'work') {
              // document.querySelector('input[name="SingleLine1"]').value = 'UNW_Pregrado_Distancia'
              // document.querySelector('input[name="SingleLine2"]').value = 'Web Admisión I - Virtual'

              updateHiddenInputs([
                { name: 'SingleLine1', value: 'UNW_Pregrado_Distancia' },
                { name: 'SingleLine2', value: 'Web Admisión I - Virtual' }
              ])
            }
            if (value === 'pregrado') {
              // document.querySelector('input[name="SingleLine1"]').value = 'UNW_Pregrado'
              // document.querySelector('input[name="SingleLine2"]').value = 'Web Admisión I'

              updateHiddenInputs([
                { name: 'SingleLine1', value: 'UNW_Pregrado' },
                { name: 'SingleLine2', value: 'Web Admisión I' }
              ])
            }

            break

          case 'virtual':
            this.element.action = FORM_ADMISSION_VIRTUAL
            setClaseName('f-50', this.element)
            select.setAttribute('name', 'SingleLine5')
            // document.querySelector('input[name="SingleLine1"]').value = 'UNW_Pregrado_Distancia'
            // document.querySelector('input[name="SingleLine2"]').value = 'Web Admisión I - Virtual'
            updateHiddenInputs([
              { name: 'SingleLine1', value: 'UNW_Pregrado_Distancia' },
              { name: 'SingleLine2', value: 'Web Admisión I - Virtual' }
            ])
            if (departaments.length > 0) {
              createSelectDepartament({ element: this.element })
            }

            // ✅ si hay una carrera seleccionada, actualizar inputs
            if (select.value) {
              this.updateHiddenFields({ select, hiddenContainer })
            }
            break

          default:
            console.warn(`Opción inválida para form_mixto: "${radio.value}"`)
            break
        }
      })
    })
  }

  buildHiddenInputs({ facultyName, careerName, type }) {
    if (type === 'pregrado') {
      //   return `
      //   <input type="hidden" name="SingleLine5" value="${facultyName}">
      //   <input type="hidden" name="SingleLine4" value="${careerName}">
      // `
      return createHiddenInputs({
        type,
        fields: [
          { name: 'SingleLine5', facultyName },
          { name: 'SingleLine4', careerName }
        ]
      })
    }

    if (type === 'virtual') {
      //   return `
      //   <input type="hidden" name="SingleLine4" value="${facultyName}">
      //   <input type="hidden" name="SingleLine6" value="${careerName}">
      // `

      return createHiddenInputs({
        type,
        fields: [
          { name: 'SingleLine4', facultyName },
          { name: 'SingleLine6', careerName }
        ]
      })
    }
    if (type === 'work') {
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
    const checked = document.querySelector('input[name="form_mixto"]:checked')
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

  handleCarrers() {
    // const select = document.getElementById('careerSelect')
    // const form = document.querySelector(`${this.formContainer}`)
    // const hiddenContainer = form.querySelector('.custom-hidden')

    // const boundUpdate = () => {
    //   const checked = document.querySelector('input[name="form_mixto"]:checked')
    //   const selectedOption = select.options[select.selectedIndex]

    //   if (!selectedOption) return

    //   const parentOptgroup = selectedOption.parentElement
    //   if (!parentOptgroup || parentOptgroup.tagName !== 'OPTGROUP') return

    //   const facultyName = parentOptgroup.label
    //   const careerName = selectedOption.textContent.trim()
    //   if (checked) {
    //     // ✅ con radio seleccionado → usa lógica normal
    //     this.updateHiddenFields({ select, hiddenContainer })
    //   } else {
    //     // ✅ sin radio → aún actualiza con datos de carrera/optgroup
    //     hiddenContainer.innerHTML = `
    //     <input type="hidden" name="SingleLine5" value="${facultyName}">
    //     <input type="hidden" name="SingleLine4" value="${careerName}">
    //   `
    //   }
    // }

    // // eventos
    // select.addEventListener('change', boundUpdate)
    // document
    //   .querySelectorAll('input[name="form_mixto"]')
    //   .forEach(radio => radio.addEventListener('change', boundUpdate))

    // // inicializar al cargar
    // boundUpdate()

    updateHiddenCareerFields({
      facultyField: 'SingleLine5', careerField: 'SingleLine4', formContainer: this.formContainer
    })
  }

  handleDepartamentChange() {
    // document.addEventListener('change', (event) => {
    //   const target = event.target

    //   if (target && target.matches('#departament')) {
    //     const form = target.closest('form')
    //     if (!form) return

    //     const selectedOption = target.options[target.selectedIndex]
    //     const text = selectedOption?.textContent.trim() || ''

    //     document.querySelector('input[name="SingleLine9"]').value = text
    //   }
    // })
    updateDepartmentHiddenInput({
      fieldName: 'SingleLine9'
    })
  }
}
