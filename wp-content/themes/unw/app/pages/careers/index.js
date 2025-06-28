import HeroSwiper from '../../components/HeroSwiper'
import Tabs from '../../components/Tabs'
import PostSwiper from '../../components/PostSwiper'
import PostSwiperDesktop from '../../components/PostSwiperDesktop'
import InternationalSwiper from '../../components/InternationalSwiper'

(function () {
  HeroSwiper()

  PostSwiper('.post-swiper')
  PostSwiperDesktop()
  InternationalSwiper('.internationalization')

  const tabsElement = document.querySelector('.career-tabs')
  if (tabsElement) {
    new Tabs({ element: tabsElement })
  }
})()
