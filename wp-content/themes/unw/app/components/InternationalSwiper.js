import Swiper from 'swiper/bundle'

const InternationalSwiper = (sectionEl = '.international-agreements') => {
  return new Swiper(`${sectionEl} .swiper-container`, {
    // ✅ Evita observadores automáticos que disparan reflows
    observer: false,
    observeParents: false,

    // ✅ Desactiva tracking continuo de progresos/dimensiones
    watchSlidesProgress: false,
    watchOverflow: true, // Mantener para evitar render innecesario si hay solo un slide
    updateOnWindowResize: false,
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
