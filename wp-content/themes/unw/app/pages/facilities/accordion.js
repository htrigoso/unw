import { $elements } from '../../utils/dom'

export default function initFacilitiesAccordion () {
  const facilities = $elements('.facilities__list__item')

  facilities.forEach(facility => {
    facility.querySelector('.facilities__list__item-header')
      .addEventListener('click', (e) => {
        e.preventDefault()
        const height = facility.scrollHeight
        facility.style.height = `${height}px`

        toggleFacilityItem({ facility })
      })
  })

  const toggleFacilityItem = ({ facility }) => {
    if (facility.classList.contains('is-active')) {
      removeActiveClass(facility)
      return
    }

    for (const el of facilities) {
      removeActiveClass(el)
    }

    facility.classList.add('is-active')
  }

  const removeActiveClass = (el) => {
    if (el.classList.contains('is-active')) {
      el.classList.remove('is-active')
    }
  }
}
