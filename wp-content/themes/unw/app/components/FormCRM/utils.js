
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
