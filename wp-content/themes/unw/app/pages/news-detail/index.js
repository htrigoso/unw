import CarouselSwiper from '../../components/CarouselSwiper'
import PostSwiper from '../../components/PostSwiper'

(function () {
  CarouselSwiper()
  PostSwiper('.featured-news-swiper', {
    pagination: {
      el: '.featured-news-swiper .swiper-pagination',
      type: 'fraction'
    }
  })
})()
