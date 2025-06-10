import Component from '@classes/Component';
import '@components/general/header-v2/index.scss';

export default class Header extends Component {
  constructor() {
    super({
      element: '.header__v2',
      elements: {
        playVideo: '.play_button',
        videoContainer: '.header__video',
        video: '.header__video video',
        headline: '.header__container',
        targetScroll: '.header__scroll_down',
      },
    });

    this.render();
  }

  render() {
    this.bindEvents();
    this.playVideo();
    this.videoStream();
    this.triggerScroll();
  }

  bindEvents() {
    window.addEventListener('load', this.addTransitions);
  }

  playVideo() {
    if (!this.elements.playVideo || !this.elements.video) return;

    this.elements.playVideo.addEventListener('click', () => {
      this.elements.videoContainer.classList.add('header__video__active');

      if (this.elements.video.paused) {
        this.elements.video.play();
        this.elements.headline.classList.add('header__container__inactive');
        this.elements.playVideo.classList.add('play_button__playing');
      } else {
        this.elements.video.pause();
        this.elements.headline.classList.remove('header__container__inactive');
        this.elements.playVideo.classList.remove('play_button__playing');
      }
    });
  }

  videoStream() {
    if (!this.elements.video) return;

    let timer = null;

    this.element.addEventListener('mousemove', () => {
      timer && clearTimeout(timer);

      if (!this.elements.playVideo) return;

      this.elements.playVideo.classList.remove('play_button__unmove');

      timer = setTimeout(() => {
        !this.elements.video.paused && this.elements.playVideo.classList.add('play_button__unmove');
      }, 1000);
    });
  }

  triggerScroll() {
    if (!this.elements.targetScroll) return;

    this.elements.targetScroll.addEventListener('click', (event) => {
      const parent = event.target.closest('header');
      const target = parent.nextSibling.nextElementSibling;

      target && this.scrollToElement(target);
    });
  }

  scrollToElement(input) {
    let targetElement = input instanceof HTMLElement ? input : document.querySelector(input);

    if (!targetElement) return;

    targetElement.scrollIntoView({
      behavior: 'smooth',
      block: 'start',
    });
  }

  addTransitions() {
    if (!this.element) return;

    this.element.classList.add('header__has_transition');
  }
}
