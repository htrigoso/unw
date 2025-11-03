import psl from 'psl'

export function getBaseDomain(hostname) {
  const cleanHostname = hostname.replace(/^www\./, '')

  const parsed = psl.parse(cleanHostname)

  if (parsed.error) {
    return cleanHostname
  }

  return parsed.domain
}

export function getRfc3986SearchFromUrl(params) {
  const rfc3986Search = params
    .map(([k, v]) => `${encodeURIComponent(k)}=${encodeURIComponent(v)}`)
    .join('&')

  return rfc3986Search ? `?${rfc3986Search}` : ''
}
