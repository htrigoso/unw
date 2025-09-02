import HeroSwiper from '../../components/HeroSwiper'
import PostSwiper from '../../components/PostSwiper'
import InternationalSwiper from '../../components/InternationalSwiper'
import PostSwiperDesktop from '../../components/PostSwiperDesktop'
import FormCrmGeneral from '../../components/FormCRM/FormCrmGeneral'

(function () {
  HeroSwiper('.hero-swiper', {
    autoplay: false
  })
  PostSwiper('.testimonial-swiper')
  PostSwiper('.last-news-swiper', {
    pagination: {
      el: '.last-news-swiper .swiper-pagination',
      type: 'fraction'
    }
  })
  PostSwiper('.featured-events-swiper', {
    pagination: false
  })
  PostSwiperDesktop()
  InternationalSwiper()
})()
