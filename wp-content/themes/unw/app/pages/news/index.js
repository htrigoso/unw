import PostSwiper from '../../components/PostSwiper'
import Tabs from '../../components/Tabs'
import { updateSwipers } from '../../utils/swiper'

(function () {
  PostSwiper('.featured-news-swiper', {
    pagination: {
      el: '.featured-news-swiper .swiper-pagination',
      type: 'fraction'
    }
  })

  const tabsElement = document.querySelector('.news-tabs')
  if (tabsElement) {
    new Tabs({
      element: tabsElement,
      preventDefault: true,
      onTabChange(tab, targetContent, tabIndex) {
        updateSwipers(targetContent)
      }
    })
  }
})()
