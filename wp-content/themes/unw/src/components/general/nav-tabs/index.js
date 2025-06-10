import Component from '@classes/Component';
import '@components/general/nav-tabs/index.scss';

export default class NavTabs extends Component {
  options = {
    bodySelector: 'undefined',
    body: 'undefined',
    useHistoryApi: false,
    onInit: () => {},
    onChangeStart: () => {},
    onChangeEnd: () => {},
  };

  constructor(args) {
    super({
      element: '.nav_tabs',
      elements: {
        tabs: 'a',
      },
    });

    this.reorderOptions(args);
    this.render();
  }

  render() {
    if (typeof this.options.body !== 'undefined') {
      this.removeRenderStyles();
      this.initNav();
    }
  }

  reorderOptions(args) {
    this.options = {
      ...this.options,
      ...args,
    };

    if (args?.bodySelector) {
      this.options.body = document.querySelector(args.bodySelector) || 'undefined';
    }
  }

  removeRenderStyles() {
    if (typeof this.options.body !== 'undefined') {
      for (const tab of this.elements.tabs) {
        const isActive = tab.classList.contains('active');

        if (isActive) {
          const id = tab.getAttribute('data-tabs-nav-id');

          if (id && id?.length > 0) {
            const content = document.querySelector('[data-nav-tabs-content-id="' + id + '"]');

            if (content) {
              content.style.display = 'block';

              this.options.onInit({ id });
            }
          }
        }
      }
    }
  }

  initNav() {
    for (const tab of this.elements.tabs) {
      tab.addEventListener('click', (event) => {
        event.preventDefault();

        const href = event.target.getAttribute('href');
        const activeId = event.target.getAttribute('data-tabs-nav-id');
        const content = document.querySelector('[data-nav-tabs-content-id="' + activeId + '"]');

        if (activeId == '0') {
          window.location = href;
        }

        this.options.onChangeStart({ id: activeId });

        for (const tab of this.elements.tabs) {
          tab.classList.remove('active');
        }

        event.target.classList.add('active');

        if (!this.options.body.children) return;

        for (const content of this.options.body.children) {
          content.classList.remove('active');
          content.removeAttribute('style');

          content.style.display = 'none';
        }

        if (content) {
          content.style.display = 'block';
          this.options.onChangeEnd({ href, id: activeId });
        }

        if (this.options.useHistoryApi) {
          window.history.replaceState({}, '', href);
        }
      });
    }
  }
}
