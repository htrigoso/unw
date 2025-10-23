import psl from 'psl'

export function getBaseDomain(hostname) {
  const cleanHostname = hostname.replace(/^www\./, '')

  const parsed = psl.parse(cleanHostname)

  if (parsed.error) {
    return cleanHostname
  }

  return parsed.domain
}
