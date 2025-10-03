import HeroSwiper from '../../components/HeroSwiper'
import { ModalManager } from '../../components/Modal'
import PostSwiper from '../../components/PostSwiper'

(function () {
  HeroSwiper('.hero-swiper', {
    autoplay: {
      delay: 2500,
      disableOnInteraction: false
    },
    loop: false
  })

  PostSwiper('.destacados-swiper')

  new ModalManager({
    onOpen: (modal, trigger) => {
      const swiperElement = modal.querySelector('.destacados-modal-swiper')

      if (swiperElement) {
        let swiperInstance = swiperElement.swiper

        if (!swiperInstance) {
          swiperInstance = PostSwiper('.destacados-modal-swiper', {
            slidesPerView: 1,
            breakpoints: {
              0: { slidesPerView: 1, spaceBetween: 8 },
              576: { slidesPerView: 1, spaceBetween: 8 },
              1024: { slidesPerView: 1, spaceBetween: 8 },
              1200: { slidesPerView: 1, spaceBetween: 8 }
            }
          })
        }
        const slideIndex = trigger?.dataset?.slideIndex

        if (swiperInstance && slideIndex !== undefined) {
          swiperInstance.slideTo(parseInt(slideIndex, 10), 0)
          swiperInstance.update()
        }
      }
    }
  })
})()
