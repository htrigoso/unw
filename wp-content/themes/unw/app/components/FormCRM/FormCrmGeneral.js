import Component from '../../classes/Component'
import { buildOptionsCampus, createHiddenInputs, createSelectDepartament, FORMS, hideCampusSelect, resetCustomHidden, removeHiddenFieldCampus, removeNameAttributeCampus, removeSelectDepartament, setClaseName, setNameAttributeCampus, updateHiddenFieldCampus, updateHiddenInputs, updateOptionsCareers, validateInputs } from './utils'

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
          case FORMS.WORK:
            resetCustomHidden({ element: this.element })
            setClaseName('f-100', this.element)

            if (departaments.length > 0) {
              removeSelectDepartament(this.element)
            }

            if (select.value) {
              this.updateHiddenFields({ select, hiddenContainer })
            }

            this.element.action = (value === FORMS.WORK)
              ? FORM_GENERAL_VIRTUAL
              : FORM_GENERAL_PRESENCIAL

            if (value === FORMS.PREGRADO) {
              updateHiddenInputs([
                { name: 'SingleLine1', value: 'UNW_Pregrado' },
                { name: 'SingleLine2', value: 'Web Admisión I' }
              ])
              setNameAttributeCampus({ element: this.element })

              updateOptionsCareers({ element: this.element, careers, value })
            }

            if (value === FORMS.WORK) {
              updateHiddenInputs([
                { name: 'SingleLine1', value: 'UNW_Pregrado_Distancia' },
                { name: 'SingleLine2', value: 'Web Admisión I - Virtual' }
              ])
              removeNameAttributeCampus({ element: this.element })
              updateOptionsCareers({ element: this.element, careers, value: 'virtual' })
            }

            hideCampusSelect({ value, element: this.element })

            break

          case FORMS.VIRTUAL:
            resetCustomHidden({ element: this.element })
            hideCampusSelect({ value, element: this.element })
            this.element.action = FORM_GENERAL_VIRTUAL
            setClaseName('f-50', this.element)
            select.setAttribute('name', 'SingleLine5')
            removeNameAttributeCampus({ element: this.element })
            updateHiddenInputs([
              { name: 'SingleLine1', value: 'UNW_Pregrado_Distancia' },
              { name: 'SingleLine2', value: 'Web Admisión I - Virtual' }
            ])
            if (departaments.length > 0) {
              createSelectDepartament({ element: this.element })
            }

            if (select.value) {
              this.updateHiddenFields({ select, hiddenContainer })
            }
            updateOptionsCareers({ element: this.element, careers, value })
            break

          default:
            console.warn(`Opción inválida para form_mixto: "${radio.value}"`)
            break
        }
      })
    })
  }

  buildHiddenInputs({ facultyName, careerName, type }) {
    console.log(type)

    if (type === FORMS.PREGRADO) {
      return createHiddenInputs({
        type,
        fields: [
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

    const campus = JSON.parse(this.element.dataset.campus || '[]')

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

        document.querySelector('input[name="SingleLine9"]').value = text
      }
    })
  }
}
