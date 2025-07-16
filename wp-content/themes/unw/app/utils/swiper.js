/**
 * Updates all Swiper instances found within the specified target content element.
 *
 * This function searches for elements with the class 'swiper-container' inside the given
 * targetContent element. For each container that has an initialized Swiper instance,
 * it calls the Swiper's `update` method to refresh its state. The update is triggered
 * after a short delay to ensure the DOM is ready.
 *
 * @param {Element} targetContent - The DOM element within which to search for Swiper containers.
 */
export function updateSwipers(targetContent) {
  setTimeout(() => {
    const swipers = targetContent.querySelectorAll('.swiper-container')
    swipers.forEach(container => {
      if (container.swiper && typeof container.swiper.update === 'function') {
        container.swiper.update()
      }
    })
  }, 100)
}

export function changeSwiperSlide(index, swiper) {
  if (swiper && typeof swiper.slideTo === 'function') {
    swiper.slideTo(index)
  }
}

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
