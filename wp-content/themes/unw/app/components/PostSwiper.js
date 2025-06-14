import Swiper from 'swiper/bundle'

const PostSwiper = (sectionEl = '.posts') => {
  return new Swiper(`${sectionEl} .swiper-container`, {
    loop: false,
    paginationClickable: true,
    slidesPerView: 'auto',
    spaceBetween: 16,
    grabCursor: true,
    pagination: {
      el: `${sectionEl} .swiper-pagination`
    },
    breakpoints: {
      576: {
        slidesPerView: 'auto',
        spaceBetween: 24
      }
    }
  })
}

export default PostSwiper
