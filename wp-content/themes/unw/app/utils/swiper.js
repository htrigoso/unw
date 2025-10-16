
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

/**
 * Manages custom pagination for a Swiper instance by adding click event listeners
 * to pagination bullets and navigating to the corresponding slide.
 *
 * @param {Object} swiper - The Swiper instance to manage pagination for.
 */
export function managePagination(swiper) {
  if (!swiper || !swiper.pagination) {
    console.warn('Swiper or pagination not found')
    return
  }

  setTimeout(() => {
    const paginationEl = swiper.pagination.el

    if (!paginationEl) {
      console.warn('Pagination element not found')
      return
    }

    const container = typeof paginationEl === 'string'
      ? document.querySelector(paginationEl)
      : (paginationEl instanceof HTMLElement ? paginationEl : paginationEl[0])

    if (!container) {
      return
    }

    container.addEventListener('click', (e) => {
      const bullet = e.target.closest('.swiper-pagination-bullet')

      if (bullet) {
        const allBullets = container.querySelectorAll('.swiper-pagination-bullet')
        const index = Array.from(allBullets).indexOf(bullet)

        if (index !== -1) {
          if (swiper.params.loop) {
            swiper.slideToLoop(index)
          } else {
            changeSwiperSlide(index, swiper)
          }
        }
      }
    })
  }, 100)
}
