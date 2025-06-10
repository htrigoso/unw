import errorMessages from '@libs/validations/form-contact.json';
import axios from 'axios';
import * as yup from 'yup';
const themeSettings = JSON.parse(document.getElementById('themeSettings').innerHTML);

export default class FormValidator {
  constructor(formId) {
    this.form = document.getElementById(formId);
    this.errorFields = {
      fullname: document.getElementById('fullname-error'),
      document_number: document.getElementById('document_number-error'),
      document_type: document.getElementById('document_type-error'),
      email: document.getElementById('email-error'),
      message: document.getElementById('message-error'),
      terms: document.getElementById('terms-error'),
      policy: document.getElementById('policy-error'),
    };

    if (this.form) {
      /*this.form.addEventListener('change', this.validateForm.bind(this));
      this.form.addEventListener('focusout', this.validateForm.bind(this));*/
      this.form.addEventListener('submit', this.validateForm.bind(this));
    }
  }

  get getFormData() {
    const formData = new FormData(this.form);
    let data = {};

    for (const [key, value] of formData.entries()) {
      data[key] = value;
    }

    return data;
  }

  get setFormData() {
    const formData = new FormData(this.form);
    let data = {};

    for (const [key, value] of formData.entries()) {
      data[key] = value;
    }

    return formData;
  }

  validateForm(event) {
    // Validate the form using Yup
    const requiredMessage = 'El campo es requerido.';

    event?.type && event?.type === 'submit' && event.preventDefault();

    yup
      .object()
      .shape({
        fullname: yup.string().required(requiredMessage),
        document_number: yup
          .string()
          .when('document_type', {
            is: 'DNI',
            then: yup.string().matches(/^\d{8}$/, errorMessages.document_number_DNI),
            otherwise: yup.string().matches(/^[a-zA-Z0-9]+$/, errorMessages.document_number),
          })
          .required(),
        document_type: yup
          .string()
          .oneOf(['DNI', 'ID'], errorMessages.document_type)
          .required(requiredMessage),
        email: yup.string().email().required(requiredMessage),
        message: yup.string().required(requiredMessage),
        terms: yup.bool().oneOf([true], errorMessages.terms).required(requiredMessage),
        policy: yup.bool().oneOf([true], errorMessages.policy).required(requiredMessage),
      })
      .validate(this.getFormData, { abortEarly: false })
      .then(() => {
        var objFormData = this.setFormData;
        axios.post(themeSettings.ajaxUrl, objFormData).then((response) => {
          // If API response is successful, update the validation messages
          if (response.status === 'error') {
            response.messages = {};
            response.messages.fullname = errorMessages.fullname;
            response.messages.document_number = errorMessages.document_number;
            response.messages.document_type = errorMessages.document_type;
            response.messages.email = errorMessages.email;
            response.messages.message = errorMessages.message;
          }

          // Update the error messages
          this.errorFields.fullname.innerText = response.messages.fullname;
          this.errorFields.document_number.innerText = response.messages.document_number;
          this.errorFields.document_type.innerText = response.messages.document_type;

          if (response.status === 200 && response.redirect) {
            window.location = response.redirect;
          }
        });
      })
      .catch((error) => {
        // Clear previous error messages
        for (const prop in errorMessages) {
          if (this.errorFields[prop]) {
            this.errorFields[prop].innerText = '';
          }
        }

        // If there are validation errors, update the error messages
        error.inner.forEach((err) => {
          if (this.errorFields[err.path]) {
            this.errorFields[err.path].innerText = err.message;
          }
        });
      });
  }
}
