import AutoBind from 'auto-bind';
import EventEmitter from 'events';
import each from 'lodash/each';
import Prefix from 'prefix';

export default class extends EventEmitter {
  constructor({ classes, element, elements }) {
    super();
    AutoBind(this);
    this.classes = classes;
    this.selector = element;
    this.selectorChildren = {
      ...elements,
    };
    this.transformPrefix = Prefix('transform');
    this.create();
  }

  create() {
    this.animations = [];

    if (this.selector instanceof window.HTMLElement) {
      this.element = this.selector;
    } else {
      this.element = document.querySelector(this.selector);
    }

    this.elements = {};
    each(this.selectorChildren, (entry, key) => {
      if (
        entry instanceof window.HTMLElement ||
        entry instanceof window.NodeList ||
        Array.isArray(entry)
      ) {
        this.elements[key] = entry;
      } else {
        if (this.element) {
          this.elements[key] = this.element.querySelectorAll(entry);

          if (this.elements[key].length === 0) {
            this.elements[key] = null;
          } else if (this.elements[key].length === 1) {
            this.elements[key] = this.element.querySelector(entry);
          }
        }
      }
    });
  }

  /**
   * Events.
   */
  onResize() {
    if (!this.elements.wrapper) return;

    window.requestAnimationFrame(() => {
      each(this.animations, (animation) => {
        animation.onResize && animation.onResize();
      });
    });
  }
}
