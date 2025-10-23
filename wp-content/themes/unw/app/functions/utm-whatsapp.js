export const EXCLUDE_URL_PARAMS = ['tab']

export function makeWhatsAppLink(utmCode) {
  const template = window.appConfigUnw.utmsWhatsapp.template || ''

  return template.replace('{utm_code}', utmCode)
}

export async function getUTMWhatsAppLink({
  url,
  urlApi,
  nonce
}) {
  // Remove query params
  EXCLUDE_URL_PARAMS.forEach(param => {
    url.searchParams.delete(param)
  })

  const formData = new FormData()

  formData.append('action', 'create_utm_whatsapp')
  formData.append('title', `${url.origin}${url.pathname}`)
  formData.append('url', url.toString())
  formData.append('nonce', nonce)

  try {
    const response = await fetch(urlApi, {
      method: 'POST',
      body: formData
    })

    const data = await response.json()

    if (!data.success) {
      return null
    }

    return makeWhatsAppLink(data.data.utm_code)
  } catch (error) {
    console.error('Error:', error)

    return null
  }
}
