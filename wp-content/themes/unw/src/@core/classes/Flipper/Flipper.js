import '@classes/Flipper/Flipper.scss';
import setStyleSheetVars from '@utils/styleSheetVars';

class Flipper {
  constructor(id) {
    this.rootElement = document.querySelector(`[data-flipper-id="${id}"]`);
    this.rootWrapperElement = this.rootElement.querySelector('.flipper__book');
    this.rootInnerElement = this.rootElement.querySelector('.flipper__book__inner');
    this.pageElements = this.rootElement.querySelectorAll('[data-flipper-page]');
    this.prevElement = this.rootElement.querySelector('[data-flipper-action="prev"]');
    this.nextElement = this.rootElement.querySelector('[data-flipper-action="next"]');

    this.activeIndex = this.pageElements.length;
    this.zIndex = 1;
    this.timeoutLeft = 350;
    this.timeoutRight = 300;

    this.touchStartX = 0;
    this.touchEndX = 0;

    this.clickCounter = 0;

    this.init();
  }

  init() {
    this.bindCommonEvents();
    this.bindNavigation();
    this.triggerCover('add', 'cover__start');
  }

  dispose() {
    this.unbindCommonEvents();
    this.unbindNavigation();

    for (let i = 0; i < this.pageElements.length; i++) {
      this.pageElements[i].classList.remove('flip');
      this.pageElements[i].style.zIndex = 'auto';
    }
  }

  triggerCover(action, className) {
    switch (action) {
      case 'add':
        this.rootInnerElement.classList.add(className);
        break;

      case 'remove':
        this.rootInnerElement.classList.remove(className);
        break;
    }
  }

  bindCommonEvents() {
    document.addEventListener('DOMContentLoaded', this.setFlipperPageSize.bind(this));
    window.addEventListener('load', this.setFlipperPageSize.bind(this));
    window.addEventListener('scroll', this.setFlipperPageSize.bind(this));
    window.addEventListener('resize', this.setFlipperPageSize.bind(this));
  }

  unbindCommonEvents() {
    document.removeEventListener('DOMContentLoaded', this.setFlipperPageSize.bind(this));
    window.removeEventListener('load', this.setFlipperPageSize.bind(this));
    window.removeEventListener('scroll', this.setFlipperPageSize.bind(this));
    window.removeEventListener('resize', this.setFlipperPageSize.bind(this));
  }

  bindNavigation() {
    this.prevElement && this.prevElement.addEventListener('click', this.turnLeft.bind(this));
    this.nextElement && this.nextElement.addEventListener('click', this.turnRight.bind(this));
  }

  unbindNavigation() {
    this.prevElement && this.prevElement.removeEventListener('click', this.turnLeft.bind(this));
    this.nextElement && this.nextElement.removeEventListener('click', this.turnRight.bind(this));
  }

  setFlipperPageSize() {
    const styles = window.getComputedStyle(this.rootElement);
    const rect = {
      top: parseInt(styles.paddingTop),
      right: parseInt(styles.paddingRight),
      bottom: parseInt(styles.paddingBottom),
      left: parseInt(styles.paddingLeft),
      popupPadding: 30,
    };
    const calculatedWidth = window.innerWidth - rect.popupPadding - (rect.left + rect.right);
    const calculatedHeight = window.innerHeight - rect.popupPadding - (rect.top + rect.bottom);
    const perspective = Math.abs(calculatedWidth / 2 / Math.tan(120 / 2));
    const aspectRatio = 36 / 47;
    let width, height;

    if (calculatedWidth > calculatedHeight * aspectRatio) {
      width = Math.round(calculatedHeight * aspectRatio);
      height = calculatedHeight;
    } else {
      width = calculatedWidth;
      height = Math.round(calculatedWidth / aspectRatio);
    }

    this.isDesktop = window.innerWidth >= 1024;

    setStyleSheetVars(
      {
        flipperPageWidth: width + 'px',
        flipperPageWidthNegative: '-' + width + 'px',
        flipperPageHeight: height + 'px',
        flipperPerspective: perspective + 'px',
      },
      true
    );
  }

  turnRight() {
    if (this.clickCounter % 2 === 0) {
      !this.isDesktop && this.flipRight();
    } else {
      this.rootInnerElement.classList.remove('scroll__start');
    }

    if (this.clickCounter < this.pageElements.length + 1) {
      this.clickCounter++;
    }

    this.isDesktop && this.flipRight();
  }

  turnLeft() {
    if (this.clickCounter % 2 === 0) {
      !this.isDesktop && this.flipLeft();
    } else {
      this.rootInnerElement.classList.add('scroll__start');
      console.log('scroll');
    }

    if (this.clickCounter > 0) {
      this.clickCounter--;
    }

    this.isDesktop && this.flipLeft();
  }

  flipRight() {
    if (this.activeIndex >= 1) {
      this.activeIndex--;

      if (this.activeIndex === this.pageElements.length - 1) {
        this.triggerCover('remove', 'cover__start');
      }

      if (this.activeIndex === 0) {
        this.triggerCover('add', 'cover__end');
      }

      this.rootInnerElement.classList.add('scroll__start');
      this.pageElements[this.activeIndex].classList.add('flip');
      this.zIndex++;
      this.pageElements[this.activeIndex].style.zIndex = this.zIndex;
    }
  }

  flipLeft() {
    if (this.activeIndex < this.pageElements.length) {
      if (this.activeIndex === 0) {
        this.triggerCover('remove', 'cover__end');
      }

      if (this.activeIndex === this.pageElements.length - 1) {
        this.triggerCover('add', 'cover__start');
      }

      this.activeIndex++;

      this.rootInnerElement.classList.remove('scroll__start');
      this.pageElements[this.activeIndex - 1].className = 'flipper__book__page';

      setTimeout(() => {
        this.pageElements[this.activeIndex - 1].style.zIndex = 'auto';
      }, this.timeoutLeft);
    }
  }
}

export default Flipper;
