import Component from '../../classes/Component'
import { createHiddenInputs, createSelectDepartament, removeSelectDepartament, setClaseName, updateHiddenInputs, validateInputs } from './utils'

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

            setClaseName('f-100', this.element)

            if (departaments.length > 0) {
              removeSelectDepartament(this.element)
            }

            if (select.value) {
              this.updateHiddenFields({ select, hiddenContainer })
            }

            this.element.action = (value === 'work')
              ? FORM_GENERAL_VIRTUAL
              : FORM_GENERAL_PRESENCIAL
            if (value === 'work') {
              updateHiddenInputs([
                { name: 'SingleLine1', value: 'UNW_Pregrado_Distancia' },
                { name: 'SingleLine2', value: 'Web Admisión I - Virtual' }
              ])
            }
            if (value === 'pregrado') {
              updateHiddenInputs([
                { name: 'SingleLine1', value: 'UNW_Pregrado' },
                { name: 'SingleLine2', value: 'Web Admisión I' }
              ])
            }

            this.hideCampusSelect(value)
            if (value === 'pregrado') {
              this.setNameAttributeCampus()
            }
            if (value === 'work') {
              this.removeNameAttributeCampus()
            }

            break

          case 'virtual':
            this.hideCampusSelect(value)
            this.element.action = FORM_GENERAL_VIRTUAL
            setClaseName('f-50', this.element)
            select.setAttribute('name', 'SingleLine5')
            this.removeNameAttributeCampus()
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

  hideCampusSelect(value) {
    const radios = ['work', 'virtual']
    const campusField = this.element.querySelector('[data-html-name="campus"]')

    if (!campusField) return

    if (radios.includes(value)) {
      campusField.style.display = 'none'
      this.removeNameAttributeCampus()
    } else {
      campusField.style.display = ''
    }
  }

  buildHiddenInputs({ facultyName, careerName, type }) {
    if (type === 'pregrado') {
      return createHiddenInputs({
        type,
        fields: [
          { name: 'SingleLine3', facultyName },
          { name: 'SingleLine6', careerName }
        ]
      })
    }

    if (type === 'virtual' || type === 'work') {
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

      const facultyName = parentOptgroup.label
      const careerName = selectedOption.textContent.trim()
      if (checked) {
        this.updateHiddenFields({ select, hiddenContainer })
        const slugCareers = selectedOption.dataset.key

        this.buildOptionsCampus(campus, slugCareers)
      } else {
        hiddenContainer.innerHTML = `
        < input type = "hidden" name = "SingleLine3" value = "${facultyName}" >
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

  buildOptionsCampus(campus, slugCareers) {
    const campusList = campus[slugCareers] || []
    const select = this.element.querySelector('#campusSelect')

    if (!select) return
    this.removeHiddenFieldCampus()

    select.innerHTML = '<option value="" selected disabled>--Seleccione--</option>'

    if (campusList.length) {
      campusList.forEach(item => {
        const opt = document.createElement('option')
        opt.value = item.id
        opt.textContent = item.campus
        select.appendChild(opt)
      })
    }
  }

  handleCampusChange() {
    const select = this.element.querySelector('#campusSelect')
    if (!select) return

    select.addEventListener('change', (event) => {
      const selectedOption = event.target.options[event.target.selectedIndex]
      const text = selectedOption.textContent.trim() // texto visible
      const value = selectedOption.value // valor del option (id del campus)
      if (value) {
        this.updateHiddenFieldCampus(text, value)
      }
    })
  }

  updateHiddenFieldCampus(text, value) {
    this.element.querySelector('.custom-hidden-campus').innerHTML = `
            <input type="hidden" name="SingleLine8" value="${text}">
              <input type="hidden" name="SingleLine9" value="${value}">
                `
  }

  setNameAttributeCampus() {
    const select = this.element.querySelector('#campusSelect')
    if (select) {
      select.setAttribute('name', 'SingleLine9')
      select.setAttribute('required', true)
    }
  }

  removeNameAttributeCampus() {
    const select = this.element.querySelector('#campusSelect')
    if (select) {
      select.removeAttribute('name')
      select.removeAttribute('required')
    }
  }

  removeHiddenFieldCampus() {
    this.element.querySelector('.custom-hidden-campus').innerHTML = ''
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
