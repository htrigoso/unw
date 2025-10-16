const QUERY_PARAMS_TO_REMOVE = ['tab']

export async function getUTMWhatsAppLink({
  url,
  postId,
  urlApi,
  nonce
}) {
  // Remove query params
  QUERY_PARAMS_TO_REMOVE.forEach(param => {
    url.searchParams.delete(param)
  })

  const formData = new FormData()

  formData.append('action', 'create_utm_whatsapp')
  formData.append('title', `${url.origin}${url.pathname}`)
  formData.append('url', url.toString())
  formData.append('post_id', postId)
  formData.append('nonce', nonce)

  try {
    const response = await fetch(urlApi, {
      method: 'POST',
      body: formData
    })

    const { success, data } = await response.json()

    return success ? data.whatsapp_link : null
  } catch (error) {
    console.error('Error:', error)

    return null
  }
}
