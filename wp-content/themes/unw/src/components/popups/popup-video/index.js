import Popup from '@classes/Popup';
import '@components/popups/popup-video/index.scss';
import 'plyr/src/sass/plyr.scss';

export default class VideoPopup extends Popup {
  constructor(suffix, onOpen, onClose) {
    super({
      id: suffix,
      attrName: `data-popup-${suffix}-id`,
      openSelector: `[data-popup-${suffix}-id]`,
      onOpen,
      onClose,
    });
  }
}
