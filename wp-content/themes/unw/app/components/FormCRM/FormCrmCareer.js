import Component from '../../classes/Component'
import { buildOptionsCampusCareers, createSelectCampus, createSelectDepartament, FORMS, removeSelectCampus, removeSelectDepartament, sanitizeForInput, setClaseName, validateInputs } from './utils'

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
    validateInputs()
    this.handleDepartmentChange()
    this.handleFormMixtoChange()
    this.handleDepartamentChange()
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
      hiddenDepartament.value = sanitizeForInput(selectedText)
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
          case FORMS.PREGRADO:
            this.element.action = FORM_CARRIERS_PRESENCIAL
            setClaseName('f-100', this.element)
            removeSelectDepartament(this.element)

            if (isMixto && campus.length > 0) {
              createSelectCampus(this.element, 'SingleLine8')
            }

            buildOptionsCampusCareers({ campus, element: this.element })
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
            break
          case FORMS.WORK:
            this.element.action = FORM_CARRIERS_VIRTUAL
            removeSelectCampus(this.element)
            setClaseName('f-100', this.element)
            removeSelectDepartament(this.element)
            break

          default:
            console.warn(`Opción inválida para form_mixto: "${radio.value}"`)
            break
        }
      })
    })
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
}
