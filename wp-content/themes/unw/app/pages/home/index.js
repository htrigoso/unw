import HeroSwiper from '../../components/HeroSwiper'
import PostSwiper from '../../components/PostSwiper'
import InternationalSwiper from '../../components/InternationalSwiper'
import PostSwiperDesktop from '../../components/PostSwiperDesktop'

(function () {
  HeroSwiper('.hero-swiper', {
    autoplay: false
  })
  PostSwiper('.testimonial-swiper')
  PostSwiper('.last-news-swiper')
  PostSwiper('.featured-events-swiper', {
    pagination: false
  })
  PostSwiperDesktop()
  InternationalSwiper()
})()
