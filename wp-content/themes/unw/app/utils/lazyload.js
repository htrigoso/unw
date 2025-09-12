import LazyLoad from 'vanilla-lazyload'

export const hasNativeLazyLoadSupport = 'loading' in HTMLImageElement.prototype

const initLazyLoad = () => {
  const lazy = new LazyLoad({
    elements_selector: '.lazyload'
    // threshold: 400,
    // use_native: true
  })
  return { hasNativeLazyLoadSupport, lazy }
}

export default initLazyLoad
