import { createSwiper } from './createSwiper'

const PostSwiper = (sectionEl = '.post-swiper', config = {}) => {
  const defaultConfig = {
    // ✅ Evita observadores automáticos que disparan reflows
    observer: false,
    observeParents: false,

    // ✅ Desactiva tracking continuo de progresos/dimensiones
    watchSlidesProgress: false,
    watchOverflow: true, // Mantener para evitar render innecesario si hay solo un slide
    updateOnWindowResize: false,
    loop: false,
    slidesPerView: 'auto',
    spaceBetween: 8,
    pagination: {
      el: `${sectionEl} .swiper-pagination`,
      clickable: true
    },
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
  }

  return createSwiper(sectionEl, config, defaultConfig)
}

export default PostSwiper
