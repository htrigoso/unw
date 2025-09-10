export function validateInputs() {
  const rules = {
    letters: /[^A-Za-zÁÉÍÓÚáéíóúÑñ\s]/g, // solo letras y espacios
    numbers: /[^0-9]/g // solo dígitos
  }

  // Campos por defecto
  const config = [
    { id: 'Name_First', type: 'letters' },
    { id: 'Name_Last', type: 'letters' },
    { id: 'PhoneNumber_countrycode', type: 'numbers' },
    { id: 'SingleLine', type: 'numbers' }
  ]

  const sanitizeValue = (input, regex) => {
    const before = input.value
    const posStart = input.selectionStart
    const posEnd = input.selectionEnd

    const cleaned = before.replace(regex, '')
    if (cleaned !== before) {
      // Ajusta el valor y conserva posición del cursor lo mejor posible
      input.value = cleaned
      const removed = before.length - cleaned.length
      const newPos = Math.max((posEnd ?? 0) - removed, 0)
      input.setSelectionRange(newPos, newPos)
    }
  }

  const insertFiltered = (input, text, regex) => {
    const filtered = text.replace(regex, '')
    const start = input.selectionStart ?? input.value.length
    const end = input.selectionEnd ?? input.value.length
    // Inserta respetando la selección actual
    input.setRangeText(filtered, start, end, 'end')
  }

  config.forEach(({ id, type }) => {
    const input = document.getElementById(id)
    if (!input) return

    const regex = rules[type]

    // 1) Al escribir: limpia caracteres inválidos
    input.addEventListener('input', () => sanitizeValue(input, regex))

    // 2) Al pegar: filtra antes de que entre al input y preserva el caret
    input.addEventListener('paste', (e) => {
      const txt = (e.clipboardData || window.clipboardData)?.getData('text') ?? ''
      if (!txt) return // deja pasar si no hay texto
      const filtered = txt.replace(regex, '')
      // Si al pegar no cambia, no hacemos nada
      if (filtered === txt) return
      e.preventDefault()
      insertFiltered(input, txt, regex)
    })

    // 3) (Opcional) Arrastrar y soltar texto
    input.addEventListener('drop', (e) => {
      const txt = e.dataTransfer?.getData('text') ?? ''
      if (!txt) return
      const filtered = txt.replace(regex, '')
      if (filtered === txt) return // válido, deja pasar
      e.preventDefault()
      input.focus()
      insertFiltered(input, txt, regex)
    })

    // 4) (Opcional) Sugerir teclado adecuado en móviles
    if (type === 'numbers') input.setAttribute('inputmode', 'numeric')
  })
}

export function setClaseName(value, element) {
  const htmlNameFirst = element.querySelector(
    '[data-html-name="name_first"]'
  )
  if (htmlNameFirst) {
    htmlNameFirst.className = value
  }
}

// ==========================
// Creadores dinámicos
// ==========================
export function createSelectDepartament({ position = 'append', name = 'SingleLine8', element } = {}) {
  const departaments = JSON.parse(element.dataset.departaments || '[]')
  if (departaments.length === 0) return

  const containerHtml = element.querySelector(
    '[data-html-name="departament"]'
  )
  if (!containerHtml) return

  // Evitar duplicados
  if (containerHtml.querySelector('#departament')) return

  const wrapperDiv = buildSelectWrapper({
    id: 'departament',
    name,
    label: 'Departamento de procedencia',
    options: departaments
  })

  // Inserción dinámica según parámetro
  if (position === 'prepend') {
    containerHtml.prepend(wrapperDiv)
  } else {
    containerHtml.append(wrapperDiv)
  }
}

// ==========================
// Removedores dinámicos
// ==========================
export function removeSelectDepartament(element) {
  removeSelect('[data-html-name="departament"]', '#departament', element)
}

export function removeSelectCampus(element) {
  removeSelect('[data-html-name="campus"]', '#campus', element)
}

export function removeSelect(containerSelector, selectId, element) {
  const containerHtml = element.querySelector(containerSelector)
  if (!containerHtml) return

  const existingSelect = containerHtml.querySelector(selectId)
  if (existingSelect) {
    existingSelect.closest('.f-50')?.remove()
  }
}

