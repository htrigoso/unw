import Component from '../../classes/Component'
import { createSelectDepartament, removeSelectDepartament, setClaseName } from './utils'

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
    this.createListeners()
  }

  // ==========================
  // Inicializadores
  // ==========================
  createListeners() {
    this.handleFormMixtoChange()
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

        switch (value) {
          case 'pregrado':
            this.element.action = FORM_ADMISSION_PRESENCIAL
            setClaseName('f-100', this.element)

            if (departaments.length > 0) {
              removeSelectDepartament(this.element)
            }
            break

          case 'virtual':
            this.element.action = FORM_ADMISSION_VIRTUAL
            setClaseName('f-50', this.element)

            if (departaments.length > 0) {
              createSelectDepartament({
                element: this.element
              })
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
