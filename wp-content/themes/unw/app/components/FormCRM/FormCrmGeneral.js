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

    console.log(this.element, 'a')
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
    console.log(radios.length, 'ss')
    if (!radios.length) return

    radios.forEach(radio => {
      radio.addEventListener('change', () => {
        if (!radio.checked) return

        const value = radio.value.trim().toLowerCase()

        switch (value) {
          case 'pregrado':
            this.element.action = FORM_GENERAL_PRESENCIAL
            setClaseName('f-100', this.element)

            if (departaments.length > 0) {
              removeSelectDepartament(this.element)
            }
            break

          case 'virtual':
            this.element.action = FORM_GENERAL_VIRTUAL
            setClaseName('f-50', this.element)
            alert(departaments.length)
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
