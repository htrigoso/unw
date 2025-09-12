export function updateBreadcrumbLabels(tab) {
  const dataName = tab.getAttribute('data-name')
  const breadcrumbLasts = document.querySelectorAll('.breadcrumb__label.current')
  if (!breadcrumbLasts.length) return
  breadcrumbLasts.forEach(label => {
    label.textContent = dataName
  })
}
