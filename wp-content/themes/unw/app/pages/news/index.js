import PostSwiper from '../../components/PostSwiper'

(function () {
  PostSwiper('.featured-news-swiper', {
    pagination: {
      el: '.featured-news-swiper .swiper-pagination',
      type: 'fraction'
    }
  })
})()
