export function initializeScrollableTabs(containerElement, options = {}, onInit) {
  const config = {
    listSelector: '.nav-tabs__list',
    listItemsSelector: '.tab__item',
    prevButtonSelector: '.nav-tabs--prev',
    nextButtonSelector: '.nav-tabs--next',
    scrollAmount: 250,
    ...options
  }

  const list = containerElement.querySelector(config.listSelector)
  const listItems = containerElement.querySelectorAll(config.listItemsSelector)

  const prevButton = containerElement.querySelector(config.prevButtonSelector)
  const nextButton = containerElement.querySelector(config.nextButtonSelector)

  if (!list || !prevButton || !nextButton) {
    console.warn('Scrollable tabs initialization failed: one or more required elements not found.')
    return
  }

  let rafId = null

  const updateScrollButtonStates = () => {
    if (rafId) return

    rafId = requestAnimationFrame(() => {
      const isAtStart = list.scrollLeft <= 0
      prevButton.setAttribute('aria-disabled', isAtStart)

      const isAtEnd = list.scrollLeft + list.clientWidth >= list.scrollWidth - 1
      nextButton.setAttribute('aria-disabled', isAtEnd)

      rafId = null
    })
  }

  nextButton.addEventListener('click', () => {
    list.scrollBy({ left: config.scrollAmount, behavior: 'smooth' })
  })

  prevButton.addEventListener('click', () => {
    list.scrollBy({ left: -config.scrollAmount, behavior: 'smooth' })
  })

  list.addEventListener('scroll', updateScrollButtonStates)
  window.addEventListener('resize', updateScrollButtonStates)

  updateScrollButtonStates()

  const activeTab = Array.from(listItems)
    .find(tab => tab.classList.contains('is-active'))
  if (activeTab) {
    scrollToTab(activeTab)
  }

  const destroy = () => {
    if (rafId) {
      cancelAnimationFrame(rafId)
    }
    list.removeEventListener('scroll', updateScrollButtonStates)
    window.removeEventListener('resize', updateScrollButtonStates)
  }

  return { destroy }
}

function scrollToTab(tab) {
  if (!tab) return

  const container = tab.closest('.nav-tabs__list')

  // Batch read: agrupar todas las lecturas de geometría juntas
  requestAnimationFrame(() => {
    const tabLeft = tab.offsetLeft
    const tabWidth = tab.offsetWidth
    const containerScrollLeft = container.scrollLeft
    const containerWidth = container.clientWidth

    // Calcular después de leer todas las propiedades
    const tabRight = tabLeft + tabWidth
    const containerRight = containerScrollLeft + containerWidth

    if (tabLeft < containerScrollLeft) {
      container.scrollTo({
        left: tabLeft,
        behavior: 'smooth'
      })
    } else if (tabRight > containerRight) {
      container.scrollTo({
        left: tabRight - containerWidth,
        behavior: 'smooth'
      })
    }
  })
}
