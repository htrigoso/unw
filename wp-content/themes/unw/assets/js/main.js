document.addEventListener('DOMContentLoaded', function () {
  const navLinks = document.querySelectorAll('.tabs_menu .link_item_tab')
  const sections = document.querySelectorAll('[id]')

  const navbarHeight = parseInt(
    getComputedStyle(document.documentElement).getPropertyValue('--navbar-height'),
    10
  )

  navLinks.forEach((link) => {
    link.addEventListener('click', function (e) {
      e.preventDefault()
      const targetId = this.getAttribute('href')
      const targetElement = document.querySelector(targetId)

      if (targetElement) {
        const offsetPosition = targetElement.offsetTop - navbarHeight

        window.scrollTo({
          top: offsetPosition,
          behavior: 'smooth'
        })

        navLinks.forEach((l) => l.classList.remove('w--current'))
        this.classList.add('w--current')
      }
    })
  })

  const observerOptions = {
    root: null,
    rootMargin: `-${navbarHeight}px 0px -40% 0px`,
    threshold: 0
  }

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const targetId = '#' + entry.target.id
        navLinks.forEach((link) => {
          link.classList.remove('w--current')
        })
        const activeLink = document.querySelector(
          `.tabs_menu .link_item_tab[href="${targetId}"]`
        )
        if (activeLink) {
          activeLink.classList.add('w--current')
        }
      }
    })
  }, observerOptions)

  sections.forEach((section) => {
    observer.observe(section)
  })
})
