
import PostSwiper from '../../components/PostSwiper'
import { $element } from '../../utils/dom'

(function () {
  const otherFeatures = $element('.other-features')
  const btnMore = $element('.other-features .other-features__title')

  const postSwiper = PostSwiper('.posts')

  if (otherFeatures) {
    const calcHeight = () => {
      const parent = otherFeatures
      const height = parent.scrollHeight
      parent.style.height = `${height}px`
    }

    setTimeout(() => {
      calcHeight()
    }, 100)

    btnMore.addEventListener('click', (e) => {
      e.preventDefault()
      if (!otherFeatures.classList.contains('is-active')) {
        calcHeight()
      }

      otherFeatures.classList.toggle('is-active')
    })
  }
})()
