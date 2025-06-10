import Popup from '@classes/Popup';
import '@components/common/footer/index.scss';
import '@components/popups/popup-content-partner/index.scss';

export default class ContentPartnerPopup extends Popup {
  constructor() {
    super({
      attrName: 'data-popup-logo-carousel-id',
      openSelector: '[data-popup-logo-carousel-id]',
    });
  }
}
