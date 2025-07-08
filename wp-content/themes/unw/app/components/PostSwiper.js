import { createPostSwiper } from './createPostSwiper'

const PostSwiper = (sectionEl = '.post-swiper', config = {}) => {
  const defaultConfig = {
    loop: false,
    slidesPerView: 'auto',
    spaceBetween: 8,
    grabCursor: true,
    pagination: {
      el: `${sectionEl} .swiper-pagination`,
      clickable: true
    },
    navigation: {
      nextEl: `${sectionEl} .post-swiper-button-next`,
      prevEl: `${sectionEl} .post-swiper-button-prev`
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

  return createPostSwiper(sectionEl, config, defaultConfig)
}

export default PostSwiper
