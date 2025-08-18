import PostSwiper from '../../components/PostSwiper'

(function () {
  PostSwiper('.purpose-swiper', {
    breakpoints: {
      0: { slidesPerView: 1, spaceBetween: 8 },
      576: { slidesPerView: 1, spaceBetween: 8 },
      1024: { slidesPerView: 3, spaceBetween: 8 }
    },
    pagination: {
      el: '.purpose-swiper .swiper-pagination',
      type: 'fraction'
    }
  })
})()
