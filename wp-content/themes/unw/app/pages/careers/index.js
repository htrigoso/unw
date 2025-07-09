import HeroSwiper from '../../components/HeroSwiper'
import Tabs from '../../components/Tabs'
import PostSwiper from '../../components/PostSwiper'
import PostSwiperDesktop from '../../components/PostSwiperDesktop'
import InternationalSwiper from '../../components/InternationalSwiper'

(function () {
  HeroSwiper()

  PostSwiper('.testimonials-swiper')
  PostSwiper('.program-swiper', {
    breakpoints: {
      1024: { slidesPerView: 2 },
      1200: { slidesPerView: 3, spaceBetween: 52 }
    }
  })
  PostSwiper('.staff-swiper', {
    breakpoints: {
      1024: { slidesPerView: 2 },
      1200: { slidesPerView: 3, spaceBetween: 46 }
    }
  })
  PostSwiperDesktop('.infra-swiper', {
    breakpoints: {
      1024: { slidesPerView: 2 },
      1200: { slidesPerView: 3, spaceBetween: 42 }
    }
  })
  PostSwiperDesktop('.admission-swiper', {
    breakpoints: {
      1024: { slidesPerView: 2 },
      1200: { slidesPerView: 3, spaceBetween: 40 }
    }
  })
  InternationalSwiper('.internationalization')

  const tabsElement = document.querySelector('.career-tabs')
  if (tabsElement) {
    new Tabs({ element: tabsElement })
  }
})()
