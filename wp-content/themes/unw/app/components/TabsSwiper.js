import Swiper from 'swiper/bundle'

const TabSwiper = (sectionEl = '.tabs-swiper') => {
  const container = document.querySelector(`${sectionEl} .swiper`) ||
    document.querySelector(`${sectionEl} .swiper-container`)

  if (!container) return null
  if (!container.classList.contains('swiper')) {
    container.classList.add('swiper')
  }

  return new Swiper(container, {
    loop: false,
    slidesPerView: 'auto',
    spaceBetween: 0,
    grabCursor: true
  })
}

export default TabSwiper
