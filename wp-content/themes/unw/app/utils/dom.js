export const $element = (selector) => document.querySelector(selector)

export const $elements = (selector) => document.querySelectorAll(selector)

// Check if window loaded
export const isWindowLoaded = () => {
  return window.document.readyState === 'complete'
}

export const windowSize = () => {
  return {
    width: window.innerWidth,
    height: window.innerHeight
  }
}
