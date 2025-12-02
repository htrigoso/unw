import Swiper, { Lazy } from 'swiper'
import { createSwiper } from './createSwiper'

// Configurar Lazy solo para HeroSwiper
Swiper.use([Lazy])

const HeroSwiper = (sectionEl = '.hero-swiper', config = {}) => {
  const defaultConfig = {
    loop: false,
    slidesPerView: 1,
    centeredSlides: false,
    spaceBetween: 0,
    speed: 0,
    // autoplay: {
    //   delay: 5000,
    //   disableOnInteraction: true
    // },
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
      // Activar loop cuando el usuario llegue al penúltimo slide
      let loopActivated = false
      swiper.on('slideChange', () => {
        const totalSlides = swiper.slides.length
        const currentIndex = swiper.realIndex

        if (!loopActivated && currentIndex >= totalSlides - 2) {
          loopActivated = true
          const currentRealIndex = swiper.realIndex

          swiper.params.loop = true
          swiper.loopDestroy()
          swiper.loopCreate()
          swiper.update()

          // Mantener la posición actual después de activar el loop
          swiper.slideToLoop(currentRealIndex, 0)
        }
      })

      // const observer = new IntersectionObserver(
      //   (entries) => {
      //     entries.forEach(entry => {
      //       if (entry.isIntersecting) {
      //         if (swiper.autoplay && !swiper.autoplay.running) {
      //           swiper.autoplay.start()
      //         }
      //       } else {
      //         if (swiper.autoplay && swiper.autoplay.running) {
      //           swiper.autoplay.stop()
      //         }
      //       }
      //     })
      //   },
      //   {
      //     threshold: 0.5,
      //     rootMargin: '0px'
      //   }
      // )

      // observer.observe(swiperElement)
      // swiper.intersectionObserver = observer
    }
  }

  return swiper
}

export default HeroSwiper
