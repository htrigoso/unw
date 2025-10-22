export const EXCLUDE_URL_PARAMS = ['tab']

export async function getUTMWhatsApp({
  pageId,
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
  formData.append('page_id', pageId)
  formData.append('url', url.toString())
  formData.append('nonce', nonce)

  try {
    const response = await fetch(urlApi, {
      method: 'POST',
      body: formData
    })

    const data = await response.json()

    return data
  } catch (error) {
    console.error('Error:', error)

    return {
      success: false,
      message: 'Error al crear el UTM WhatsApp'
    }
  }
}
