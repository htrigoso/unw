import { getRfc3986SearchFromUrl } from '../utils/url-parse'

export const EXCLUDE_URL_PARAMS = ['tab']

export const UTM_QUERY_PARAMS = [
  'utm_source',
  'utm_medium',
  'utm_campaign',
  'utm_term',
  'utm_content'
]

export function makeUTMContent(url) {
  const params = UTM_QUERY_PARAMS.map(param => {
    const value = url.searchParams.get(param)

    if (!value) {
      return false
    }

    return [param, value]
  }).filter(Boolean)

  const rfc3986Search = getRfc3986SearchFromUrl(params)
  const rfc3986Url = `${url.origin}${url.pathname}${rfc3986Search}`

  return rfc3986Url
}

export async function getUTMWhatsAppLink({
  page,
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
  formData.append('page', page)
  formData.append('title', `${url.origin}${url.pathname}`)
  formData.append('content', makeUTMContent(url))
  formData.append('url', window.location.href)
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

    return data.data.utm_whatsapp_link
  } catch (error) {
    console.error('Error:', error)

    return null
  }
}
