import { createSwiper } from './createSwiper'
import { UserActivityDetector } from '../utils/detect-user-activity'

function hydrateLegacyHeroLazy(root) {
  if (!root) return

  root.querySelectorAll('source[data-srcset]').forEach((source) => {
    const srcset = source.getAttribute('data-srcset')
    if (srcset) {
      source.setAttribute('srcset', srcset)
      source.removeAttribute('data-srcset')
    }
  })

  root.querySelectorAll('img.swiper-lazy[data-src]').forEach((img) => {
    const src = img.getAttribute('data-src')
    if (src && !img.getAttribute('src')) {
      img.setAttribute('src', src)
    }
    img.removeAttribute('data-src')
    img.classList.remove('swiper-lazy')

    const preloader = img.parentElement?.querySelector('.swiper-lazy-preloader')
    if (!preloader) return

    if (img.complete) {
      preloader.remove()
      return
    }

    img.addEventListener('load', () => preloader.remove(), { once: true })
    img.addEventListener('error', () => preloader.remove(), { once: true })
  })
}

const HeroSwiper = (sectionEl = '.hero-swiper', config = {}) => {
  const defaultConfig = {
    loop: false,
    slidesPerView: 1,
    centeredSlides: false,
    spaceBetween: 0,
    speed: 0,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    autoHeight: false,
    lazy: {
      loadPrevNext: true
    },
    pagination: {
      el: `${sectionEl} .swiper-pagination`,
      clickable: true
    }
  }

  const swiper = createSwiper(sectionEl, config, defaultConfig)

  if (swiper && typeof IntersectionObserver !== 'undefined') {
    const swiperElement = typeof sectionEl === 'string'
      ? document.querySelector(sectionEl)
      : sectionEl

    if (swiperElement) {
      hydrateLegacyHeroLazy(swiperElement)

      // Activar loop cuando el usuario llegue al penúltimo slide
      let loopActivated = false
      swiper.on('slideChange', () => {
        hydrateLegacyHeroLazy(swiperElement)

        const totalSlides = swiper.slides.length
        const currentIndex = swiper.realIndex

        if (!loopActivated && currentIndex >= totalSlides - 2) {
          loopActivated = true
          const currentRealIndex = swiper.realIndex
          const wasAutoplayRunning = swiper.autoplay && swiper.autoplay.running

          swiper.params.loop = true
          swiper.loopDestroy()
          swiper.loopCreate()
          swiper.update()

          // Mantener la posición actual después de activar el loop
          swiper.slideToLoop(currentRealIndex, 0)

          if (wasAutoplayRunning && swiper.autoplay) {
            swiper.autoplay.start()
          }
        }
      })

      new UserActivityDetector(() => {
        const observer = new IntersectionObserver(
          (entries) => {
            entries.forEach(entry => {
              if (entry.isIntersecting) {
                if (swiper.autoplay && !swiper.autoplay.running) {
                  swiper.autoplay.start()
                }
              } else {
                if (swiper.autoplay && swiper.autoplay.running) {
                  swiper.autoplay.stop()
                }
              }
            })
          },
          {
            threshold: 0.5,
            rootMargin: '0px'
          }
        )

        observer.observe(swiperElement)
        swiper.intersectionObserver = observer
      })
    }
  }

  return swiper
}

export default HeroSwiper
