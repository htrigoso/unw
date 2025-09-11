import { createSwiper } from './createSwiper'

const isMobile = () => window.innerWidth < 768

const instances = new Map()

const PostSwiperMobile = (sectionEl = '.post-swiper-mobile', config = {}) => {
  const defaultConfig = {
    loop: false,
    slidesPerView: 'auto',
    spaceBetween: 8,
    pagination: {
      el: `${sectionEl} .swiper-pagination`
    },
    navigation: {
      nextEl: `${sectionEl} .swiper-primary-button-next`,
      prevEl: `${sectionEl} .swiper-primary-button-prev`
    },
    breakpoints: {
      576: {
        spaceBetween: 16
      }
    }
  }

  function handleResize() {
    let swiperInstance = instances.get(sectionEl)

    if (isMobile() && !swiperInstance) {
      swiperInstance = createSwiper(sectionEl, config, defaultConfig)
      instances.set(sectionEl, swiperInstance)
    } else if (!isMobile() && swiperInstance) {
      swiperInstance.destroy(true, true)
      instances.delete(sectionEl)
    }
  }

  handleResize()

  const resizeKey = `__postSwiperMobileResize_${sectionEl}`
  if (!window[resizeKey]) {
    window.addEventListener('resize', handleResize)
    window[resizeKey] = true
  }
}

export default PostSwiperMobile
