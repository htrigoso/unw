export default class SwiperHero {
  constructor() {
    this.initHomeComponents()
  }

  async initHomeComponents() {
    const heroElement = document.querySelector('.hero-swiper')
    if (!heroElement) return

    const [{ default: HeroSwiper }, { managePagination }] = await Promise.all([
      import('../components/HeroSwiper'),
      import('../utils/swiper')
    ])

    const heroSwiper = HeroSwiper('.hero-swiper', {
      pagination: {
        el: '.hero-swiper .home-hero-pagination',
        type: 'bullets',
        clickable: false
      },
      navigation: {
        nextEl: '.hero-swiper .home-hero-button-next',
        prevEl: '.hero-swiper .home-hero-button-prev'
      },
      loop: false
    })

    if (heroSwiper) {
      managePagination(heroSwiper)
    }
  }
}
