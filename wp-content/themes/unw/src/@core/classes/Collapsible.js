export default class Collapsible {
  constructor(opts) {
    this.setOptions(opts);
    this.init();
  }

  setOptions(options) {
    this.options = {
      rootSelector: '[data-collapsible="true"]',
      headSelector: '[data-collapsible="head"]',
      headHtmlType: 'button',
      bodySelector: '[data-collapsible="body"]',
      bodyInnerSelector: '[data-collapsible="body"] > div',
      ...options,
    };
  }

  init() {
    const roots = document.querySelectorAll(this.options.rootSelector);

    if (!roots || roots?.length == 0) return;

    for (const root of roots) {
      const trigger = root.querySelector(this.options.headSelector);

      if (!trigger) return;

      trigger.addEventListener('click', ({ target }) => {
        const element =
          target.tagName === this.options.headHtmlType.toUpperCase()
            ? target
            : target.closest(this.options.headHtmlType);

        if (!element) return;

        const parent = element.closest(this.options.rootSelector);

        this.disactivate(parent);
        this.activate(element);
      });
    }
  }

  activate(element) {
    if (!element) return;

    const isActive = element.classList.contains('active');
    const container = element.closest(this.options.rootSelector);

    if (!container) return;

    const body = container.querySelector(this.options.bodySelector);
    const bodyInner = container.querySelector(this.options.bodyInnerSelector);
    const { clientHeight } = bodyInner;

    if (isActive) {
      body.style.maxHeight = clientHeight + 'px';

      setTimeout(() => {
        body.style.maxHeight = 0;
        element.classList.contains('active') && element.classList.remove('active');
        body.classList.remove('active');
      }, 0);
    } else {
      if (clientHeight && clientHeight > 0) {
        body.style.maxHeight = clientHeight + 'px';

        container.classList.add('active');
        element.classList.add('active');

        setTimeout(() => {
          body.style.maxHeight = 'unset';
        }, 300);
      }
    }
  }

  disactivate(element) {
    const items = document.querySelectorAll(`${this.options.rootSelector}.active`);

    if (!items || items?.length === 0) return;

    for (const item of items) {
      if (!item || item === element) return;

      const head = item.querySelector(this.options.headSelector);
      const body = item.querySelector(this.options.bodySelector);
      const bodyInner = item.querySelector(this.options.bodyInnerSelector);
      const { clientHeight } = bodyInner;

      body.style.maxHeight = clientHeight + 'px';

      setTimeout(() => {
        item.classList.remove('active');
        head.classList.remove('active');
        body.style.maxHeight = 0;
      }, 0);
    }
  }
}
