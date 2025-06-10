import Component from '@classes/Component';
import '@components/general/side-nav/index.scss';

export default class SideNav extends Component {
  constructor() {
    super({
      element: '.side_nav',
      elements: {
        dropdownLabel: '.side_nav__dropdown__label',
        dropdownList: '.side_nav__dropdown__list',
      },
    });

    this.render();
  }

  render() {
    this.initDropdown();
  }

  initDropdown() {
    const label = this.elements.dropdownLabel;
    const list = this.elements.dropdownList;

    if (!list) return;

    list.removeAttribute('style');

    label.addEventListener('click', () => {
      label.classList.contains('active')
        ? label.classList.remove('active')
        : label.classList.add('active');

      list.classList.contains('active')
        ? list.classList.remove('active')
        : list.classList.add('active');
    });
  }
}
