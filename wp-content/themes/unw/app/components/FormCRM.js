import Component from '../classes/Component'

export default class FormCRM extends Component {
  constructor({ element, container, onCompleted }) {
    super({ element, elements: {} })
    this.createListeners()
  }

  /**
   * Sanitiza un string para usar en un input hidden y prevenir inyecciones
   * @param {string} str
   * @returns {string}
   */
  sanitizeForInput(str) {
    if (typeof str !== 'string') return ''
    return str
      .replace(/&/g, '&amp;')
      .replace(/</g, '&lt;')
      .replace(/>/g, '&gt;')
      .replace(/"/g, '&quot;')
      .replace(/'/g, '&#039;')
  }

  createListeners() {
    const selectDepartament = this.element.querySelector('#departament')
    const nameDepartament = this.element.querySelector('input[name="SingleLine8"]')

    // Validar que existan los elementos antes de asignar listener
    if (!selectDepartament || !nameDepartament) return

    // Actualiza el hidden input cuando se cambia el select
    selectDepartament.addEventListener('change', () => {
      const selectedText = selectDepartament.options[selectDepartament.selectedIndex].text
      nameDepartament.value = this.sanitizeForInput(selectedText)
    })
  }
}
