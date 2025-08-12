export class ModalManager {
  constructor() {
    this.init()
  }

  init() {
    document.body.addEventListener('click', (e) => {
      const openBtn = e.target.closest('[data-modal-target]')
      if (openBtn) {
        const modalId = openBtn.getAttribute('data-modal-target')
        const modal = document.getElementById(modalId)
        if (modal) {
          modal.classList.add('active')
          document.body.style.overflow = 'hidden'
        }
      }
      const closeBtn = e.target.closest('[data-modal-close]')
      if (closeBtn) {
        const modal = closeBtn.closest('.modal')
        if (modal) {
          modal.classList.remove('active')
          document.body.style.overflow = ''
        }
      }
      if (e.target.classList.contains('modal-overlay')) {
        const modal = e.target.closest('.modal')
        if (modal) {
          modal.classList.remove('active')
          document.body.style.overflow = ''
        }
      }
    })
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        document.querySelectorAll('.modal.active').forEach((modal) => {
          modal.classList.remove('active')
          document.body.style.overflow = ''
        })
      }
    })
  }
}
