import Component from '@classes/Component';
import '@components/common/toolbar/index.scss';

export default class Toolbar extends Component {
  constructor() {
    super({
      element: '.toolbar',
      elements: {},
    });

    this.render();
  }

  render() {}
}
