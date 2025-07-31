(function () {
  let currentLang = 'ES' // Puedes leer esto de localStorage o PHP

  const circle = document.getElementById('switchCircle')
  const switchContainer = document.getElementById('languageSwitch')

  switchContainer.addEventListener('click', () => {
    if (currentLang === 'ES') {
      currentLang = 'EN'
      circle.style.transform = 'translateX(-55%)'
      circle.innerText = 'EN'
      // localStorage.setItem('lang', 'en');
      // window.location.href = '?lang=en';
    } else {
      currentLang = 'ES'
      circle.style.transform = 'translateX(55%)'
      circle.innerText = 'ES'
      // localStorage.setItem('lang', 'es');
      // window.location.href = '?lang=es';
    }
  })
})()
