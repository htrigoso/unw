import Component from '@classes/Component';
import '@components/general/header/index.scss';

export default class Header extends Component {
  constructor() {
    super({
      element: '.header',
    });

    this.render();
  }

  render() {}
}
