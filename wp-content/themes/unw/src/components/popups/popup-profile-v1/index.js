import Popup from '@classes/Popup';
import '@components/common/footer/index.scss';
import '@components/popups/popup-profile-v1/index.scss';

export default class ProfileV1Popup extends Popup {
  constructor(suffix) {
    super({
      attrName: `data-popup-${suffix}-id`,
      openSelector: `[data-popup-${suffix}-id]`,
    });
  }
}
