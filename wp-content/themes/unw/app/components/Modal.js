export class ModalManager {
  constructor() {
    this.init()
  }

  openModal(modalId) {
    const modal = document.getElementById(modalId)
    if (!modal) return
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
    }, 300)
  }

  closeAll() {
    document.querySelectorAll('.modal.visible').forEach((modal) => {
      modal.classList.remove('visible')
      document.body.style.overflow = ''
      setTimeout(() => {
        modal.classList.remove('active')
      }, 300)
    })
  }

  init() {
    document.querySelectorAll('.modal').forEach((modal) => {
      if (modal.parentElement !== document.body) {
        document.body.appendChild(modal)
      }
    })

    document.body.addEventListener('click', (e) => {
      const openBtn = e.target.closest('[data-modal-target]')
      if (openBtn) {
        this.openModal(openBtn.getAttribute('data-modal-target'))
      }

      const closeBtn = e.target.closest('[data-modal-close]')
      if (closeBtn) {
        const modal = closeBtn.closest('.modal')
        if (modal) this.closeModal(modal.id)
      }

      if (e.target.classList.contains('modal-overlay')) {
        const modal = e.target.closest('.modal')
        if (modal) this.closeModal(modal.id)
      }
    })

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') this.closeAll()
    })
  }
}
