import Toaster from '../../components/Toaster'
import copyToClipboard from '../../utils/copy-to-clipboard'
import { initViewContentTracking } from '../../utils/incubeta/viewContent'

(function () {
  const toaster = new Toaster({
    element: document.body
  })

  document.addEventListener('DOMContentLoaded', function () {
    // Inicializar tracking de view_content
    initViewContentTracking()

    const shareBtns = document.querySelectorAll('#copy-link')
    shareBtns.forEach(btn => {
      btn.addEventListener('click', function (e) {
        e.preventDefault()
        const url = window.location.href
        const success = copyToClipboard(url)
        if (success) {
          toaster.show('¡Enlace copiado!', { variant: 'success' })
        } else {
          toaster.show('No se pudo copiar el enlace', { variant: 'error' })
        }
      })
    })
  })
})()
