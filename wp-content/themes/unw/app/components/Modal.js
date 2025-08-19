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
          setTimeout(() => {
            modal.classList.add('visible')
            document.body.style.overflow = 'hidden'
          }, 50)
        }
      }
      const closeBtn = e.target.closest('[data-modal-close]')
      if (closeBtn) {
        const modal = closeBtn.closest('.modal')
        if (modal) {
          modal.classList.remove('visible')
          document.body.style.overflow = ''
          setTimeout(() => {
            modal.classList.remove('active')
          }, 300)
        }
      }
      if (e.target.classList.contains('modal-overlay')) {
        const modal = e.target.closest('.modal')
        if (modal) {
          modal.classList.remove('visible')
          document.body.style.overflow = ''
          setTimeout(() => {
            modal.classList.remove('active')
          }, 300)
        }
      }
    })
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        document.querySelectorAll('.modal.visible').forEach((modal) => {
          modal.classList.remove('visible')
          document.body.style.overflow = ''
          setTimeout(() => {
            modal.classList.remove('active')
          }, 300)
        })
      }
    })
  }
}
