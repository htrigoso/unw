import Component from '@classes/Component';
import '@components/common/mobile-menu/index.scss';

export default class MobileMenu extends Component {
  constructor() {
    super({
      element: '.mobile_menu',
      elements: {
        menuTriggers: '[data-nested-menu="true"] a span',
        menuTriggersBack: '[data-nested-menu="true"] button',
      },
    });

    this.render();
  }

  render() {
    this.onMenuItemClick();
    this.onBackArrowClick();
  }

  onMenuItemClick() {
    if (!this.elements.menuTriggers || this.elements.menuTriggers?.length === 0) return;

    this.elements.menuTriggers.forEach((item) => {
      item &&
        item.addEventListener('click', (e) => {
          const target = e.target;
          const tagName = target.tagName.toLowerCase();

          if (tagName !== 'span') return;

          const rootList = target.closest('[data-nested-menu="true"]');

          if (!rootList) return;

          const subList = target.closest('a').nextElementSibling;

          if (!subList) return;

          const { height } = subList.getBoundingClientRect();

          if (!subList.tagName.toLowerCase() === 'ul') return;

          const depth = parseInt(rootList.getAttribute('data-menu-depth') || 0);

          rootList.setAttribute('data-menu-depth', depth + 1);

          subList.style.pointerEvents = 'auto';
          subList.style.opacity = 1;

          rootList.style.height = height + 'px';
          rootList.style.transform = `translate(-${100 * (depth + 1)}%)`;
        });
    });
  }

  onBackArrowClick() {
    if (!this.elements.menuTriggersBack || this.elements.menuTriggersBack?.length === 0) return;

    this.elements.menuTriggersBack.forEach((item) => {
      item &&
        item.addEventListener('click', (e) => {
          const target = e.target;
          const rootList = target.closest('[data-nested-menu="true"]');
          const depth = parseInt(rootList.getAttribute('data-menu-depth') || 0);

          if (!rootList || depth === 0) return;

          const currentList = target.closest('ul');

          rootList.setAttribute('data-menu-depth', depth - 1);

          currentList.removeAttribute('style');

          const parrentList = currentList.closest('ul[style]');

          if (parrentList) {
            const { height } = parrentList.getBoundingClientRect();

            parrentList.style.height = height + 'px';
          }

          rootList.style.height = '';
          rootList.style.transform = `translate(-${100 * (depth - 1)}%)`;
        });
    });
  }
}
