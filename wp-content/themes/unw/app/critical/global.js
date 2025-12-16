import { EXCLUDE_URL_PARAMS, getBaseDomain, getRfc3986SearchFromUrl } from '../utils/url-parse'
import '../set-public-path'
import { onDOMReady } from '../utils/dom-ready'

export default class CriticalPage {
  constructor() {
    this.create()
  }

  create() {
    if (window.appConfigUnw?.preserveUrlParams) {
      this.propagateUrlParamsToInternalLinks()
    }
    this.handleOnSubmitForm()
  }

  handleOnSubmitForm() {
    document.addEventListener('DOMContentLoaded', () => {
      const forms = document.querySelectorAll('[data-form="zoho"]')
      if (!forms.length) return

      forms.forEach((form) => {
        form.addEventListener('submit', (e) => {
          // Evitar doble envío
          console.log('heree', new Date().toISOString())

          if (form.dataset.submitted === 'true') {
            e.preventDefault()
            return
          }
          form.dataset.submitted = 'true'

          // Botón de envío
          const button = form.querySelector('#button-send')
          if (button) {
            button.disabled = true
            button.dataset.originalText = button.innerText
            button.innerText = 'Enviando...'
          }

          // Push a dataLayer
          if (window.dataLayer && Array.isArray(window.dataLayer)) {
            window.dataLayer.push({
              event: 'gtm.formSubmit',
              formId: form?.id || null,
              formType: form?.dataset?.formType || null
            })
          } else {
            console.warn('⚠️ dataLayer no está definido')
          }
        })
      })
    })
  }

  propagateUrlParamsToInternalLinks() {
    const urlParams = new URLSearchParams(window.location.search)

    EXCLUDE_URL_PARAMS.forEach(param => {
      urlParams.delete(param)
    })

    if (!urlParams.toString()) return

    const currentBaseDomain = getBaseDomain(window.location.hostname)

    const links = document.querySelectorAll('a[href]')

    links.forEach(link => {
      const href = link.getAttribute('href')

      // Check if link is relative or same base domain
      let isInternal = false

      if (href.startsWith('/')) {
        // Relative link
        isInternal = true
      } else if (href.startsWith('http://') || href.startsWith('https://')) {
        // Absolute link - check if it belongs to the same base domain
        try {
          const linkUrl = new URL(href)
          const linkBaseDomain = getBaseDomain(linkUrl.hostname)
          isInternal = (linkBaseDomain === currentBaseDomain)
        } catch (e) {
          // Ignore invalid URL
          isInternal = false
        }
      }

      if (isInternal) {
        const url = new URL(href, window.location.origin)

        // Add existing parameters
        urlParams.forEach((value, key) => {
          if (!url.searchParams.has(key)) {
            url.searchParams.set(key, value)
          }
        })

        // 🔒 Codification strict RFC 3986
        const rfc3986Search = getRfc3986SearchFromUrl(Array.from(url.searchParams.entries()))
        const rfc3986Url = `${url.origin}${url.pathname}${rfc3986Search}`

        link.setAttribute('href', rfc3986Url)
      }
    })
  }
}

onDOMReady(() => {
  new CriticalPage()
})
