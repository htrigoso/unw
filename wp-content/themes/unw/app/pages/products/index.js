import each from 'lodash/each'
import Swiper from 'swiper'
import Category from '../../components/Category'
import HeroSwiper from '../../components/HeroSwiper'
import PostSwiper from '../../components/PostSwiper'
import { $element, $elements } from '../../utils/dom'

const createObserver = (callback) => {
  const options = {
    rootMargin: '0px',
    threshold: 0.25
  }

  return new window.IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (!entry.isVisible && entry.isIntersecting) {
        callback(entry)
      }
    })
  }, options)
}

(function () {
  const categories = $elements('.category')
  const tabs = $elements('.category-tab__item-link')
  const heroSwiper = HeroSwiper()
  const postSwiper = PostSwiper()
  const categoryObserver = createObserver(({ target }) => {
    const tabItem = $element(`.category-tab__item-link[data-category="${target.id}"]`)

    if (!tabItem) {
      return
    }

    each(tabs, el => el.classList.remove('is-active'))

    tabItem.classList.add('is-active')
  })

  each(categories, element => {
    const id = element.id
    const category = new Category({ id, element })
    categoryObserver.observe(element)
  })

  const categorySwiper = new Swiper('.category .swiper-container', {
    loop: false,
    paginationClickable: true,
    slidesPerView: 'auto',
    spaceBetween: 16,
    // centeredSlides: true,
    grabCursor: true,
    navigation: {
      prevEl: '.category .swiper-button-left',
      nextEl: '.category .swiper-button-right'
    },
    pagination: {
      el: '.category .swiper-pagination'
    },
    breakpoints: {
      576: {
        slidesPerView: 'auto',
        spaceBetween: 24
      },
      1366: {
        slidesPerView: 'auto',
        spaceBetween: 32
      }
    }
  })
})()
