import Popup from '@classes/Popup';
import '@components/common/footer/index.scss';
import '@components/popups/popup-authorities/index.scss';

export default class AuthoritiesPopup extends Popup {
  constructor(suffix = 'authority') {
    super({
      attrName: `data-popup-${suffix}-id`,
      openSelector: `[data-popup-${suffix}-id]`,
    });
  }
}
