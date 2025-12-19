# Documentación de Implementación Incubeta

## 📋 Tabla de Contenidos

1. [Introducción](#introducción)
2. [Estructura del Proyecto](#estructura-del-proyecto)
3. [Archivos Implementados](#archivos-implementados)
4. [Eventos Implementados](#eventos-implementados)
5. [Control de Activación](#control-de-activación)
6. [Patrones de Implementación](#patrones-de-implementación)

---

## Introducción

Sistema de tracking de eventos para Google Tag Manager (GTM) siguiendo las especificaciones de **Incubeta**. Todos los eventos se envían al `dataLayer` de Google Tag Manager para su posterior procesamiento y envío a Google Analytics 4 (GA4).

### Control Global

El sistema se controla mediante la variable de entorno:

```
ENABLE_INCUBETA=true/false
```

Todos los eventos se envuelven con la función `withIncubeta()` que verifica esta variable antes de ejecutar el tracking.

---

## Estructura del Proyecto

```
app/utils/incubeta/
├── index.js                    # Funciones utilitarias compartidas
├── beginEventRegistration.js   # Tracking de registro en eventos
├── carrouselClick.js          # Clicks en sliders/carruseles
├── carrouselSwipe.js          # Swipe en carruseles
├── carrouselView.js           # Vista de carruseles
├── contactClick.js            # Clicks en opciones de contacto
├── errorMessage.js            # Errores de validación en formularios
├── faqClick.js                # Clicks en preguntas frecuentes
├── footerClick.js             # Clicks en el footer
├── menuClick.js               # Clicks en el menú de navegación
├── selectContent.js           # Clicks en Blog/Eventos/Noticias
├── selectEvent.js             # Clicks en eventos del home
├── selectItem.js              # Clicks en "Ver carrera"
├── selectProgramType.js       # Clicks en tipos de programa (home)
├── shareClick.js              # Compartir contenido
├── viewContent.js             # Vista de detalle de contenido
├── viewEventList.js           # Vista de lista de eventos (home)
├── viewItemList.js            # Vista de lista de carreras
└── viewProgramType.js         # Vista de sección de programas (home)
```

---

## Archivos Implementados

### 1. **index.js** - Funciones Utilitarias

**Propósito:** Funciones compartidas para el procesamiento de datos de formularios.

#### Funciones Principales:

##### `getFormData(form)`

Obtiene los datos del formulario de manera estandarizada.

```javascript
const formData = getFormData(form);
// Retorna: {
//   checked, careerSelect, selectedOption, campusSelect,
//   campusOption, departamentSelect, departamentOption,
//   modalidad, carrera, campus, departamento
// }
```

##### `normalizeModalidad(modalidad)`

Normaliza el valor de modalidad (`work` → `virtual`).

---

### 2. **beginEventRegistration.js**

**Evento:** `begin_event_registration`

**Cuándo se dispara:** Usuario hace click en "Regístrate aquí" dentro del detalle de un evento.

**Parámetros:**

- `content_type`: "Event"
- `content_id`: ID del evento
- `content_title`: Título del evento

**Implementación:**

```javascript
import { trackBeginEventRegistration } from "./utils/incubeta/beginEventRegistration";

// En el click del botón
trackBeginEventRegistration({
  content_id: "123",
  content_title: "Nombre del Evento",
});
```

**Características:**

- ✅ Espera a que GTM esté cargado (hasta 3 segundos)
- ✅ Envía el evento aunque GTM no esté disponible
- ✅ Logs detallados en consola

---

### 3. **carrouselClick.js**

**Evento:** `carrousel_click`

**Cuándo se dispara:** Usuario hace click en un elemento dentro de un carrusel/slider.

**Parámetros:**

- `link_url`: URL del destino
- `link_text`: Texto del enlace
- `slide_name`: Nombre del slide
- `slide_position`: Posición del slide (1-based)
- `carrousel_id`: ID único del carrusel

**Implementación:**

```javascript
import { initCarrouselClickTracking } from "./utils/incubeta/carrouselClick";

// Inicializar tracking
initCarrouselClickTracking();
```

**Características:**

- ✅ Event delegation para capturar clicks
- ✅ Detecta automáticamente los datos del slide
- ✅ Funciona con Swiper.js
- ✅ Compatible con múltiples carruseles en la misma página

**Atributos HTML Requeridos:**

```html
<div class="swiper" data-carrousel-id="hero-home">
  <div class="swiper-slide" data-slide-name="Slide 1">
    <a href="/destino" class="btn-carrousel-item-click">Ver más</a>
  </div>
</div>
```

---

### 4. **carrouselSwipe.js**

**Evento:** `carrousel_swipe`

**Cuándo se dispara:** Usuario cambia de slide (flechas, dots, swipe).

**Parámetros:**

- `direction`: "next" o "prev"
- `slide_name`: Nombre del slide actual
- `slide_position`: Posición del slide (1-based)
- `carrousel_id`: ID único del carrusel

**Implementación:**

```javascript
import { trackCarrouselSwipe } from "./utils/incubeta/carrouselSwipe";

// En el evento slideChange de Swiper
swiper.on("slideChange", () => {
  trackCarrouselSwipe(swiper, "next");
});
```

**Características:**

- ✅ Detecta dirección automáticamente
- ✅ Compatible con navegación por flechas, dots y gestos
- ✅ Throttling para evitar duplicados

---

### 5. **carrouselView.js**

**Evento:** `carrousel_view`

**Cuándo se dispara:** Carrusel es visible en pantalla (20% del elemento).

**Parámetros:**

- `carrousel_id`: ID único del carrusel

**Implementación:**

```javascript
import { initCarrouselViewTracking } from "./utils/incubeta/carrouselView";

// Inicializar tracking
initCarrouselViewTracking();
```

**Características:**

- ✅ Usa IntersectionObserver
- ✅ Se dispara una sola vez por carrusel
- ✅ Threshold configurable (20% por defecto)
- ✅ Espera hasta 5 segundos a que GTM esté disponible

**Atributos HTML Requeridos:**

```html
<div class="swiper" data-carrousel-id="testimonios-home">
  <!-- slides -->
</div>
```

---

### 6. **contactClick.js**

**Evento:** `contact`

**Cuándo se dispara:** Usuario hace click en opciones de contacto (WhatsApp, teléfono, email).

**Parámetros:**

- `contact_platform`: "whatsapp" | "phone" | "email"
- `contact_type`: "floating" | "footer" | "navbar"

**Implementación:**

```javascript
import { initContactClickTracking } from "./utils/incubeta/contactClick";

// Inicializar tracking
initContactClickTracking();
```

**Atributos HTML Requeridos:**

```html
<a href="tel:+51123456" class="btn-contact-click" data-contact-platform="phone" data-contact-type="footer"> Llamar </a>
```

---

### 7. **errorMessage.js**

**Evento:** `error_message`

**Cuándo se dispara:** Se muestra un mensaje de error de validación en un formulario.

**Parámetros:**

- `error_message_text`: Texto del mensaje de error
- `error_message_location`: ID del formulario donde ocurrió

**Implementación:**

```javascript
import { trackErrorMessage } from "./utils/incubeta/errorMessage";

// Cuando se muestra un error
trackErrorMessage("El campo email es requerido", "form-contacto");
```

**Características:**

- ✅ Timeout más corto (2 segundos) para errores
- ✅ Útil para identificar problemas de UX
- ✅ Se integra con sistemas de validación existentes

---

### 8. **faqClick.js**

**Evento:** `faq`

**Cuándo se dispara:** Usuario hace click en una pregunta frecuente (accordion).

**Parámetros:**

- `question`: Texto de la pregunta
- `position`: Posición de la pregunta (1-based)
- `content_title`: Título de la página/sección

**Implementación:**

```javascript
import { initFaqClickTracking } from "./utils/incubeta/faqClick";

// Inicializar tracking
initFaqClickTracking();
```

**Atributos HTML Requeridos:**

```html
<button class="faq-item" data-faq-question="¿Cómo me inscribo?" data-faq-position="1" data-content-title="Admisión">¿Cómo me inscribo?</button>
```

---

### 9. **footerClick.js**

**Evento:** `footer`

**Cuándo se dispara:** Usuario hace click en un enlace del footer.

**Parámetros:**

- `footer_option`: Texto del enlace clickeado

**Implementación:**

```javascript
import { initFooterClickTracking } from "./utils/incubeta/footerClick";

// Inicializar tracking
initFooterClickTracking();
```

**Características:**

- ✅ Detecta automáticamente los enlaces del footer
- ✅ Captura el texto del enlace
- ✅ Funciona con footers multi-columna

**HTML Requerido:**

```html
<footer>
  <a href="/nosotros">Sobre Nosotros</a>
  <a href="/contacto">Contacto</a>
</footer>
```

---

### 10. **selectContent.js**

**Evento:** `select_content`

**Cuándo se dispara:** Usuario hace click en una card de Blog, Evento o Noticia.

**Parámetros:**

- `click_element`: Tag/categoría del contenido
- `content_type`: "Blog" | "Evento" | "Noticia"
- `content_id`: ID del post
- `content_title`: Título del contenido

**Implementación:**

```javascript
import { initSelectContentTracking } from "./utils/incubeta/selectContent";

// Inicializar tracking
initSelectContentTracking();
```

**Atributos HTML Requeridos:**

```html
<article class="entry-card" data-content-type="Blog" data-content-id="456" data-content-title="Título del Post" data-category-tag="Tecnología">
  <a href="/post/456" class="btn-select-content-item-click">Leer más</a>
</article>
```

---

### 11. **selectEvent.js**

**Evento:** `select_event`

**Cuándo se dispara:** Usuario hace click en un evento **desde el home**.

**Parámetros:**

- `content_type`: "Event"
- `content_id`: ID del evento
- `content_title`: Título del evento

**Implementación:**

```javascript
import { initSelectEventTracking } from "./utils/incubeta/selectEvent";

// Inicializar tracking
initSelectEventTracking();
```

**Atributos HTML Requeridos:**

```html
<article class="event-card" data-content-type="Evento" data-content-id="789" data-content-title="Webinar de Marketing">
  <a href="/evento/789" class="btn-select-content-item-click" data-is-home="1">Ver evento</a>
</article>
```

**Diferencia con `select_content`:**

- `select_event`: Solo en el **home**
- `select_content`: En archivos/listados

---

### 12. **selectItem.js**

**Evento:** `select_item`

**Cuándo se dispara:** Usuario hace click en "Ver carrera".

**Parámetros (ecommerce):**

- `item_id`: Código CRM de la carrera
- `item_name`: Nombre de la carrera
- `item_brand`: Marca del programa
- `item_list_id`: ID de la lista
- `item_list_name`: Nombre de la lista
- `index`: Posición en la lista (0-based)

**Implementación:**

```javascript
import { initSelectItemTracking } from "./utils/incubeta/selectItem";

// Inicializar tracking
initSelectItemTracking();
```

**Atributos HTML Requeridos:**

```html
<div class="program-card">
  <h3 class="program-card--content__title">Ingeniería de Sistemas</h3>
  <button class="btn-careers-select-item" data-crm-code="CRM123">Ver carrera</button>
</div>
```

**Datos Globales Requeridos:**

```javascript
window.unwCareersData = {
  listName: "Carreras de Ingeniería",
  itemBrand: "UNW",
};
```

---

### 13. **selectProgramType.js**

**Evento:** `select_program_type`

**Cuándo se dispara:** Usuario hace click en un tipo de programa **en el home**.

**Parámetros:**

- `content_type`: Tipo de programa
- `content_id`: ID del programa

**Implementación:**

```javascript
import { initSelectProgramTypeTracking } from "./utils/incubeta/selectProgramType";

// Inicializar tracking
initSelectProgramTypeTracking();
```

**Atributos HTML Requeridos:**

```html
<button class="btn-careers-select-item" data-is-home="1" data-content-type="Pregrado" data-content-id="pregrado-sistemas">Ver Pregrado</button>
```

---

### 14. **shareClick.js**

**Evento:** `ev_share`

**Cuándo se dispara:** Usuario hace click en compartir contenido en redes sociales.

**Parámetros:**

- `method`: "facebook" | "twitter" | "linkedin" | "whatsapp" | "email"
- `contact_type`: Tipo de contenido compartido
- `contact_title`: Título del contenido

**Implementación:**

```javascript
import { initShareClickTracking } from "./utils/incubeta/shareClick";

// Inicializar tracking
initShareClickTracking();
```

**Atributos HTML Requeridos:**

```html
<a href="..." class="btn-link-social" data-share-method="facebook" data-share-type="Blog" data-share-title="Título del Post">
  <i class="fab fa-facebook"></i>
</a>
```

---

### 15. **viewContent.js**

**Evento:** `view_content`

**Cuándo se dispara:** Usuario entra a la página de detalle de un contenido (Blog, Evento, Noticia).

**Parámetros:**

- `content_type`: "Blog" | "Evento" | "Noticia"
- `content_id`: ID del contenido
- `content_title`: Título del contenido

**Implementación:**

```javascript
import { initViewContentTracking } from "./utils/incubeta/viewContent";

// Inicializar en la página de detalle
initViewContentTracking();
```

**Datos Globales Requeridos:**

```javascript
window.unwContentData = {
  content_type: "Blog",
  content_id: "123",
  content_title: "Título del Post",
};
```

**Características:**

- ✅ Se ejecuta automáticamente al cargar la página
- ✅ Espera hasta 5 segundos a que GTM esté disponible
- ✅ Valida que existan los datos necesarios

---

### 16. **viewEventList.js**

**Evento:** `view_event_list`

**Cuándo se dispara:** La sección de eventos destacados es visible en el home.

**Parámetros:**

- `content_type`: "Event"

**Implementación:**

```javascript
import { initViewEventListTracking } from "./utils/incubeta/viewEventList";

// Inicializar en el home
initViewEventListTracking();
```

**HTML Requerido:**

```html
<section class="featured-events">
  <!-- Cards de eventos -->
</section>
```

**Características:**

- ✅ Solo se ejecuta en el home
- ✅ Usa IntersectionObserver (threshold 20%)
- ✅ Se dispara una sola vez

---

### 17. **viewItemList.js**

**Evento:** `view_item_list`

**Cuándo se dispara:** Usuario visualiza una lista de carreras.

**Parámetros (ecommerce):**

- `item_list_id`: ID de la lista
- `item_list_name`: Nombre de la lista
- `items[]`: Array de carreras con estructura GA4

**Implementación:**

```javascript
import { initViewItemListTracking } from "./utils/incubeta/viewItemList";

// Inicializar en páginas de listado
initViewItemListTracking();
```

**Datos Globales Requeridos:**

```javascript
window.unwCareersData = {
  careers: [
    { ID: "1", post_title: "Ingeniería de Sistemas" },
    { ID: "2", post_title: "Administración" },
  ],
  listName: "Todas las Carreras",
  itemBrand: "UNW",
};
```

**Características:**

- ✅ Espera hasta 5 segundos a que GTM esté disponible
- ✅ Limpia el objeto ecommerce previo
- ✅ Genera estructura compatible con GA4

---

### 18. **menuClick.js**

**Evento:** `ev_menu`

**Cuándo se dispara:** Usuario hace click en un elemento del menú de navegación.

**Parámetros:**

- `primary_menu`: Primer nivel del menú (ej: "Carreras y programas")
- `section`: Tipo de sección - "presencial", "en línea" o "posgrado"
- `secondary_menu`: Segundo nivel del menú (ej: "Ingeniería de Sistemas e Informática")

**Implementación:**

```javascript
import { initMenuClickTracking } from "./utils/incubeta/menuClick";

// Inicializar tracking
initMenuClickTracking();
```

**Atributos HTML Requeridos:**

```html
<a href="/carrera/sistemas" class="btn-menu-item-click" data-primary-menu="Carreras y programas" data-section="presencial" data-secondary-menu="Ingeniería de Sistemas e Informática"> Ingeniería de Sistemas </a>
```

**Ejemplo de Evento Enviado:**

```javascript
{
  event: "ev_menu",
  primary_menu: "Carreras y programas",
  section: "presencial",
  secondary_menu: "Ingeniería de Sistemas e Informática"
}
```

**Características:**

- ✅ Event delegation para capturar clicks en todo el menú
- ✅ Valida que existan todos los parámetros antes de enviar
- ✅ Logs detallados en consola
- ✅ Espera hasta 3 segundos a que GTM esté disponible

---

### 19. **viewProgramType.js**

**Evento:** `view_program_type`

**Cuándo se dispara:** La sección de programas es visible en el home.

**Parámetros:**

- Ninguno (solo el evento)

**Implementación:**

```javascript
import { initViewProgramTypeTracking } from "./utils/incubeta/viewProgramType";

// Inicializar en el home
initViewProgramTypeTracking();
```

**HTML Requerido:**

```html
<div id="home-page">
  <section class="programs">
    <!-- Tipos de programas -->
  </section>
</div>
```

**Características:**

- ✅ Solo se ejecuta en el home
- ✅ Usa IntersectionObserver (threshold 20%)
- ✅ Se dispara una sola vez
- ✅ Espera a que GTM esté disponible

---

## Eventos Implementados

### Resumen de Eventos

| Evento                     | Tipo        | Trigger                 | Página              |
| -------------------------- | ----------- | ----------------------- | ------------------- |
| `begin_event_registration` | Click       | Botón "Regístrate aquí" | Detalle de evento   |
| `carrousel_click`          | Click       | Click en slide          | Todas               |
| `carrousel_swipe`          | Interacción | Cambio de slide         | Todas               |
| `carrousel_view`           | Vista       | Carrusel visible        | Todas               |
| `contact`                  | Click       | Opciones de contacto    | Todas               |
| `ev_menu`                  | Click       | Click en menú           | Todas               |
| `error_message`            | Validación  | Error en formulario     | Formularios         |
| `faq`                      | Click       | Pregunta frecuente      | Páginas con FAQ     |
| `footer`                   | Click       | Enlaces del footer      | Todas               |
| `select_content`           | Click       | Blog/Evento/Noticia     | Archivos/Listados   |
| `select_event`             | Click       | Evento en home          | Home                |
| `select_item`              | Click       | "Ver carrera"           | Listado de carreras |
| `select_program_type`      | Click       | Tipo de programa        | Home                |
| `ev_share`                 | Click       | Compartir en redes      | Todas               |
| `view_content`             | Vista       | Detalle de contenido    | Detalle             |
| `view_event_list`          | Vista       | Eventos destacados      | Home                |
| `view_item_list`           | Vista       | Lista de carreras       | Listado de carreras |
| `view_program_type`        | Vista       | Sección programas       | Home                |

---

## Control de Activación

### Variable de Entorno

Todos los eventos se controlan con:

```env
ENABLE_INCUBETA=true
```

Esta variable se pasa desde PHP a JavaScript mediante:

```php
// En functions.php o similar
wp_localize_script('main-script', 'unwGlobals', [
  'INCUBETA_ENABLED' => getenv('ENABLE_INCUBETA') === 'true' ? 'true' : 'false'
]);
```

```javascript
// En JavaScript
window.INCUBETA_ENABLED = unwGlobals.INCUBETA_ENABLED;
```

### Función `withIncubeta()` - Core del Sistema

**Ubicación:** `app/utils/incubeta-utils.js`

#### Propósito

`withIncubeta()` es un **Higher-Order Function (HOF)** que envuelve todas las funciones de tracking. Su propósito es:

1. ✅ Controlar la activación/desactivación global del tracking
2. ✅ Evitar código duplicado de validación en cada función
3. ✅ Permitir testing sin afectar producción
4. ✅ Facilitar el debugging

#### Implementación

```javascript
/**
 * Wrapper para funciones de Incubeta
 * Solo ejecuta si window.INCUBETA_ENABLED === 'true'
 * @param {Function} fn - Función a envolver
 * @returns {Function} - Función envuelta con validación
 */
export function withIncubeta(fn) {
  return function (...args) {
    if (window.INCUBETA_ENABLED !== "true") {
      return;
    }
    return fn.apply(this, args);
  };
}
```

#### Cómo Funciona

1. **Recibe una función** como parámetro
2. **Retorna una nueva función** que:
   - Verifica `window.INCUBETA_ENABLED === 'true'`
   - Si es `false` o no existe, **no hace nada** (early return)
   - Si es `true`, **ejecuta la función original** con todos sus argumentos

#### Ejemplos de Uso

##### Ejemplo 1: Función de Envío de Evento

```javascript
import { withIncubeta } from "../incubeta-utils";

// Función original envuelta con withIncubeta
const sendCarrouselClickEvent = withIncubeta(function (data) {
  window.dataLayer = window.dataLayer || [];
  window.dataLayer.push({
    event: "carrousel_click",
    link_url: data.link_url,
  });
});

// Uso:
sendCarrouselClickEvent({ link_url: "/destino" });
// ✅ Si INCUBETA_ENABLED=true → Envía el evento
// ❌ Si INCUBETA_ENABLED=false → No hace nada
```

##### Ejemplo 2: Función de Inicialización

```javascript
export const initCarrouselClickTracking = withIncubeta(function () {
  document.addEventListener("click", (e) => {
    const target = e.target.closest(".btn-carrousel-item-click");
    if (target) {
      sendCarrouselClickEvent({ link_url: target.href });
    }
  });
  console.log("[Incubeta] Tracking inicializado");
});

// Uso:
initCarrouselClickTracking();
// ✅ Si INCUBETA_ENABLED=true → Agrega los listeners
// ❌ Si INCUBETA_ENABLED=false → No hace nada
```

##### Ejemplo 3: Función con Múltiples Parámetros

```javascript
export const trackErrorMessage = withIncubeta(function (errorText, formId) {
  window.dataLayer.push({
    event: "error_message",
    error_message_text: errorText,
    error_message_location: formId,
  });
});

// Uso:
trackErrorMessage("Email requerido", "form-contacto");
// Los argumentos se pasan correctamente a través del wrapper
```

#### Ventajas del Patrón

1. **Single Responsibility:** Cada función solo se preocupa de su lógica
2. **DRY (Don't Repeat Yourself):** No repetir validación en cada función
3. **Testeable:** Fácil de activar/desactivar en diferentes entornos
4. **Mantenible:** Un solo lugar para cambiar la lógica de control
5. **Performance:** Si está desactivado, no ejecuta nada (zero overhead)

#### Sin `withIncubeta` (❌ Mal)

```javascript
// Código repetitivo en cada función
function sendEvent(data) {
  if (window.INCUBETA_ENABLED !== 'true') return
  window.dataLayer.push(data)
}

function initTracking() {
  if (window.INCUBETA_ENABLED !== 'true') return
  document.addEventListener(...)
}

// Duplicación de lógica en cada archivo ❌
```

#### Con `withIncubeta` (✅ Bien)

```javascript
// Código limpio y mantenible
const sendEvent = withIncubeta(function(data) {
  window.dataLayer.push(data)
})

const initTracking = withIncubeta(function() {
  document.addEventListener(...)
})

// Lógica de control centralizada ✅
```

#### Flow de Ejecución

```
Usuario hace acción
       ↓
initCarrouselClickTracking() llamada
       ↓
withIncubeta verifica INCUBETA_ENABLED
       ↓
   ¿Es 'true'?
   /          \
  SÍ          NO
  ↓           ↓
Ejecuta      Return
función      (nada)
  ↓
Event listener agregado
  ↓
Usuario hace click
  ↓
sendCarrouselClickEvent() llamada
  ↓
withIncubeta verifica INCUBETA_ENABLED
  ↓
Envía a dataLayer
```

#### Debugging

Para verificar el estado:

```javascript
// En consola del navegador
console.log(window.INCUBETA_ENABLED);
// "true" → Tracking activo
// "false" o undefined → Tracking desactivado
```

#### Testing

```javascript
// Activar tracking para tests
window.INCUBETA_ENABLED = "true";

// Desactivar tracking
window.INCUBETA_ENABLED = "false";

// Probar función
initCarrouselClickTracking();
// Solo se ejecutará si INCUBETA_ENABLED === 'true'
```

### Verificación en Consola

Cuando `ENABLE_INCUBETA=true`, verás logs como:

```
[Incubeta] ✅ carrousel_click enviado: {...}
[Incubeta] 👆 Tracking de select_item iniciado
[Incubeta] 👁️ Observando section.programs para view_program_type
```

Si no ves estos logs, verifica:

1. `window.INCUBETA_ENABLED === 'true'`
2. La variable de entorno `ENABLE_INCUBETA=true`
3. El script de localización en PHP

---

## Patrones de Implementación

### 1. Estructura Común

Todos los archivos siguen esta estructura:

```javascript
/**
 * Descripción del Evento
 * Explica cuándo se dispara
 */

import { withIncubeta } from "../incubeta-utils";

/**
 * Envía el evento al dataLayer
 * @param {Object} data - Datos del evento
 */
const sendEventoEvent = withIncubeta(function (data) {
  window.dataLayer = window.dataLayer || [];

  const dataLayerEvent = {
    event: "nombre_evento",
    param1: data.param1,
    param2: data.param2,
  };

  const sendEvent = () => {
    window.dataLayer.push(dataLayerEvent);
    console.log("[Incubeta] ✅ nombre_evento enviado:", dataLayerEvent);
  };

  // Esperar a GTM si es necesario
  if (window.google_tag_manager) {
    sendEvent();
    return;
  }

  // Polling para esperar GTM
  let attempts = 0;
  const maxAttempts = 30;

  const checkGTM = setInterval(() => {
    attempts++;
    if (window.google_tag_manager) {
      clearInterval(checkGTM);
      sendEvent();
    } else if (attempts >= maxAttempts) {
      clearInterval(checkGTM);
      console.warn("[Incubeta] GTM no disponible, enviando de todos modos");
      sendEvent();
    }
  }, 100);
});

/**
 * Inicializa el tracking
 */
export const initEventoTracking = withIncubeta(function () {
  // Event delegation o IntersectionObserver
  document.addEventListener("click", (e) => {
    // Lógica de detección
  });

  console.log("[Incubeta] Tracking de evento inicializado");
});
```

### 2. Event Delegation

Para eventos de click, se usa event delegation:

```javascript
document.addEventListener("click", (event) => {
  const target = event.target.closest(".selector");
  if (!target) return;

  // Procesar el click
});
```

### 3. IntersectionObserver

Para eventos de vista:

```javascript
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting && !eventSent) {
        sendEvent();
        eventSent = true;
        observer.disconnect();
      }
    });
  },
  { threshold: 0.2 }
);

observer.observe(element);
```

### 4. Espera de GTM

Patrón para esperar a que GTM esté cargado:

```javascript
if (window.google_tag_manager) {
  sendEvent();
  return;
}

let attempts = 0;
const maxAttempts = 30; // 3 segundos

const checkGTM = setInterval(() => {
  attempts++;
  if (window.google_tag_manager) {
    clearInterval(checkGTM);
    sendEvent();
  } else if (attempts >= maxAttempts) {
    clearInterval(checkGTM);
    sendEvent(); // Enviar de todos modos
  }
}, 100);
```

---

## Notas Técnicas

### Timeouts de Espera GTM

| Evento  | Timeout | Razón                       |
| ------- | ------- | --------------------------- |
| Clicks  | 3s      | Respuesta rápida            |
| Vistas  | 5s      | Más tiempo para inicializar |
| Errores | 2s      | Captura inmediata           |

### Consideraciones

1. **dataLayer Initialization:** Siempre inicializar antes de push

   ```javascript
   window.dataLayer = window.dataLayer || [];
   ```

2. **Ecommerce Clear:** Limpiar objeto previo en eventos ecommerce

   ```javascript
   window.dataLayer.push({ ecommerce: null });
   ```

3. **Single Execution:** Usar flags para eventos que solo deben dispararse una vez

   ```javascript
   let eventSent = false;
   if (eventSent) return;
   eventSent = true;
   ```

4. **Logs Consistentes:** Usar prefijo `[Incubeta]` con emojis
   - ✅ para eventos enviados
   - 👆 para tracking de clicks iniciado
   - 👁️ para observadores iniciados

---

## Checklist de Testing

### Para Cada Evento:

- [ ] El evento solo se dispara con `ENABLE_INCUBETA=true`
- [ ] Se ve el log en consola con `[Incubeta] ✅`
- [ ] El evento aparece en el dataLayer de GTM
- [ ] Los parámetros tienen los valores correctos
- [ ] No hay errores en consola
- [ ] El evento no se duplica
- [ ] Funciona en diferentes navegadores
- [ ] Funciona en mobile

### Testing en Preview de GTM:

1. Abrir GTM en modo Preview
2. Navegar al sitio
3. Realizar la acción que dispara el evento
4. Verificar en GTM Preview que el evento se recibió
5. Validar los parámetros

---

## Mantenimiento

### Agregar un Nuevo Evento

1. Crear archivo en `app/utils/incubeta/nuevoEvento.js`
2. Seguir la estructura común
3. Implementar función de envío con `withIncubeta()`
4. Implementar función de inicialización
5. Agregar exports
6. Actualizar esta documentación

### Debugging

Activar logs detallados:

```javascript
// En app/utils/incubeta-utils.js
const DEBUG_INCUBETA = true;
```

Esto mostrará información adicional sobre:

- Estado de ENABLE_INCUBETA
- Ejecución de funciones wrapeadas
- Datos capturados antes de enviar

---

## Contacto y Soporte

Para dudas o problemas con la implementación:

- Revisar logs en consola del navegador
- Verificar que GTM esté correctamente instalado
- Confirmar que `ENABLE_INCUBETA=true` en el entorno
- Revisar el GTM Preview para validar eventos

---

**Última actualización:** 16 de diciembre de 2025
