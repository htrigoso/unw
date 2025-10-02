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

  const updateScrollButtonStates = () => {
    const isAtStart = list.scrollLeft <= 0
    prevButton.setAttribute('aria-disabled', isAtStart)

    const isAtEnd = list.scrollLeft + list.clientWidth >= list.scrollWidth - 1
    nextButton.setAttribute('aria-disabled', isAtEnd)
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
    list.removeEventListener('scroll', updateScrollButtonStates)
    window.removeEventListener('resize', updateScrollButtonStates)
  }

  return { destroy }
}

function scrollToTab(tab) {
  const isWide = window.innerWidth >= 1440

  if (!tab) return

  tab.scrollIntoView({
    behavior: 'smooth',
    inline: isWide ? 'nearest' : 'center',
    block: 'nearest'
  })
}
