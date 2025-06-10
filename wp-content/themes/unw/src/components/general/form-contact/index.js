import Component from '@classes/Component';
import FormValidator from '@components/general/form-contact/Form';
import '@components/general/form-contact/index.scss';

export default class FormContact extends Component {
  constructor() {
    super({
      element: '.unw_form.form',
      elements: {
        textareas: 'textarea',
        selects: '.form_control__field__select',
        selectList: '.form_control__field__select__list',
      },
    });

    this.render();
  }

  render() {
    this.initForm();
    this.initSelects();
    this.detectOutsideClick();
    this.initTextAreas();
    this.watchValueChange();
  }

  initForm() {
    this.form = new FormValidator('form-contact-v1');
  }

  initSelects() {
    if (!this.elements.selectList || this.elements.selectList?.length === 0) return;

    if (!this.elements.selects || this.elements.selects?.length === 0) return;

    for (const select of this.elements.selects) {
      select.addEventListener('click', (event) => {
        if (event.target.classList.contains('active')) {
          setTimeout(() => {
            event.target.classList.remove('active');
          }, 500);
        } else {
          event.target.classList.add('active');
        }
      });
    }

    const selectList = this.elements.selectList;

    if (typeof selectList === 'object') {
      for (const list of selectList) {
        const items = list.querySelectorAll('li');

        if (items?.length === 0) return;

        for (const li of items) {
          li.addEventListener('click', (event) => {
            const parent = event.target.closest('.form_control');

            if (!parent) return;

            const inputReal = parent.querySelector('input[type=hidden]');
            const inputPlaceholder = parent.querySelector('input[type=text]');

            if (!inputReal || !inputPlaceholder) return;

            const value = event.target.getAttribute('data-option-value') || '';
            const text = event.target.getAttribute('data-option-text') || '';

            if (value?.length > 0 && text?.length > 0) {
              inputReal.value = value;
              inputPlaceholder.value = text;

              inputReal.value && inputReal.value?.length > 0
                ? inputPlaceholder.classList.add('has_value')
                : inputPlaceholder.classList.remove('has_value');

              this.form && this.form.validateForm();
            }
          });
        }
      }
    }
  }

  initTextAreas() {
    const textareas = this.elements.textareas;

    if (textareas instanceof HTMLElement) {
      textareas.addEventListener('input', () => {
        this.resizeTextArea(textareas);
      });
    } else {
      for (const textarea of textareas) {
        textarea.addEventListener('input', () => {
          this.resizeTextArea(textarea);
        });
      }
    }
  }

  watchValueChange() {
    if (!this.element) return;

    const fields = this.element.querySelectorAll(
      'form input[type=text], form input[type=email], form input[type=number], form textarea'
    );

    if (!fields || fields?.length === 0) return;

    for (const field of fields) {
      field.addEventListener('input', function (event) {
        const input = event.target;

        if (input.tagName === 'INPUT' || input.tagName === 'TEXTAREA') {
          input.value ? input.classList.add('has_value') : input.classList.remove('has_value');
        }
      });
    }
  }

  detectOutsideClick() {
    if (!this.elements.selects || this.elements.selects?.length === 0) return;
    document.addEventListener('click', (event) => {
      if (this.elements.selects instanceof HTMLElement) {
        if (event.target !== this.elements.selects) {
          this.hideSelectsList();
        }
      } else if (typeof this.elements.selects === 'object') {
        if (![...this.elements.selects].includes(event.target)) {
          this.hideSelectsList();
        }
      }
    });
  }

  hideSelectsList() {
    if (!this.elements.selects || this.elements.selects?.length === 0) return;

    for (const select of this.elements.selects) {
      select.classList.contains('active') && select.classList.remove('active');
    }
  }

  resizeTextArea(textarea) {
    if (!this.elements || this.elements?.length === 0) return;

    textarea.style.height = 'auto';
    textarea.style.height = textarea.scrollHeight + 'px';
  }
}
