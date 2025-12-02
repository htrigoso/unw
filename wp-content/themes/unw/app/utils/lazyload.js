import LazyLoad from 'vanilla-lazyload'

export const hasNativeLazyLoadSupport = 'loading' in HTMLImageElement.prototype

const initLazyLoad = () => {
  const lazy = new LazyLoad({
    elements_selector: '.lazyload',
    use_native: true,
    cancel_on_exit: true
  })
  return { hasNativeLazyLoadSupport, lazy }
}

export default initLazyLoad
