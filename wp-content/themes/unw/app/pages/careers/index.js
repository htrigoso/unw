import HeroSwiper from '../../components/HeroSwiper'
import Tabs from '../../components/Tabs'
import PostSwiper from '../../components/PostSwiper'
import PostSwiperDesktop from '../../components/PostSwiperDesktop'
import InternationalSwiper from '../../components/InternationalSwiper'
import { updateSwipers } from '../../utils/swiper'
import Accordion from '../../components/Accordion'
import FormCrmCareer from '../../components/FormCRM/FormCrmCareer'

(function () {
  HeroSwiper('.hero-swiper', {
    autoplay: {
      delay: 15000,
      disableOnInteraction: false
    }
  })

  PostSwiper('.testimonials-swiper', {
    pagination: {
      el: '.testimonials-swiper .swiper-pagination',
      type: 'fraction'
    }
  })
  PostSwiper('.program-swiper', {
    breakpoints: {
      1024: { slidesPerView: 2 },
      1200: { slidesPerView: 3, spaceBetween: 52 }
    },
    pagination: {
      el: '.program-swiper .swiper-pagination',
      type: 'fraction'
    }
  })
  PostSwiper('.staff-swiper', {
    breakpoints: {
      1024: { slidesPerView: 2 },
      1200: { slidesPerView: 3, spaceBetween: 46 }
    },
    pagination: {
      el: '.staff-swiper .swiper-pagination',
      type: 'fraction'
    }
  })
  PostSwiperDesktop('.infra-swiper', {
    breakpoints: {
      1024: { slidesPerView: 2 },
      1200: { slidesPerView: 3, spaceBetween: 42 }
    },
    pagination: {
      el: '.infra-swiper .swiper-pagination',
      type: 'fraction'
    }
  })
  PostSwiperDesktop('.admission-swiper', {
    breakpoints: {
      1024: { slidesPerView: 2 },
      1200: { slidesPerView: 3, spaceBetween: 40 }
    },
    pagination: {
      el: '.admission-swiper .swiper-pagination',
      type: 'fraction'
    }
  })
  InternationalSwiper('.internationalization')

  document.querySelectorAll('.dynamic-accordion').forEach(element => {
    new Accordion({ element, allowMultiple: true })
  })

  const tabsElement = document.querySelector('.career-tabs')
  if (tabsElement) {
    new Tabs({
      element: tabsElement,
      onTabChange(tab, targetContent, tabIndex) {
        updateSwipers(targetContent)
      }
    })
  }

  new FormCrmCareer({
    element: 'form'
  })
})()
