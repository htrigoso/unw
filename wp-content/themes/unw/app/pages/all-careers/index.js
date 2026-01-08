import { initializeScrollableTabs } from './../../functions/scrollable-tabs'
import { ModalManager } from './../../components/Modal'
import FormCrmCategoryPregrado from '../../components/FormCRM/FormCrmCategoryPregrado'
import FormCrmCategoryDistancia from '../../components/FormCRM/FormCrmCategoryDistancia'
import FormCrmCategoryDistanciaBase from '../../components/FormCRM/FormCrmCategoryDistanciaBase'
import { $element } from '../../utils/dom'

(function () {
  new ModalManager()

  // Inicializar tabs scrollables
  const navTabs = document.querySelectorAll('.nav-tabs')
  if (navTabs.length > 0) {
    navTabs.forEach(initializeScrollableTabs)
  }

  // Configuración de formularios por tipo
  const formConfig = [
    {
      FormClass: FormCrmCategoryPregrado,
      names: ['form-category-pregrado-desktop', 'form-category-pregrado-mobile']
    },
    {
      FormClass: FormCrmCategoryDistancia,
      names: ['form-category-distancia-desktop', 'form-category-distancia-mobile']
    },
    {
      FormClass: FormCrmCategoryDistanciaBase,
      names: ['form-category-distancia-base-desktop', 'form-category-distancia-base-mobile']
    }
  ]

  // Inicializar todos los formularios
  formConfig.forEach(({ FormClass, names }) => {
    names.forEach(name => {
      const form = $element(`[name="${name}"]`)
      if (form) new FormClass({ element: form })
    })
  })
})()
