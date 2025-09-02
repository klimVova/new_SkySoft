document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('.contacts-form');
  const phoneInput = form.querySelector('input[name="phone"]');

  initPhoneMask();
  form.addEventListener('submit', handleFormSubmit);

  function handleFormSubmit(e) {
    e.preventDefault();
    clearErrors();

    const validations = {
      company: validateCompany(),
      name: validateName(),
      phone: validatePhone(),
      email: validateEmail(),
      captcha: validateCaptcha()
    };

    if (Object.values(validations).every(Boolean)) {
      form.submit();
    }
  }

  function initPhoneMask() {
    let lastValue = '';

    phoneInput.addEventListener('beforeinput', (e) => {
      const insertedText = e.data || '';
      const selectionStart = phoneInput.selectionStart;
      const selectionEnd = phoneInput.selectionEnd;

      const newValue =
        phoneInput.value.slice(0, selectionStart) +
        insertedText +
        phoneInput.value.slice(selectionEnd);

      const digits = newValue.replace(/\D/g, '');
      let countryCode = '';

      if (digits.startsWith('375')) {
        countryCode = '375';
      } else if (digits.startsWith('7') || digits.startsWith('8')) {
        countryCode = digits.startsWith('8') ? '8' : '7';
      }

      const maxDigits = countryCode === '375' ? 12 : 11;
      if (digits.length > maxDigits) {
        e.preventDefault();
      }
    });

    phoneInput.addEventListener('input', () => {
      let value = phoneInput.value;
      let digits = value.replace(/\D/g, '');
      let countryCode = '';

      if (digits.startsWith('375')) {
        countryCode = '375';
        digits = digits.substring(3);
      } else if (digits.startsWith('7')) {
        countryCode = '7';
        digits = digits.substring(1);
      } else if (digits.startsWith('8')) {
        countryCode = '8';
        digits = digits.substring(1);
      }

      const maxDigits = countryCode === '375' ? 9 : 10;
      digits = digits.substring(0, maxDigits);

      let formattedValue = '';
      if (countryCode === '375') {
        formattedValue = `+375 (${digits.substring(0, 2)}`;
        if (digits.length > 2) formattedValue += `) ${digits.substring(2, 5)}`;
        if (digits.length > 5) formattedValue += `-${digits.substring(5, 7)}`;
        if (digits.length > 7) formattedValue += `-${digits.substring(7, 9)}`;
      } else if (countryCode === '7') {
        formattedValue = `+7 (${digits.substring(0, 3)}`;
        if (digits.length > 3) formattedValue += `) ${digits.substring(3, 6)}`;
        if (digits.length > 6) formattedValue += `-${digits.substring(6, 8)}`;
        if (digits.length > 8) formattedValue += `-${digits.substring(8, 10)}`;
      } else if (countryCode === '8') {
        formattedValue = `8(${digits.substring(0, 3)}`;
        if (digits.length > 3) formattedValue += `) ${digits.substring(3, 6)}`;
        if (digits.length > 6) formattedValue += `-${digits.substring(6, 8)}`;
        if (digits.length > 8) formattedValue += `-${digits.substring(8, 10)}`;
      } else if (value.startsWith('+')) {
        formattedValue = `+${digits}`;
      } else {
        formattedValue = digits;
      }

      if (formattedValue !== lastValue) {
        phoneInput.value = formattedValue;
        lastValue = formattedValue;
      }
    });

    phoneInput.addEventListener('keydown', (e) => {
      if (
        [8, 9, 13, 16, 17, 18, 27, 35, 36, 37, 38, 39, 40, 46].includes(e.keyCode) ||
        (e.ctrlKey && [65, 67, 86, 88].includes(e.keyCode))
      ) {
        return;
      }
      if (
        !(
          (e.keyCode >= 48 && e.keyCode <= 57) ||
          (e.keyCode >= 96 && e.keyCode <= 105) ||
          e.key === '+' ||
          e.key === '8'
        )
      ) {
        e.preventDefault();
      }
    });
  }

  function validateCompany() {
    const input = form.querySelector('input[name="companyname"]');
    const value = input.value.trim();
    if (!value) {
      showError(input, 'Это поле обязательно для заполнения');
      return false;
    }
    if (!/^[\p{L}0-9\s]+$/u.test(value)) {
      showError(input, 'Допустимы только буквы и цифры');
      return false;
    }
    return true;
  }

  function validateName() {
    const input = form.querySelector('input[name="name"]');
    const value = input.value.trim();
    if (!value) {
      showError(input, 'Это поле обязательно для заполнения');
      return false;
    }
    const parts = value.split(/\s+/).filter(Boolean);
    if (parts.length !== 3) {
      showError(input, 'Введите ФИО (три слова через пробел)');
      return false;
    }
    if (!parts.every((part) => /^\p{Lu}[\p{L}-]+$/u.test(part))) {
      showError(input, 'Каждое слово должно начинаться с заглавной буквы');
      return false;
    }
    return true;
  }

  function validatePhone() {
    const value = phoneInput.value.trim();
    if (!value) {
      showError(phoneInput, 'Это поле обязательно для заполнения');
      return false;
    }
    const isValid =
      /^(\+375\s\(\d{2}\)\s\d{3}-\d{2}-\d{2})|(\+7\s\(\d{3}\)\s\d{3}-\d{2}-\d{2})|(8\(\d{3}\)\s\d{3}-\d{2}-\d{2})$/.test(value);
    if (!isValid) {
      showError(
        phoneInput,
        'Введите телефон в формате +375 (__) ___-__-__, +7 (___) ___-__-__ или 8(___) ___-__-__'
      );
      return false;
    }
    const digitCount = value.replace(/\D/g, '').length;
    const expectedDigits = value.startsWith('+375') ? 12 : 11;
    if (digitCount !== expectedDigits) {
      showError(phoneInput, `Введите ${expectedDigits} цифр номера`);
      return false;
    }
    return true;
  }

  function validateEmail() {
    const input = form.querySelector('input[name="email"]');
    const value = input.value.trim();
    if (!value) {
      showError(input, 'Это поле обязательно для заполнения');
      return false;
    }
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
      showError(input, 'Введите корректный email (например, example@gmail.com)');
      return false;
    }
    return true;
  }

  function validateCaptcha() {
    const input = form.querySelector('.submit-block__input input[type="text"]');
    const value = input.value.trim();
    if (!value) {
      showError(input, 'Это поле обязательно для заполнения');
      return false;
    }
    if (value.length !== 4) {
      showError(input, 'Код должен содержать 4 символа');
      return false;
    }
    return true;
  }

  function showError(input, message) {
    const existingError = input.parentNode.querySelector('.error-message');
    if (existingError) {
      existingError.remove();
    }
    const error = document.createElement('div');
    error.className = 'error-message';
    error.textContent = message;
    input.parentNode.appendChild(error);
    input.classList.add('error');
  }

  function clearErrors() {
    document.querySelectorAll('.error-message').forEach((el) => el.remove());
    document.querySelectorAll('.error').forEach((el) => el.classList.remove('error'));
  }
});
