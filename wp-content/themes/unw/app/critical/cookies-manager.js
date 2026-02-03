/* global gtag */
const SIX_MONTHS = 1000 * 60 * 60 * 24 * 180
const COOKIE_MODAL_ID = 'cookieModal'
const COOKIE_BTN_CLASS = 'cookies-banner__btn'
const CONSENT_KEY = 'cookieConsent'

function getConsent() {
  try {
    return JSON.parse(localStorage.getItem(CONSENT_KEY))
  } catch (e) {
    return null
  }
}

function setConsent(status) {
  const consentData = {
    status,
    date: new Date().getTime()
  }
  localStorage.setItem(CONSENT_KEY, JSON.stringify(consentData))
}

function showCookieModal() {
  const modal = document.getElementById(COOKIE_MODAL_ID)
  if (modal) modal.style.display = 'flex'
}

function removeCookieModal() {
  const modal = document.querySelector('.cookies-banner')
  if (modal && modal.parentNode) {
    modal.parentNode.removeChild(modal)
  }
}

function acceptCookies() {
  if (typeof gtag === 'function') {
    gtag('consent', 'update', {
      ad_storage: 'granted',
      analytics_storage: 'granted',
      functionality_storage: 'granted',
      personalization_storage: 'granted'
    })
  }
  setConsent('accepted')
  removeCookieModal()
}

function initCookieBanner() {
  const consent = getConsent()
  if (!consent || (new Date().getTime() - consent.date) > SIX_MONTHS) {
    showCookieModal()
  } else {
    removeCookieModal()
  }
  // Attach event listener to accept button
  document.addEventListener('click', function (e) {
    if (e.target.classList.contains(COOKIE_BTN_CLASS)) {
      acceptCookies()
    }
  })
}

/**
 * Retorna true si el banner de cookies debe renderizarse (no existe consentimiento o está expirado)
 * Útil para usar en PHP con ayuda de JS (ver ejemplo de uso en template)
 */
function shouldRenderCookieBanner() {
  const consent = getConsent()
  if (!consent) return true
  return (new Date().getTime() - consent.date) > SIX_MONTHS
}

export { initCookieBanner, acceptCookies, getConsent, setConsent, shouldRenderCookieBanner }
