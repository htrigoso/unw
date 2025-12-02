import { createSwiper } from './createSwiper'

const HeroSwiper = (sectionEl = '.hero-swiper', config = {}) => {
  const defaultConfig = {
    loop: false,
    slidesPerView: 1,
    centeredSlides: false,
    spaceBetween: 0,
    speed: 0,
    autoplay: {
      delay: 5000,
      disableOnInteraction: true
    },
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    autoHeight: false,
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
      // Activar loop después de que el usuario llegue al segundo slide
      let loopActivated = false
      swiper.on('slideChange', () => {
        if (!loopActivated && swiper.realIndex >= 1) {
          loopActivated = true
          swiper.params.loop = true
          swiper.loopDestroy()
          swiper.loopCreate()
          swiper.update()
        }
      })

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
    }
  }

  return swiper
}

export default HeroSwiper
