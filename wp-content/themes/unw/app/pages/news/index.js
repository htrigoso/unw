import PostSwiper from '../../components/PostSwiper'
import PostSwiperDesktop from '../../components/PostSwiperDesktop'
import Tabs from '../../components/Tabs'
import { updateSwipers } from '../../utils/swiper'

(function () {
  PostSwiperDesktop('.last-news-swiper', {
    breakpoints: {
      1024: { slidesPerView: 2, spaceBetween: 24 },
      1200: { slidesPerView: 3, spaceBetween: 24 }
    }
  })
  PostSwiper('.featured-news-swiper', {
    pagination: {
      el: '.featured-news-swiper .swiper-pagination',
      type: 'fraction'
    }
  })

  const tabsElement = document.querySelector('.news-tabs')
  if (tabsElement) {
    new Tabs({ element: tabsElement, onTabChange: updateSwipers })
  }
})()
