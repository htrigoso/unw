import Swiper from 'swiper/bundle'

const PostSwiper = (sectionEl = '.posts') => {
  return new Swiper(`${sectionEl} .swiper-container`, {
    loop: false,
    slidesPerView: 'auto',
    spaceBetween: 8,
    grabCursor: true,
    pagination: {
      el: `${sectionEl} .swiper-pagination`,
      clickable: true
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

export default PostSwiper
