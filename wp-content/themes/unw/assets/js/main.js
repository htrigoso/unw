document.addEventListener('DOMContentLoaded', function () {
  const navLinks = document.querySelectorAll('.tabs_menu .link_item_tab')
  const sections = document.querySelectorAll('[id]')

  if (navLinks.length === 0) {
    return
  }

  const navbarHeight =
    parseInt(
      getComputedStyle(document.documentElement).getPropertyValue(
        '--navbar-height'
      ),
      10
    ) || 0

  navLinks.forEach((link) => {
    link.addEventListener('click', function (e) {
      const href = this.getAttribute('href')

      if (!href || !href.startsWith('#')) {
        return
      }

      e.preventDefault()

      const targetElement = document.querySelector(href)

      if (targetElement) {
        const elementPosition = targetElement.getBoundingClientRect().top
        const offsetPosition = elementPosition + window.scrollY - navbarHeight

        window.scrollTo({
          top: offsetPosition,
          behavior: 'smooth'
        })

        const newUrl = window.location.pathname + window.location.search + href
        history.pushState(null, null, newUrl)
      }
    })
  })

  if (sections.length > 0) {
    const observerOptions = {
      root: null,
      rootMargin: `-${navbarHeight}px 0px -70% 0px`,
      threshold: 0
    }

    const observer = new IntersectionObserver((entries) => {
      const visibleSections = entries.filter((entry) => entry.isIntersecting)

      if (visibleSections.length === 0) {
        return
      }

      const currentSection = visibleSections.reduce((prev, current) => {
        return prev.target.offsetTop > current.target.offsetTop
          ? prev
          : current
      })

      const targetId = '#' + currentSection.target.id
      const activeLink = document.querySelector(
        `.tabs_menu .link_item_tab[href="${targetId}"]`
      )

      if (activeLink && !activeLink.classList.contains('w--current')) {
        navLinks.forEach((l) => l.classList.remove('w--current'))
        activeLink.classList.add('w--current')
      }
    }, observerOptions)

    sections.forEach((section) => {
      observer.observe(section)
    })

    const scrollToHash = () => {
      const hash = window.location.hash
      if (hash) {
        const targetElement = document.querySelector(hash)
        if (targetElement) {
          const elementPosition = targetElement.getBoundingClientRect().top
          const offsetPosition =
            elementPosition + window.scrollY - navbarHeight

          window.scrollTo({
            top: offsetPosition,
            behavior: 'auto'
          })

          const activeLink = document.querySelector(
            `.tabs_menu .link_item_tab[href="${hash}"]`
          )
          if (activeLink) {
            navLinks.forEach((l) => l.classList.remove('w--current'))
            activeLink.classList.add('w--current')
          }
        }
      }
    }

    window.addEventListener('load', scrollToHash)
  }
})
