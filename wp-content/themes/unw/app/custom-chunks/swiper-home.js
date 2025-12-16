/**
 * Home Swiper Components Loader
 * Handles dynamic loading and initialization of all Swiper instances on the home page
 */
export default class HomeSwiperLoader {
  // Swiper configuration map
  static SWIPER_CONFIG = {
    hero: {
      selector: '.hero-swiper',
      loader: async () => {
        const [{ default: HeroSwiper }, { managePagination }] = await Promise.all([
          import('../components/HeroSwiper'),
          import('../utils/swiper')
        ])
        return { HeroSwiper, managePagination }
      },
      init: ({ HeroSwiper, managePagination }, selector) => {
        const swiper = HeroSwiper(selector, {
          pagination: {
            el: `${selector} .home-hero-pagination`,
            type: 'bullets',
            clickable: false
          },
          navigation: {
            nextEl: `${selector} .home-hero-button-next`,
            prevEl: `${selector} .home-hero-button-prev`
          },
          loop: false
        })

        if (swiper) managePagination(swiper)
      }
    },
    testimonial: {
      selector: '.testimonial-swiper',
      loader: async () => {
        const { default: PostSwiper } = await import('../components/PostSwiper')
        return { PostSwiper }
      },
      init: ({ PostSwiper }, selector) => PostSwiper(selector)
    },
    news: {
      selector: '.last-news-swiper',
      loader: async () => {
        const { default: PostSwiper } = await import('../components/PostSwiper')
        return { PostSwiper }
      },
      init: ({ PostSwiper }, selector) => PostSwiper(selector)
    },
    events: {
      selector: '.featured-events-swiper',
      loader: async () => {
        const { default: PostSwiper } = await import('../components/PostSwiper')
        return { PostSwiper }
      },
      init: ({ PostSwiper }, selector) => PostSwiper(selector)
    },
    postDesktop: {
      selector: '.post-swiper-desktop',
      loader: async () => {
        const { default: PostSwiperDesktop } = await import('../components/PostSwiperDesktop')
        return { PostSwiperDesktop }
      },
      init: ({ PostSwiperDesktop }, selector) => PostSwiperDesktop(selector)
    },
    international: {
      selector: '.international-agreements',
      loader: async () => {
        const { default: InternationalSwiper } = await import('../components/InternationalSwiper')
        return { InternationalSwiper }
      },
      init: ({ InternationalSwiper }) => InternationalSwiper()
    }
  }

  constructor() {
    this.init()
  }

  /**
   * Initialize all available Swiper components
   */
  async init() {
    const componentsToLoad = this.detectComponents()

    if (componentsToLoad.length === 0) return

    await this.loadAndInitialize(componentsToLoad)
  }

  /**
   * Detect which Swiper components are present in the DOM
   * @returns {Array} Array of component keys that exist
   */
  detectComponents() {
    return Object.entries(HomeSwiperLoader.SWIPER_CONFIG)
      .filter(([_, config]) => document.querySelector(config.selector))
      .map(([key]) => key)
  }

  /**
   * Load and initialize detected components
   * @param {Array} componentKeys - Array of component keys to load
   */
  async loadAndInitialize(componentKeys) {
    // Group components that share the same loader to avoid duplicate imports
    const loaderGroups = this.groupByLoader(componentKeys)

    // Load all unique modules in parallel
    const loadPromises = Object.entries(loaderGroups).map(async ([loaderKey, components]) => {
      const config = HomeSwiperLoader.SWIPER_CONFIG[components[0]]
      const module = await config.loader()

      // Initialize all components that share this loader
      components.forEach(key => {
        const componentConfig = HomeSwiperLoader.SWIPER_CONFIG[key]
        try {
          componentConfig.init(module, componentConfig.selector)
        } catch (error) {
          console.error(`Failed to initialize ${key} swiper:`, error)
        }
      })
    })

    await Promise.all(loadPromises)
  }

  /**
   * Group components by their loader to optimize imports
   * @param {Array} componentKeys - Array of component keys
   * @returns {Object} Grouped components
   */
  groupByLoader(componentKeys) {
    const groups = {}

    componentKeys.forEach(key => {
      const config = HomeSwiperLoader.SWIPER_CONFIG[key]
      const loaderKey = config.loader.toString()

      if (!groups[loaderKey]) {
        groups[loaderKey] = []
      }
      groups[loaderKey].push(key)
    })

    return groups
  }
}
