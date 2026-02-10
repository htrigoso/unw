# Estimación de Desarrollo - Funcionalidad de Filtrado de Carreras por Modalidad en Formulario de Eventos

---

**Para:** Cliente / Product Owner  
**De:** Héctor Trigoso - Desarrollador  
**Fecha:** 6 de Febrero, 2026  
**Asunto:** Estimación de desarrollo para nueva funcionalidad de formulario de eventos

---

## Resumen Ejecutivo

Se solicita implementar un sistema de filtrado dinámico de carreras según modalidad (Presencial/Virtual) en el formulario de eventos, con comportamiento diferenciado para administradores y usuarios finales.

---

## Requisitos Funcionales

### 1. Vista Administrador (Backend - ACF)

- Selector de modalidad con opciones:
  - **Presencial** (por defecto, marcado)
  - **Virtual**
- Selector múltiple de carreras con las siguientes reglas:
  - **Por defecto:** Todas las carreras están marcadas cuando se crea un evento
  - **Filtrado:** Las carreras mostradas deben corresponder a la modalidad seleccionada
  - **Validación:** Al cambiar de modalidad, resetear la selección de carreras

### 2. Vista Usuario (Frontend - Formulario)

Comportamiento según cantidad de carreras seleccionadas por el admin:

#### Escenario A: Una sola carrera seleccionada

- **No mostrar** el selector de carreras al usuario
- Enviar la carrera como **campo oculto** a Zoho CRM

#### Escenario B: Múltiples carreras seleccionadas

- **Mostrar** selector dropdown con las carreras elegidas por el admin
- Usuario puede seleccionar una de la lista
- Las carreras mostradas corresponden a la modalidad del evento

#### Escenario C: Filtrado por modalidad

- Si evento es **Presencial**: Mostrar solo carreras presenciales
- Si evento es **Virtual**: Mostrar solo carreras virtuales

---

## Análisis Técnico

### Archivos a Modificar

#### 1. Backend (ACF Custom Fields)

**Archivo:** `inc/wp-custom-acf.php`

- Crear/modificar campo ACF `event_modality` (Radio Button)
- Crear/modificar campo ACF `event_careers` (Checkbox/Select múltiple)
- Implementar lógica de filtrado dinámico con JavaScript/AJAX

#### 2. Frontend (Formulario)

**Archivo:** `content-parts/pages/event-detail/content-more-info-form-event.php`

- Modificar lógica de renderizado del campo de carreras
- Implementar condicional para mostrar/ocultar selector
- Actualizar campo oculto para carrera única
- Ajustar filtrado de carreras según modalidad del evento

#### 3. Funciones de Soporte

**Archivo:** `inc/functions/careers-functions.php` (crear si no existe)

- Función para obtener carreras por modalidad
- Función para validar coherencia entre modalidad y carreras seleccionadas

#### 4. JavaScript

**Archivo:** `app/pages/event-detail/form-handler.js` (verificar existencia)

- Lógica de filtrado dinámico en admin (si es necesario)
- Validaciones del lado del cliente

---

## Tareas de Desarrollo

### Fase 1: Backend - Configuración ACF (3-4 horas)

- [ ] Crear campo `event_modality` con opciones Presencial/Virtual
- [ ] Configurar campo `event_careers` con carga dinámica por modalidad
- [ ] Implementar JavaScript para filtrado en tiempo real en admin
- [ ] Establecer valores por defecto (Presencial marcado, todas las carreras)
- [ ] Testing de guardado y validación

### Fase 2: Frontend - Lógica Condicional (4-5 horas)

- [ ] Modificar template del formulario para detectar cantidad de carreras
- [ ] Implementar lógica: 1 carrera → campo oculto
- [ ] Implementar lógica: múltiples carreras → selector visible
- [ ] Ajustar filtrado de carreras según modalidad del evento
- [x] Validar datos antes del envío a Zoho
- [x] Actualizar estilos si es necesario

### Fase 3: Integración y Validación (2-3 horas)

- [ ] Verificar integración con Zoho CRM
- [ ] Testing en diferentes escenarios:
  - Evento presencial con 1 carrera
  - Evento presencial con múltiples carreras
  - Evento virtual con 1 carrera
  - Evento virtual con múltiples carreras
- [ ] Verificar comportamiento responsive
- [ ] Revisar accesibilidad (labels, ARIA)

### Fase 4: QA y Ajustes (1-2 horas)

- [ ] Testing cross-browser
- [ ] Testing en dispositivos móviles
- [ ] Validación de campos requeridos
- [ ] Corrección de bugs detectados
- [ ] Documentación de código

---

## Estimación de Tiempo

| Fase                | Horas Estimadas | Horas Mínimas | Horas Máximas |
| ------------------- | --------------- | ------------- | ------------- |
| Fase 1: Backend ACF | 3.5h            | 3h            | 4h            |
| Fase 2: Frontend    | 4.5h            | 4h            | 5h            |
| Fase 3: Integración | 2.5h            | 2h            | 3h            |
| Fase 4: QA          | 1.5h            | 1h            | 2h            |
| **TOTAL**           | **12h**         | **10h**       | **14h**       |

**Estimación final:** **12 horas** (1.5 días de desarrollo)

---

## Riesgos y Consideraciones

### Riesgos Técnicos

1. **Integración Zoho:** Si el campo de carrera cambia de estructura, puede requerir ajustes en la integración
2. **Datos existentes:** Eventos antiguos pueden no tener modalidad definida, requiere migración
3. **Cache:** ACF y carga de carreras puede necesitar invalidación de cache

### Consideraciones Adicionales

1. **Migración de datos:** Eventos existentes deben tener modalidad asignada (+ 1-2h)
2. **Testing exhaustivo:** Si hay muchas carreras, puede requerir más tiempo de QA
3. **Documentación:** Si se requiere manual de usuario para administradores (+ 1h)

---

## Supuestos

- La estructura actual de carreras en ACF está correctamente definida
- Las carreras ya tienen un campo que identifica su modalidad (presencial/virtual)
- El formulario actual ya integra correctamente con Zoho CRM
- El cliente proveerá el listado actualizado de carreras por modalidad
- No se requieren cambios en el diseño visual del formulario

---

## Entregables

1. ✅ Código fuente implementado en archivos PHP/JS correspondientes
2. ✅ Funcionalidad testeada en entorno de desarrollo
3. ✅ Documentación inline en código
4. ✅ Notas de migración para eventos existentes (si aplica)
5. ✅ Instructivo básico para administradores

---

## Siguiente Pasos

1. **Aprobación de estimación:** Confirmar alcance y tiempos
2. **Acceso a ambiente:** Confirmar acceso a ACF y base de datos
3. **Definir prioridad:** Urgencia y fecha de entrega deseada
4. **Kick-off:** Reunión breve para aclarar dudas (15 min)

---

## Contacto

Si tiene alguna pregunta sobre esta estimación o desea discutir detalles adicionales, no dude en contactarme.

**Héctor Trigoso**  
Desarrollador WordPress  
Email: [tu-email@dominio.com]  
Tel: [tu-teléfono]

---

_Esta estimación es válida por 15 días y puede variar según descubrimientos durante el desarrollo._
