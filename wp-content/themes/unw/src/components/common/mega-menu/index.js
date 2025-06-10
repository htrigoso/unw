import Component from '@classes/Component';
import '@components/common/mega-menu/index.scss';

export default class MegaMenu extends Component {
  constructor() {
    super({
      element: '.mega_menu',
      elements: {
        menuGroups: '.mega_menu__inner > div',
      },
    });

    this._state = {
      megaMenuOpened: false,
      megaMenuVisible: false,
    };

    this.render();
  }

  get state() {
    return this._state;
  }

  setState(newState) {
    this._state = { ...this._state, ...newState };
    this.onChanges();
  }

  render() {
    this.triggerOnMouseEvent();
    this.setState({});
  }

  onChanges() {
    if (this.state.megaMenuVisible) {
      this.element && this.element.classList.add('visible');
    } else {
      this.element && this.element.classList.remove('visible');
    }
  }

  triggerOnMouseEvent() {
    const navbar = document.querySelector('.navbar');
    const triggers = document.querySelectorAll('.navbar .navbar__menu a');

    if (!triggers || triggers?.length === 0) return;

    for (const trigger of triggers) {
      trigger.addEventListener('mouseover', ({ target }) => {
        const megaMenuId = target?.getAttribute('data-mega-menu-id') || '';

        if (megaMenuId && megaMenuId?.length > 0) {
          const megaMenuElement = document.querySelector('#' + megaMenuId);

          if (!this.element || !megaMenuElement) return;

          this.setMenuGroupsInvisible();
          this.element.classList.add('visible');
          megaMenuElement.classList.add('visible');
        } else {
          this.element && this.element.classList.remove('visible');
          this.setMenuGroupsInvisible();
        }
      });
    }

    navbar.addEventListener('mouseleave', () => {
      const opened = this.state.megaMenuOpened;
      !opened && this.setState({ megaMenuVisible: false });
    });

    if (!this.element) return;

    this.element.addEventListener('mouseover', () => {
      this.setState({ megaMenuOpened: true });
      this.setState({ megaMenuVisible: true });
    });

    this.element.addEventListener('mouseleave', () => {
      this.setState({ megaMenuOpened: false });
      this.element.classList.remove('visible');
      this.setMenuGroupsInvisible();
    });
  }

  setMenuGroupsInvisible() {
    if (!this.elements.menuGroups || this.elements.menuGroups?.length === 0) return;

    for (const group of this.elements.menuGroups) {
      group.classList.remove('visible');
    }
  }
}
