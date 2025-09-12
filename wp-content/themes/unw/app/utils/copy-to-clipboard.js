export default function copyToClipboard(text) {
  const tempInput = document.createElement('input')
  tempInput.value = text
  document.body.appendChild(tempInput)
  tempInput.select()
  let success = false
  try {
    document.execCommand('copy')
    success = true
  } catch (err) {
    success = false
  }
  document.body.removeChild(tempInput)
  return success
}
