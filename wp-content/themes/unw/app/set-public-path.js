// Configurar publicPath dinámicamente basado en la ubicación del script
/* eslint-disable no-undef, camelcase */
if (typeof __webpack_public_path__ !== 'undefined') {
  const scripts = document.getElementsByTagName('script')
  let scriptSrc = ''

  // Buscar cualquier script del bundle (app.js, critical-*, home.js, etc.)
  for (let i = scripts.length - 1; i >= 0; i--) {
    const src = scripts[i].src
    // Buscar scripts que vengan de localhost:8035 (dev) o del build (prod)
    if (src && (src.includes('localhost:') || src.includes('/build/js/') || src.includes('/js/'))) {
      scriptSrc = src
      break
    }
  }

  if (scriptSrc) {
    // Detectar si estamos en desarrollo (localhost con puerto)
    const devMatch = scriptSrc.match(/(https?:\/\/localhost:\d+)/)
    if (devMatch) {
      // Modo desarrollo: usar localhost con puerto
      __webpack_public_path__ = devMatch[1] + '/'
    } else {
      // Modo producción: extraer ruta hasta /build/
      const buildIndex = scriptSrc.indexOf('/build/')
      if (buildIndex !== -1) {
        const basePath = scriptSrc.substring(0, buildIndex + 7) // +7 para incluir '/build/'
        __webpack_public_path__ = basePath
      }
    }
  }
}
