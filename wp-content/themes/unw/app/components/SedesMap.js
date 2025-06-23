import Component from '../classes/Component'
import each from 'lodash/each'

export default class SedesMap extends Component {
  constructor({ element, sectionEl }) {
    super({
      element,
      elements: {
        cards: '.card-map',
        markers: '.facilities__map-marker',
        svg: '.facilities__map-svg.is-mobile'
      }
    })

    this.isMobile = true
    this.sectionEl = sectionEl
    this.createMap()
  }

  createMap() {
    const mql = window.matchMedia('(max-width: 1023px)')
    let removeEvents = () => { }

    const setUpMap = (matches) => {
      const media = matches ? 'is-mobile' : 'is-desktop'
      const mapQuery = `.facilities__map-svg.${media}`
      const markersQuery = `${mapQuery} .facilities__map-marker`

      this.isMobile = matches
      this.mapEl = this.element.querySelector(mapQuery)
      this.markers = [...this.element.querySelectorAll(markersQuery)]

      removeEvents()

      const timeout = setTimeout(() => {
        removeEvents = this.createMarkers()
        clearTimeout(timeout)
      }, 100)
    }

    setUpMap(mql.matches)

    mql.addListener(({ matches }) => {
      setUpMap(matches)
    })
  }

  /**
   * Set position x and y for card-map from all markers
   */
  createMarkers() {
    const listeners = []
    each(this.markers, marker => {
      const index = parseInt(marker.getAttribute('data-facility'))
      const card = this.element.querySelector(`.card-map[data-facility="${index}"]`)

      const removeEvent = this.showLocation(marker, card)
      listeners.push(removeEvent)
    })

    return () => {
      each(listeners, removeEvent => removeEvent())
    }
  }

  /**
   * Show card of marker
   * @param {HTMLElement} marker
   * @param {HTMLElement} card
   * @returns
   */
  showLocation(marker, card) {
    if (marker.classList.contains('is-active')) {
      return
    }

    const handleUpdate = () => {
      this.updateCardPosition(marker, card)
    }

    card.classList.add('is-active')
    handleUpdate()
    marker.classList.add('is-active')

    window.addEventListener('resize', handleUpdate)

    return () => {
      card.classList.remove('is-active')
      marker.classList.remove('is-active')
      window.removeEventListener('resize', handleUpdate)
    }
  }

  /**
   * Update position of card
   * @param {HTMLElement} marker
   * @param {HTMLElement} card
   * @returns
   */
  updateCardPosition(marker, card) {
    const cardArrow = card.querySelector('.card-map__arrow')
    const clientRectMarker = marker.getBoundingClientRect()
    const cardWidth = card.clientWidth
    const cardHeight = card.clientHeight
    const { top, left, sectionRight, markerWidth } = this.getPosition(clientRectMarker)
    const margin = this.isMobile ? 16 : 20
    let arrowPosition = 'bottom-right'
    let x = 0
    let y = 0

    if (this.isMobile) {
      if (cardWidth / 2 < sectionRight) {
        x = left - markerWidth / 2
        y = top - cardHeight - margin
        arrowPosition = 'bottom-left'
      } else {
        x = left - cardWidth + (markerWidth / 2) + margin
        y = top - cardHeight - margin
      }

      card.style.top = `${y}px`
      card.style.left = `${x}px`
    } else {
      x = left - cardWidth + (markerWidth / 2)
      y = top - cardHeight

      card.style.top = `calc(${y}px - 1.5rem)`
      card.style.left = `calc(${x}px + 2.15rem)`
    }

    cardArrow.classList.add(arrowPosition)
  }

  getPosition({ top, left, right, width }) {
    const clientRectMap = this.element.getBoundingClientRect()
    const clientRectSection = this.sectionEl.getBoundingClientRect()

    return {
      top: top - clientRectMap.top,
      left: left - clientRectMap.left,
      sectionLeft: left - clientRectSection.left,
      sectionRight: clientRectSection.right - right,
      markerWidth: width
    }
  }
}
