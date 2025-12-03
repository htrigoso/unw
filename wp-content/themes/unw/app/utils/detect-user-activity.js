/**
 * Detecta la primera interacción del usuario y ejecuta un callback
 * Útil para cargar scripts/librerías de forma diferida después de la interacción
 * Basado en la misma lógica del GTMLoader
 *
 * @example
 * // Uso básico
 * const detector = new UserActivityDetector(() => {
 *   console.log('Usuario interactuó!')
 *   loadGTM()
 * })
 *
 * @example
 * // Con opciones personalizadas
 * const detector = new UserActivityDetector(() => {
 *   loadLibrary()
 * }, {
 *   events: ['scroll', 'click'],
 *   delay: 100,
 *   useYieldToMain: true
 * })
 *
 * // Remover listeners manualmente si es necesario
 * detector.destroy()
 */
export class UserActivityDetector {
  constructor(callback, options = {}) {
    this.callback = callback
    this.options = {
      // Eventos por defecto: mismos que usa GTMLoader
      events: [
        'keydown', 'keyup',
        'mousedown', 'mouseup', 'mousemove', 'mouseover', 'mouseout',
        'touchmove', 'touchstart', 'touchend', 'touchcancel',
        'wheel', 'click', 'dblclick', 'input'
      ],
      delay: 0,
      once: true,
      ignoreFirstMousemove: true,
      passiveEvents: ['keyup', 'mouseover', 'mouseout'],
      enableIOSFix: true,
      useYieldToMain: false,
      ...options
    }

    this.executed = false
    this.timeoutId = null
    this.firstMousemoveIgnored = false

    this.handleActivity = this.handleActivity.bind(this)

    this.init()
  }

  // Método principal de inicialización
  init() {
    this.setupPageShowHide()

    // Fix para dispositivos iOS (iPad/iPhone)
    if (this.options.enableIOSFix && /iP(ad|hone)/.test(navigator.userAgent)) {
      this.setupIOSTouchFix()
    }

    this.captureUserEvents()
  }

  // Ceder control al navegador (yield to main thread)
  async yieldToMain() {
    if (document.hidden) {
      // Si la página está oculta, usar setTimeout
      return new Promise(resolve => setTimeout(resolve))
    } else {
      // Si está visible, usar requestAnimationFrame para mejor rendimiento
      return new Promise(resolve => requestAnimationFrame(resolve))
    }
  }

  // Configurar listeners para pageshow/pagehide
  setupPageShowHide() {
    window.addEventListener('pageshow', (event) => {
      // event.persisted indica si la página viene del BFCache
    }, {
      passive: true
    })

    window.addEventListener('pagehide', () => {
      // Limpiar referencias si es necesario
    }, {
      passive: true
    })
  }

  // Fix para iOS: convertir touch en click real
  setupIOSTouchFix() {
    let touchStart

    function saveTouchStart(event) {
      touchStart = event
    }

    window.addEventListener('touchstart', saveTouchStart, {
      passive: true
    })

    window.addEventListener('touchend', function handleTouchEnd(event) {
      // Validar que el touch fue un tap (no un swipe)
      if (event.changedTouches[0] && touchStart?.changedTouches[0] &&
        Math.abs(event.changedTouches[0].pageX - touchStart.changedTouches[0].pageX) < 10 &&
        Math.abs(event.changedTouches[0].pageY - touchStart.changedTouches[0].pageY) < 10 &&
        event.timeStamp - touchStart.timeStamp < 200) {
        // Remover listeners
        window.removeEventListener('touchstart', saveTouchStart)
        window.removeEventListener('touchend', handleTouchEnd)

        // No convertir si es un input de texto
        if (event.target.tagName === 'INPUT' && event.target.type === 'text') {
          return
        }

        // Disparar eventos sintéticos
        event.target.dispatchEvent(new TouchEvent('touchend', {
          target: event.target,
          bubbles: true
        }))

        event.target.dispatchEvent(new MouseEvent('mouseover', {
          target: event.target,
          bubbles: true
        }))

        event.target.dispatchEvent(new PointerEvent('click', {
          target: event.target,
          bubbles: true,
          cancelable: true,
          detail: 1,
          clientX: event.changedTouches[0].clientX,
          clientY: event.changedTouches[0].clientY
        }))

        event.preventDefault()
      }
    }, {
      passive: false
    })
  }

  // Manejar eventos del usuario
  async handleActivity(event) {
    // Si ya se ejecutó y once es true, no hacer nada
    if (this.options.once && this.executed) return

    // Ignorar el primer mousemove (puede ser automático del navegador)
    if (this.options.ignoreFirstMousemove && event.type === 'mousemove' && !this.firstMousemoveIgnored) {
      this.firstMousemoveIgnored = true
      return
    }

    // Ignorar eventos pasivos que no indican interacción real del usuario
    if (this.options.passiveEvents.includes(event.type)) {
      return
    }

    this.executed = true

    // Limpiar timeout previo si existe
    if (this.timeoutId) {
      clearTimeout(this.timeoutId)
    }

    // Yield to main thread si está habilitado
    if (this.options.useYieldToMain) {
      await this.yieldToMain()
    }

    // Ejecutar callback con delay opcional
    if (this.options.delay > 0) {
      this.timeoutId = setTimeout(() => {
        this.callback(event)
        if (this.options.once) {
          this.removeUserInteractionListener()
        }
      }, this.options.delay)
    } else {
      this.callback(event)
      if (this.options.once) {
        this.removeUserInteractionListener()
      }
    }
  }

  // Capturar todos los eventos del usuario
  captureUserEvents() {
    this.options.events.forEach(eventType => {
      window.addEventListener(eventType, this.handleActivity, {
        passive: true
      })
    })

    // visibilitychange usa el mismo handler que los demás eventos
    document.addEventListener('visibilitychange', this.handleActivity)

    // Si la página está oculta, activar inmediatamente
    if (document.hidden) {
      this.callback({ type: 'visibilitychange' })
      if (this.options.once) {
        this.removeUserInteractionListener()
      }
    }
  }

  // Remover listeners de interacción del usuario
  removeUserInteractionListener() {
    this.options.events.forEach(eventType => {
      window.removeEventListener(eventType, this.handleActivity, {
        passive: true
      })
    })

    // Remover visibilitychange con el mismo handler
    document.removeEventListener('visibilitychange', this.handleActivity)

    if (this.timeoutId) {
      clearTimeout(this.timeoutId)
    }
  }

  // Destruir la instancia y limpiar todos los listeners
  destroy() {
    this.removeUserInteractionListener()
  }
}

/**
 * Helper function para mantener compatibilidad con la API anterior
 * @deprecated Usar UserActivityDetector class en su lugar
 */
export function detectUserActivity(callback, options = {}) {
  return new UserActivityDetector(callback, options)
}

/**
 * Versión con Promise para uso con async/await
 *
 * @param {Object} options - Opciones de configuración
 * @returns {Promise} Promise que se resuelve cuando hay interacción del usuario
 *
 * @example
 * // Uso con async/await
 * async function init() {
 *   await waitForUserActivity()
 *   loadGTM()
 * }
 *
 * @example
 * // Uso con .then()
 * waitForUserActivity({ delay: 100 }).then(() => {
 *   loadLibrary()
 * })
 */
export function waitForUserActivity(options = {}) {
  return new Promise((resolve) => {
    new UserActivityDetector(() => {
      resolve()
    }, options)
  })
}
