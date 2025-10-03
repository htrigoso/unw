import HeroSwiper from '../../components/HeroSwiper'

(function () {
  HeroSwiper('.hero-swiper', {
    autoplay: {
      delay: 2500,
      disableOnInteraction: false
    },
    loop: false
  })
})()
