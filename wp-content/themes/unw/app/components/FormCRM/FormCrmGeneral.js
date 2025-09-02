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
    document.addEventListener('change', (event) => {
      const target = event.target

      if (target && target.matches('input[name="form_mixto"]')) {
        if (!target.checked) return

        const value = target.value.trim().toLowerCase()
        const departaments = JSON.parse(
          target.closest('form')?.dataset.departaments || '[]'
        )
        const form = target.closest('form')

        switch (value) {
          case 'pregrado':
            form.action = FORM_GENERAL_PRESENCIAL
            setClaseName('f-100', form)

            if (departaments.length > 0) {
              removeSelectDepartament(form)
            }
            break

          case 'virtual':
            form.action = FORM_GENERAL_VIRTUAL
            setClaseName('f-50', form)

            if (departaments.length > 0) {
              createSelectDepartament({ element: form })
            }
            break

          default:
            console.warn(`Opción inválida para form_mixto: "${target.value}"`)
            break
        }
      }
    })
  }
}
