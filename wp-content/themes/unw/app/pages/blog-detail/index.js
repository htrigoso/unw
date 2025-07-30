import Toaster from '../../components/Toaster'
import copyToClipboard from '../../utils/copy-to-clipboard'

(function () {
  const toaster = new Toaster({
    element: document.body
  })
  window.toasterInstance = toaster

  document.addEventListener('DOMContentLoaded', function () {
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
