export class ModalManager {
  constructor() {
    this.lastFocusedElement = null
    this.init()
  }

  openModal(modalId) {
    let modal = document.getElementById(modalId)

    if (!modal) {
      const template = document.getElementById(`template-${modalId}`)

      if (template) {
        const clone = template.content.cloneNode(true)
        document.body.appendChild(clone)
        modal = document.getElementById(modalId)
      }
    }

    if (!modal) {
      console.error(`No se encontró el modal ni la plantilla para el id: ${modalId}`)
      return
    }

    this.lastFocusedElement = document.activeElement
    modal.classList.add('active')

    setTimeout(() => {
      modal.classList.add('visible')
      document.body.style.overflow = 'hidden'
    }, 50)
  }

  closeModal(modalId) {
    const modal = document.getElementById(modalId)
    if (!modal) return

    modal.classList.remove('visible')
    document.body.style.overflow = ''

    setTimeout(() => {
      modal.classList.remove('active')
      if (this.lastFocusedElement) {
        this.lastFocusedElement.focus()
      }

      modal.remove()
    }, 300)
  }

  closeAll() {
    document.querySelectorAll('.modal.visible').forEach((modal) => {
      this.closeModal(modal.id)
    })
  }

  init() {
    document.body.addEventListener('click', (e) => {
      const openBtn = e.target.closest('[data-modal-target]')
      if (openBtn) {
        this.openModal(openBtn.getAttribute('data-modal-target'))
      }

      const closeBtn = e.target.closest('[data-modal-close]')
      if (closeBtn) {
        this.closeModal(closeBtn.closest('.modal').id)
      }

      if (e.target.classList.contains('modal-overlay')) {
        this.closeModal(e.target.closest('.modal').id)
      }
    })

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        this.closeAll()
      }
    })
  }
}
