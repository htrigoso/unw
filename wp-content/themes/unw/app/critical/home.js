import '../set-public-path'

export default class CriticalHomePage {
  constructor() {
    this.create()
  }

  create() {
    if (window.appConfigUnw?.isHome) {
      this.initHomeComponents()
    }
  }

  async initHomeComponents() {
    const heroElement = document.querySelector('.hero-swiper')
    if (!heroElement) return

    // Importar y ejecutar el módulo del swiper
    const { default: SwiperHero } = await import('../custom-chunks/swiper-home')
    new SwiperHero()
  }
}

// Inicializar cuando el DOM esté listo
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', () => {
    new CriticalHomePage()
  })
} else {
  // DOM ya está listo
  new CriticalHomePage()
}
