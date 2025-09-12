import HeroSwiper from '../../components/HeroSwiper'
import PostSwiper from '../../components/PostSwiper'
import PostSwiperMobile from '../../components/PostSwiperMobile'

(function () {
  HeroSwiper('.hero-swiper')
  PostSwiper('.featured-events-swiper', {
    pagination: {
      el: '.featured-events-swiper .swiper-pagination',
      type: 'fraction'
    }
  })
  PostSwiperMobile('.all-events-swiper', {
    pagination: {
      el: '.all-events-swiper .swiper-pagination',
      type: 'fraction'
    }
  })
})()
