import Component from '@classes/Component';
import State from '@classes/State';
import '@components/common/navbar/index.scss';

export default class Navbar extends Component {
  constructor() {
    super({
      element: '.navbar',
      elements: {
        menuTrigger: '.navbar__toggle_menu',
      },
    });

    this.state$ = new State();

    this.onStateChange();
    this.render();
  }

  onStateChange() {
    this.state$.subscribe((res) => {
      console.log(res);
    });
  }

  render() {
    this.onTriggerMenu();
  }

  onTriggerMenu() {
    const menu = document.querySelector('.mobile_menu');

    if (!this.elements.menuTrigger || !menu) return;

    this.elements.menuTrigger.addEventListener('click', () => {
      const that = this.elements.menuTrigger;

      if (!that.classList.contains('navbar__toggle_menu__active')) {
        if (this.state$.menuOpened) return;

        document.documentElement.style.overflow = 'hidden';

        that.classList.add('navbar__toggle_menu__active');
        menu.classList.add('mobile_menu__active');

        this.state$.setState({ menuOpened: true });
      } else {
        const rootList = menu.querySelector('[data-nested-menu]');
        const lists = menu.querySelectorAll('ul');

        document.documentElement.style.overflow = '';

        that.classList.remove('navbar__toggle_menu__active');
        menu.classList.remove('mobile_menu__active');

        setTimeout(() => {
          this.state$.setState({ menuOpened: false });

          rootList && rootList.setAttribute('data-menu-depth', 0);

          lists &&
            lists?.length > 0 &&
            lists.forEach((list) => {
              list && list.removeAttribute('style');
            });
        }, 500);
      }
    });
  }
}
