
/**
 * Wrapper para funciones de Incubeta
 * Solo ejecuta si window.INCUBETA_ENABLED === 'true'
 * @param {Function} fn - Función a envolver
 * @returns {Function} - Función envuelta con validación
 */
export function withIncubeta(fn) {
  return function (...args) {
    if (window.INCUBETA_ENABLED !== 'true') {
      return
    }
    return fn.apply(this, args)
  }
}
