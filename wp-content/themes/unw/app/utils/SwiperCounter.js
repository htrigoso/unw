// SwiperCounter.js
// Utility to display a counter for Swiper slides

export default function SwiperCounter(swiper, counterSelector) {
  if (Array.isArray(swiper)) {
    swiper.forEach((instance, i) => {
      let counterEl
      if (Array.isArray(counterSelector)) {
        counterEl = typeof counterSelector[i] === 'string'
          ? document.querySelector(counterSelector[i])
          : counterSelector[i]
      } else if (typeof counterSelector === 'string') {
        counterEl = instance.el.querySelector(counterSelector)
      } else {
        counterEl = counterSelector
      }
      if (counterEl) setupCounter(instance, counterEl)
    })
  } else {
    const counterEl = typeof counterSelector === 'string'
      ? document.querySelector(counterSelector)
      : counterSelector
    if (counterEl) setupCounter(swiper, counterEl)
  }

  function setupCounter(swiperInstance, counterEl) {
    function update() {
      const current = String(swiperInstance.realIndex + 1).padStart(2, '0')
      const total = String(swiperInstance.slides.filter(s => !s.classList.contains('swiper-slide-duplicate')).length).padStart(2, '0')
      counterEl.textContent = `${current}/${total}`
    }
    swiperInstance.on('init', update)
    swiperInstance.on('slideChange', update)
    if (swiperInstance.initialized) update()
  }
}
