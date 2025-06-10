import Popup from '@classes/Popup';
import '@components/common/footer/index.scss';
import '@components/popups/popup-photo-gallery/index.scss';
import Swiper, { EffectFade, Navigation, Thumbs } from 'swiper';
import 'swiper/scss';
import 'swiper/scss/effect-fade';
import 'swiper/scss/navigation';

export default class PhotoGalleryPopup extends Popup {
  constructor() {
    super({});

    this.render();
  }

  render() {
    this.options = {
      ...this.options,
      attrName: 'data-popup-photo-gallery-id',
      openSelector: '[data-popup-photo-gallery-id]',
      onOpen: this.open,
      onClose: this.close,
    };
  }

  open(attrName) {
    this.swiperSm = new Swiper(`[data-lit-popup="${attrName}"] .swiper__sm .swiper`, {
      spaceBetween: 10,
      slidesPerView: 5,
      watchSlidesProgress: true,
      breakpoints: {
        0: {
          slidesPerView: 3,
        },
        840: {
          slidesPerView: 4,
        },
        1024: {
          slidesPerView: 5,
        },
      },
    });

    this.swiperLg = new Swiper(`[data-lit-popup="${attrName}"] .swiper__lg .swiper`, {
      modules: [EffectFade, Navigation, Thumbs],
      navigation: {
        prevEl: '.swiper__controls [rel="prev"]',
        nextEl: '.swiper__controls [rel="next"]',
      },
      effect: 'fade',
      fadeEffect: {
        crossFade: true,
      },
      spaceBetween: 0,
      thumbs: {
        swiper: this.swiperSm,
      },
    });
  }

  close() {
    typeof this.swiperLg !== 'undefined' && this.swiperLg.destroy(true, true);
    typeof this.swiperSm !== 'undefined' && this.swiperSm.destroy(true, true);
  }
}
