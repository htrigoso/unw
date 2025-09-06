// purgecss.safelist.js
module.exports = {
  standard: [
    'swiper', 'swiper-wrapper', 'swiper-slide',
    'swiper-pagination', 'swiper-pagination-bullet',
    'swiper-button-disabled',
    // estados dinámicos
    'swiper-slide-active',
    'swiper-slide-next',
    'swiper-slide-prev',

    'main-submenu-wrapper__main',
    'main-submenu-wrapper__content',
    'main-submenu-wrapper',
    'menu-item-parent-page',
    'submenu-tab',
    'sidebar__menu',
    'menu-item',
    'sidebar__submenu',
    'sidebar__submenu-back',
    'sidebar__menu-link',
    'sidebar__submenu-title',
    'visible'

  ],
  greedy: [
    /^main-submenu-wrapper__main(?:--[a-z0-9_-]+)?$/,
    /^swiper-slide-(active|next|prev)$/,
    /^swiper-pagination-bullet(-active)?$/,
    /^swiper-(primary-)?button-(next|prev)$/],
  deep: [/^is-/, /^has-/, /active$/, /show$/]
}
