import PostSwiper from '../../components/PostSwiper'

(function () {
  PostSwiper('.purpose-swiper', {
    breakpoints: {
      0: { slidesPerView: 1, spaceBetween: 8 },
      576: { slidesPerView: 1, spaceBetween: 8 },
      768: { slidesPerView: 3, spaceBetween: 8 },
      1024: { slidesPerView: 3, spaceBetween: 8 },
      1200: { slidesPerView: 3, spaceBetween: 8 }
    }
  })

  PostSwiper('.authorities-swiper', {
    breakpoints: {
      0: { slidesPerView: 'auto', spaceBetween: 16 },
      576: { slidesPerView: 'auto', spaceBetween: 16 },
      768: { slidesPerView: 'auto', spaceBetween: 16 },
      1024: { slidesPerView: 'auto', spaceBetween: 16 }
    }
  })

  PostSwiper('.certifications-swiper', {
    breakpoints: {
      0: { slidesPerView: 'auto', spaceBetween: 24 },
      576: { slidesPerView: 'auto', spaceBetween: 24 },
      1024: { slidesPerView: 'auto', spaceBetween: 24 }
    }
  })
})()
