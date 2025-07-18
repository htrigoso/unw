import HeroSwiper from '../../components/HeroSwiper'
import PostSwiper from '../../components/PostSwiper'
import PostSwiperDesktop from '../../components/PostSwiperDesktop'

(function () {
  HeroSwiper('.hero-swiper')
  PostSwiperDesktop('.featured-events-swiper', {
    breakpoints: {
      1024: { slidesPerView: 2 },
      1200: { slidesPerView: 3, spaceBetween: 87 }
    }
  })
  PostSwiper('.all-events-swiper', {
    pagination: {
      el: '.all-events-swiper .swiper-pagination',
      type: 'fraction'
    }
  })
})()
