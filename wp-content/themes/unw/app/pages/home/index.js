import Swiper from 'swiper/bundle'
import HeroSwiper from '../../components/HeroSwiper'
import PostSwiper from '../../components/PostSwiper'

(function () {
  const heroSwiper = HeroSwiper()
  const postSwiper = PostSwiper('.posts')

  const productSwiper = new Swiper('.products .swiper-container', {
    loop: true,
    paginationClickable: true,
    slidesPerView: 'auto',
    spaceBetween: 16,
    grabCursor: true,
    navigation: {
      // prevEl: '.products .swiper-button-left',
      nextEl: '.products .swiper-button-next'
    },
    pagination: {
      el: '.products .swiper-pagination'
    },
    breakpoints: {
      576: {
        slidesPerView: 'auto',
        spaceBetween: 24
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 32
      }
    }
  })
})()
