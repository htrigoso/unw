import '@styles/@custom-scss/widgets/_popup.scss';
import LitPopup from 'lit-popup';

export default class Popup {
  constructor(options) {
    this.options = {
      rootSelector: '.popup',
      attrName: '',
      openSelector: '*',
      closeSelector: '.popup .popup__close',
    };

    this.popupOnSetOptions(options);
    this.popupOnInit();
  }

  popupOnSetOptions(options) {
    this.options = { ...this.options, ...options };
  }

  popupOnInit() {
    document.addEventListener('DOMContentLoaded', this.popupOnClearInitialStyles.bind(this));
    window.addEventListener('load', this.popupOnClearInitialStyles.bind(this));

    this.popupOnSetSelectors();
    this.popupOnClearInitialStyles();
    this.onInit();
    this.onClose();
  }

  popupOnSetSelectors() {
    this.popups = document.querySelectorAll(this.options.rootSelector);
    this.openTriggers = document.querySelectorAll(this.options.openSelector);
    this.closeTriggers = document.querySelectorAll(this.options.closeSelector);
  }

  popupOnClearInitialStyles() {
    this.popups = document.querySelectorAll('.popup');

    if (!this.popups || this.popups?.length === 0) return;

    for (const element of this.popups) {
      if (element) {
        element.style.display = '';
      }
    }
  }

  onInit() {
    if (!this.openTriggers) return;

    window.popup = { name: '', instance: undefined };

    for (const trigger of this.openTriggers) {
      trigger.addEventListener('click', (event) => {
        const popupName = trigger.getAttribute(this.options.attrName);

        if (popupName && popupName?.length > 0) {
          event.preventDefault();
        }

        if (popupName && popupName?.length > 0) {
          window.popup.name = popupName;
          window.popup.instance = new LitPopup(popupName, {
            onOpen: () => this.handleOpen(popupName),
            onClose: () => this.handleClose(popupName),
          });
          window.popup.instance.open();
        }
      });
    }
  }

  onClose() {
    this.closeTriggers = document.querySelectorAll(this.options.closeSelector);

    if (!this.closeTriggers) return;

    for (const trigger of this.closeTriggers) {
      trigger.addEventListener('click', function () {
        const popupElement = this.closest('[data-lit-popup]');
        const popupName = popupElement.getAttribute('data-lit-popup');

        if (window.popup?.name === popupName) {
          window.popup.instance.close();

          setTimeout(() => {
            window.popup?.instance?.destroy && window.popup.instance.destroy();
            window.popup = { name: '', instance: undefined };
          }, 0);
        }
      });
    }
  }

  handleOpen(popupName) {
    document.documentElement.style.overflow = 'hidden';
    typeof this.options?.onOpen === 'function' && this.options.onOpen(popupName);
  }

  handleClose(popupName) {
    document.documentElement.style.overflow = '';
    typeof this.options?.onClose === 'function' && this.options.onClose(popupName);
  }
}
