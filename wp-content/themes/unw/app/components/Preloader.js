import gsap from 'gsap'
import Component from '../classes/Component'
import ImagesLoaded from './ImagesLoaded'

export default class Preloader extends Component {
  constructor({ element, container, onCompleted }) {
    super({
      element,
      elements: {
        percentage: '.preloader__number__text'
      }
    })

    this.loaded = false
    this.onCompleted = onCompleted
    this.imagesLoaded = new ImagesLoaded({ element: container })

    this.createListeners()
  }

  createListeners() {
    // On progress
    this.imagesLoaded.on('progress', (percent) => {
      console.log('progress', percent)
      this.elements.percentage.innerHTML = `${Math.round(percent * 100)}%`
    })

    // On Done!
    this.imagesLoaded.on('done', () => {
      this.completed()
    })

    // On error
    this.imagesLoaded.on('error', (error) => {
      this.completed()
      console.error('Lazy error', error)
    })
  }

  completed() {
    if (this.loaded) {
      return
    }

    console.log('emit completed')

    this.loaded = true
    this.onCompleted()
    this.animate()
  }

  animate() {
    this.animateOut = gsap.timeline({
      delay: 0
    })

    // this.animateOut.to(this.elements.percentage, {
    //   autoAlpha: 0,
    //   duration: 0.3,
    //   ease
    // })

    this.animateOut.to(this.element, {
      autoAlpha: 0,
      duration: 0.5
    })

    this.animateOut.call(_ => {
      this.hiden()
    })
  }

  hiden() {
    this.element.classList.add('d-none')
  }
}
