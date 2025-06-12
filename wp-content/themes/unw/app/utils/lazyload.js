import LazyLoad from 'vanilla-lazyload'

export const hasNativeLazyLoadSupport = 'loading' in HTMLImageElement.prototype

const initLazyLoad = () => {
  const lazy = new LazyLoad({
    elements_selector: '.lazyload'
    // threshold: 600,
    // use_native: false,
  })

  setTimeout(() => {
    lazy.loadAll()
  }, 200)

  return { hasNativeLazyLoadSupport, lazy }
}

export default initLazyLoad
