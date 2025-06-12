import Swiper from 'swiper/bundle'

const PostSwiper = (sectionEl = '.posts') => {
  return new Swiper(`${sectionEl} .swiper-container`, {
    loop: false,
    paginationClickable: true,
    slidesPerView: 'auto',
    spaceBetween: 16,
    // centeredSlides: true,
    grabCursor: true,
    navigation: {
      prevEl: `${sectionEl} .swiper-button-left`,
      nextEl: `${sectionEl} .swiper-button-right`
    },
    pagination: {
      el: `${sectionEl} .swiper-pagination`
    },
    breakpoints: {
      576: {
        slidesPerView: 'auto',
        spaceBetween: 24
      },
      1024: {
        slidesPerView: 'auto',
        spaceBetween: 32
      },
      1440: {
        slidesPerView: 'auto',
        spaceBetween: 40
      }
    }
  })
}

export default PostSwiper
