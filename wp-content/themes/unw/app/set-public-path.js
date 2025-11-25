// Configurar publicPath dinámicamente basado en la ubicación del script
/* eslint-disable no-undef, camelcase */
if (typeof __webpack_public_path__ !== 'undefined') {
  const scripts = document.getElementsByTagName('script')
  let scriptSrc = ''

  // Buscar el script actual (critical-home o critical-global)
  for (let i = 0; i < scripts.length; i++) {
    if (scripts[i].src.includes('critical-')) {
      scriptSrc = scripts[i].src
      break
    }
  }

  if (scriptSrc) {
    // Extraer la ruta hasta /build/ (sin incluir js/)
    const buildIndex = scriptSrc.indexOf('/build/')
    if (buildIndex !== -1) {
      const basePath = scriptSrc.substring(0, buildIndex + 7) // +7 para incluir '/build/'
      __webpack_public_path__ = basePath
    }
  }
}
