import PostSwiper from '../../components/PostSwiper'

(function () {
  PostSwiper('.promote-swiper', {
    breakpoints: {
      0: { slidesPerView: 'auto', spaceBetween: 16 },
      768: { slidesPerView: 'auto', spaceBetween: 16 },
      1024: { slidesPerView: 'auto', spaceBetween: 16 }
    }
  })
})()
