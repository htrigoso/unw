import { $element } from '../../utils/dom'

window.addEventListener('load', initContact)

function initContact () {
  const wpcf7Form = $element('.wpcf7')

  wpcf7Form.addEventListener('wpcf7mailsent', function (event) {
    console.log('wpcf7mailsent')
  }, false)
}