// ==========================
// Generador de select genérico
// ==========================
export function buildSelectWrapper({ id, name, label, options }) {
  const wrapperDiv = document.createElement('div')
  wrapperDiv.classList.add('f-50')

  const fieldDiv = document.createElement('div')
  fieldDiv.classList.add('form-field', 'form-field-select')

  const select = document.createElement('select')
  select.name = name
  select.id = id
  select.required = true

  // Opción por defecto
  const defaultOption = document.createElement('option')
  defaultOption.value = ''
  defaultOption.textContent = '--Seleccionar--'
  defaultOption.disabled = true
  defaultOption.selected = true
  select.appendChild(defaultOption)

  // Opciones dinámicas
  options.forEach(opt => {
    const option = document.createElement('option')
    option.value = opt.value || ''
    option.textContent = opt.name || ''
    select.appendChild(option)
  })

  const labelEl = document.createElement('label')
  labelEl.htmlFor = id
  labelEl.textContent = label

  const errorSpan = document.createElement('span')
  errorSpan.classList.add('error-message')
  errorSpan.textContent = 'Datos inválidos'

  fieldDiv.appendChild(select)
  fieldDiv.appendChild(labelEl)
  fieldDiv.appendChild(errorSpan)
  wrapperDiv.appendChild(fieldDiv)

  return wrapperDiv
}

export function sanitizeForInput(str) {
  if (typeof str !== 'string') return ''
  return str
    .replace(/&/g, '&amp;')
    .replace(/</g, '&lt;')
    .replace(/>/g, '&gt;')
    .replace(/"/g, '&quot;')
    .replace(/'/g, '&#039;')
}

export function createSelectCampus(element, name = 'SingleLine7') {
  const campus = JSON.parse(element.dataset.campus || '[]')
  if (campus.length === 0) return

  const containerHtml = element.querySelector('[data-html-name="campus"]')
  if (!containerHtml) return

  const wrapperDiv = buildSelectWrapper({
    id: 'campus',
    name,
    label: 'Elige tu campus',
    options: campus
  })

  // Si existe reemplaza, sino agrega
  const existing = containerHtml.querySelector('.f-50')
  existing ? existing.replaceWith(wrapperDiv) : containerHtml.appendChild(wrapperDiv)
}

export function createHiddenInputs({ type, fields }) {
  const validTypes = ['pregrado', 'virtual', 'work']
  if (!validTypes.includes(type)) {
    throw new Error(
      `[buildHiddenInputs] Invalid type "${type}". Must be one of: ${validTypes.join(', ')}`
    )
  }

  if (!Array.isArray(fields) || fields.length !== 2) {
    throw new Error(
      '[buildHiddenInputs] "fields" must be an array with exactly 2 items (faculty + career).'
    )
  }

  return fields
    .map((item, idx) => {
      const { name, facultyName, careerName } = item || {}
      if (!name) {
        throw new Error(
          `[buildHiddenInputs] Missing "name" for item #${idx + 1} in type "${type}".`
        )
      }
      const value = facultyName ?? careerName ?? ''
      return `<input type="hidden" name="${name}" value="${value}">`
    })
    .join('\n')
}
export function updateHiddenInputs(fields = []) {
  if (!Array.isArray(fields)) return

  fields.forEach(({ name, value }) => {
    if (!name) return
    const input = document.querySelector(`input[name="${name}"]`)
    if (input) {
      input.value = value ?? ''
    } else {
      console.warn(`[updateHiddenInputs] Input with name="${name}" not found`)
    }
  })
}
export function updateHiddenCareerFields({ facultyField = 'SingleLine3', careerField = 'SingleLine6', formContainer } = {}) {
  console.log(formContainer)

  if (!formContainer) return
  const form = document.querySelector(`${formContainer}`)
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
      updateHiddenFields({ select, hiddenContainer })
    } else {
      hiddenContainer.innerHTML = `
          <input type="hidden" name="${facultyField}" value="${facultyName}">
          <input type="hidden" name="${careerField}" value="${careerName}">
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

export function updateDepartmentHiddenInput({ fieldName = 'SingleLine9' } = {}) {
  document.addEventListener('change', (event) => {
    const target = event.target

    if (target && target.matches('#departament')) {
      const form = target.closest('form')
      if (!form) return

      const selectedOption = target.options[target.selectedIndex]
      const text = selectedOption?.textContent.trim() || ''

      document.querySelector(`input[name="${fieldName}"]`).value = text
    }
  })
}

export function updateHiddenFields({ select, hiddenContainer }) {
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
