import Flipper from '@classes/Flipper/Flipper';
import Popup from '@classes/Popup';
import '@components/popups/popup-flipbook/index.scss';

export default class FlipBookPopup extends Popup {
  constructor(suffix, onOpen, onClose) {
    super({
      attrName: `data-popup-${suffix}-id`,
      openSelector: `[data-popup-${suffix}-id]`,
      onOpen,
      onClose,
    });

    this.id = suffix;

    this.render();
  }

  render() {
    this.flipper = new Flipper(this.id);
  }
}
