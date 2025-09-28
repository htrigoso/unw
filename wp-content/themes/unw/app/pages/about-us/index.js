import PostSwiper from '../../components/PostSwiper'

(function () {
  PostSwiper('.purpose-swiper', {
    breakpoints: {
      0: { slidesPerView: 1, spaceBetween: 8 },
      576: { slidesPerView: 1, spaceBetween: 8 },
      768: { slidesPerView: 3, spaceBetween: 8 },
      1024: { slidesPerView: 3, spaceBetween: 8 }
    },
    pagination: {
      el: '.purpose-swiper .swiper-pagination',
      type: 'fraction'
    }
  })

  PostSwiper('.authorities-swiper', {
    breakpoints: {
      0: { slidesPerView: 'auto', spaceBetween: 16 },
      576: { slidesPerView: 'auto', spaceBetween: 16 },
      768: { slidesPerView: 'auto', spaceBetween: 16 },
      1024: { slidesPerView: 'auto', spaceBetween: 16 }
    },
    pagination: {
      el: '.authorities-swiper .swiper-pagination',
      type: 'fraction'
    }
  })

  PostSwiper('.certifications-swiper', {
    breakpoints: {
      0: { slidesPerView: 'auto', spaceBetween: 32 },
      576: { slidesPerView: 'auto', spaceBetween: 32 },
      1024: { slidesPerView: 'auto', spaceBetween: 32 }
    },
    pagination: {
      el: '.certifications-swiper .swiper-pagination',
      type: 'fraction'
    }
  })
})()
