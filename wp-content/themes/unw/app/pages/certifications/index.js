import Swiper from 'swiper'
import HeroSwiper from '../../components/HeroSwiper'
import PostSwiper from '../../components/PostSwiper'

(function () {
  const heroSwiper = HeroSwiper()
  const postSwiper = PostSwiper('.posts')
  const certSwiper = new Swiper('.certificates .swiper-container', {
    loop: false,
    paginationClickable: true,
    slidesPerView: 'auto',
    spaceBetween: 16,
    // centeredSlides: true,
    grabCursor: true,
    breakpoints: {
      1024: {
        slidesPerView: 5,
        spaceBetween: 24
      },
      1366: {
        slidesPerView: 6,
        spaceBetween: 24
      }
    }
  })
})()
