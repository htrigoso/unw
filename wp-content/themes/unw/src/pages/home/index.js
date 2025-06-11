import Page from '@classes/Page';

import '@pages/home/index.scss';
class PageHome extends Page {
  constructor() {
    super({
      element: '.page-template-page-home',
    });

    this.render();
  }

  render() {
    this.initSections();
  }

  initSections() {
    console.log('PageHome: initSections');
  }
}

new PageHome();
