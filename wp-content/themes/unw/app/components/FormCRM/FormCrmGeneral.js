import Component from '../../classes/Component'
import { createSelectDepartament, removeSelectDepartament, setClaseName } from './utils'

// ==========================
// Constantes de formularios
// ==========================
const FORM_GENERAL_PRESENCIAL =
  'https://forms.zohopublic.com/adminzoho11/form/WebPreWiener/formperma/l1wwdmdtbCUdnHXBKB4zGg2X1eb12Fnp-VgoBjOAEmA/htmlRecords/submit'

const FORM_GENERAL_VIRTUAL =
  'https://forms.zohopublic.com/adminzoho11/form/WebSolicitaInformacinVirtual/formperma/kEghJarUi7QiD6-qDLpQpVMV_uW8uH0m1XlinN5KPls/htmlRecords/submit'

export default class FormCrmGeneral extends Component {
  constructor({ element, container, onCompleted }) {
    super({ element, elements: {} })

    this.formContainer = container
    this.createListeners()
  }

  // ==========================
  // Inicializadores
  // ==========================
  createListeners() {
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
            select.setAttribute('name', 'SingleLine3')
            this.element.action = FORM_GENERAL_PRESENCIAL
            setClaseName('f-100', this.element)

            if (departaments.length > 0) {
              removeSelectDepartament(this.element)
            }

            // ✅ si hay una carrera seleccionada, actualizar inputs
            if (select.value) {
              this.updateHiddenFields({ select, hiddenContainer })
            }
            document.querySelector('input[name="SingleLine1"]').value = 'UNW_Pregrado'
            document.querySelector('input[name="SingleLine2"]').value = 'Web Admisión I'
            break

          case 'virtual':
            this.element.action = FORM_GENERAL_VIRTUAL
            setClaseName('f-50', this.element)
            select.setAttribute('name', 'SingleLine5')
            document.querySelector('input[name="SingleLine1"]').value = 'UNW_Pregrado_Distancia'
            document.querySelector('input[name="SingleLine2"]').value = 'Web Admisión I - Virtual'
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
      return `
        <input type="hidden" name="SingleLine3" value="${facultyName}">
        <input type="hidden" name="SingleLine6" value="${careerName}">
      `
    }

    if (type === 'virtual') {
      return `
        <input type="hidden" name="SingleLine4" value="${facultyName}">
        <input type="hidden" name="SingleLine6" value="${careerName}">
      `
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
    const form = document.querySelector(`${this.formContainer}`)
    if (!form) return
    const select = document.getElementById('careerSelect')

    const hiddenContainer = form.querySelector('.custom-hidden')

    const boundUpdate = () => {
      const checked = document.querySelector('input[name="form_mixto"]:checked')
      const selectedOption = select.options[select.selectedIndex]

      if (!selectedOption) return

      const parentOptgroup = selectedOption.parentElement
      if (!parentOptgroup || parentOptgroup.tagName !== 'OPTGROUP') return

      const facultyName = parentOptgroup.label
      const careerName = selectedOption.textContent.trim()
      if (checked) {
        // ✅ con radio seleccionado → usa lógica normal
        this.updateHiddenFields({ select, hiddenContainer })
      } else {
        // ✅ sin radio → aún actualiza con datos de carrera/optgroup
        hiddenContainer.innerHTML = `
          <input type="hidden" name="SingleLine3" value="${facultyName}">
          <input type="hidden" name="SingleLine6" value="${careerName}">
        `
      }
    }

    // eventos
    select.addEventListener('change', boundUpdate)
    document
      .querySelectorAll('input[name="form_mixto"]')
      .forEach(radio => radio.addEventListener('change', boundUpdate))

    // inicializar al cargar
    boundUpdate()
  }

  handleDepartamentChange() {
    document.addEventListener('change', (event) => {
      const target = event.target

      if (target && target.matches('#departament')) {
        const form = target.closest('form')
        if (!form) return

        console.log('ok')

        const selectedOption = target.options[target.selectedIndex]
        const text = selectedOption?.textContent.trim() || ''

        document.querySelector('input[name="SingleLine9"]').value = text
      }
    })
  }
}
