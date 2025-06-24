import Swiper from 'swiper/bundle'

let swiperInstance = null

const isTablet = () => window.innerWidth >= 768

const PostSwiperDesktop = (sectionEl = '.post-swiper-desktop') => {
  const selector = `${sectionEl} .swiper-container`

  const init = () => {
    if (isTablet() && !swiperInstance) {
      swiperInstance = new Swiper(selector, {
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
      })
    } else if (!isTablet() && swiperInstance) {
      swiperInstance.destroy(true, true)
      swiperInstance = null
    }
  }

  init()

  window.removeEventListener('resize', init)
  window.addEventListener('resize', init)
}

export default PostSwiperDesktop
