import { EXCLUDE_URL_PARAMS, getBaseDomain, getRfc3986SearchFromUrl } from '../utils/url-parse'
import '../set-public-path'

export default class CriticalPage {
  constructor() {
    this.create()
  }

  create() {
    if (window.appConfigUnw?.preserveUrlParams) {
      this.propagateUrlParamsToInternalLinks()
    }
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

// Inicializar cuando el DOM esté listo
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', () => {
    new CriticalPage()
  })
} else {
  // DOM ya está listo
  new CriticalPage()
}
