import PostSwiper from '../../components/PostSwiper'
import Tabs from '../../components/Tabs'

(function () {
  PostSwiper('.last-news-swiper', {
    breakpoints: {
      1024: { slidesPerView: 2, spaceBetween: 24 },
      1200: { slidesPerView: 3, spaceBetween: 24 }
    }
  })

  const tabsElement = document.querySelector('.news-tabs')
  if (tabsElement) {
    new Tabs({ element: tabsElement })
  }
})()
