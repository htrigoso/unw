import { createSwiper } from './createSwiper'

const isTablet = () => window.innerWidth >= 768

const instances = new Map()

const PostSwiperDesktop = (sectionEl = '.post-swiper-desktop', config = {}) => {
  const defaultConfig = {
    loop: false,
    slidesPerView: 'auto',
    spaceBetween: 8,
    grabCursor: true,
    pagination: {
      el: `${sectionEl} .swiper-pagination`
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

  function handleResize() {
    let swiperInstance = instances.get(sectionEl)
    if (isTablet() && !swiperInstance) {
      swiperInstance = createSwiper(sectionEl, config, defaultConfig)
      instances.set(sectionEl, swiperInstance)
    } else if (!isTablet() && swiperInstance) {
      swiperInstance.destroy(true, true)
      instances.delete(sectionEl)
    }
  }

  handleResize()

  const resizeKey = `__postSwiperDesktopResize_${sectionEl}`
  if (!window[resizeKey]) {
    window.addEventListener('resize', handleResize)
    window[resizeKey] = true
  }
}

export default PostSwiperDesktop
