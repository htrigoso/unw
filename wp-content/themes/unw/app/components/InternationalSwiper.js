import Swiper from 'swiper/bundle'

const InternationalSwiper = (sectionEl = '.international-agreements') => {
  const container = document.querySelector(`${sectionEl} .swiper`) ||
    document.querySelector(`${sectionEl} .swiper-container`)

  if (!container) return null
  if (!container.classList.contains('swiper')) {
    container.classList.add('swiper')
  }

  return new Swiper(container, {
    slidesPerView: 'auto',
    spaceBetween: 12,
    grabCursor: true,
    navigation: {
      nextEl: `${sectionEl} .swiper-primary-button-next`,
      prevEl: `${sectionEl} .swiper-primary-button-prev`
    },
    breakpoints: {
      576: {
        slidesPerView: 'auto',
        spaceBetween: 16
      },
      1024: {
        slidesPerView: 'auto',
        spaceBetween: 24
      }
    }
  })
}

export default InternationalSwiper
