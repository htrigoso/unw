import Component from '../../classes/Component'
import { createSelectCampus, createSelectDepartament, removeSelectCampus, removeSelectDepartament, setClaseName } from './utils'

// ==========================
// Constantes de formularios
// ==========================
const FORM_CARRIERS_PRESENCIAL =
  'https://forms.zohopublic.com/adminzoho11/form/WebCarreras/formperma/T3JIAMOGnJxkHbk-qsPtLTz8XUz9NaQDXxHjjRe_AKk/htmlRecords/submit'

const FORM_CARRIERS_VIRTUAL =
  'https://forms.zohopublic.com/adminzoho11/form/WebCarrerasVirtual/formperma/f1PqvMaVQ3bdPj9ELVT4XJWYy_eHSjrAECWfWqSB_uE/htmlRecords/submit'

export default class FormCrmCareer extends Component {
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
            setClaseName('f-100', this.element)
            removeSelectDepartament(this.element)

            if (isMixto && campus.length > 0) {
              createSelectCampus(this.element)
            }
            break

          case 'virtual':
            this.element.action = FORM_CARRIERS_VIRTUAL
            setClaseName('f-50', this.element)
            createSelectDepartament({
              position: 'prepend',
              element: this.element
            })

            if (isMixto && campus.length > 0) {
              removeSelectCampus(this.element)
            }
            break

          default:
            console.warn(`Opción inválida para form_mixto: "${radio.value}"`)
            break
        }
      })
    })
  }
}
