# Contexto del proyecto

## 1. Resumen

**Nombre del proyecto:** Universidad Norbert Wiener (UNW) - Theme WordPress

**Tipo:** Tema personalizado de WordPress para sitio web institucional universitario

**Descripción:** Plataforma web institucional de la Universidad Norbert Wiener que incluye gestión de carreras universitarias, facultades, noticias, eventos, admisiones, servicios estudiantiles y centros especializados. El tema implementa arquitectura modular con separación de bundles JavaScript/CSS por página, optimizaciones de rendimiento (lazy loading, code splitting, deferred loading), integración con Google Tag Manager para analytics, formularios CRM para captación de leads, y sistema de custom post types para gestión de contenido estructurado.

**Tecnologías principales:** WordPress, PHP 7.4+, JavaScript ES6+, Webpack 4, SCSS, Swiper.js, Node.js 14.21.3

**Propósito:** Servir como plataforma digital principal de la universidad para difusión de información académica, captación de estudiantes potenciales, gestión de contenido dinámico (noticias, eventos, blog), y provisión de servicios estudiantiles.

---

## 2. Arquitectura y módulos

### 2.1. Estructura de directorios principal

```
/wp-content/themes/unw/
├── app/                          # Código fuente JavaScript modular
│   ├── animation/                # Animaciones (Paragraph, etc.)
│   ├── classes/                  # Clases base (Component, Page, Animation)
│   ├── components/               # Componentes reutilizables UI
│   ├── critical/                 # Bundles críticos inline (home.js, global.js)
│   ├── custom-chunks/            # Code splitting chunks (swiper-home.js)
│   ├── functions/                # Funciones auxiliares (scrollable-tabs.js)
│   ├── pages/                    # JavaScript específico por página
│   ├── utils/                    # Utilidades (lazyload, incubeta tracking, dom helpers)
│   └── index.js                  # Punto de entrada principal
├── assets/                       # Recursos estáticos pre-compilados
│   ├── css/                      # CSS legacy
│   ├── fonts/                    # Fuentes (Hanken Grotesk, etc.)
│   ├── images/                   # Imágenes del tema
│   └── js/                       # Scripts externos (gtm-loader.js, jquery.min.js)
├── build/                        # Assets compilados para producción
│   ├── css/                      # CSS con hash [contenthash:10]
│   ├── js/                       # JavaScript con hash [contenthash:10]
│   └── assets.json               # Manifiesto de assets para enqueue
├── content-parts/                # Fragmentos PHP reutilizables
│   ├── common/                   # Componentes comunes (navbar, footer, sidebar)
│   ├── components/               # Componentes específicos (accordion, cards, tabs)
│   ├── forms/                    # Formularios (contacto, CRM)
│   └── pages/                    # Content parts por página
├── inc/                          # Lógica PHP del tema
│   ├── functions/                # Funciones auxiliares (include-assets.php, tpl-functions.php)
│   ├── post-types/               # Custom Post Types (carreras, eventos, noticias)
│   ├── taxonomies/               # Taxonomías personalizadas (facultades, categorías)
│   ├── wp-*.php                  # Módulos WP (settings, blog, form, seo, careers)
├── styles/                       # SCSS modular
│   ├── base/                     # Variables, reset, tipografía
│   ├── components/               # Componentes UI (buttons, cards, forms)
│   ├── layout/                   # Layout general (header, footer, grid)
│   ├── pages/                    # Estilos específicos por página
│   ├── shared/                   # Estilos compartidos
│   ├── utils/                    # Mixins, funciones SCSS
│   └── index.scss                # Punto de entrada principal
├── templates/                    # Page Templates WordPress (70+ templates)
├── upload/                       # Assets estáticos subidos (imágenes, PDFs)
├── functions.php                 # Entry point PHP del tema
├── header.php                    # Header HTML
├── footer.php                    # Footer HTML
├── webpack.config.js             # Configuración Webpack 4
├── package.json                  # Dependencias Node.js
├── composer.json                 # Dependencias PHP (phpmailer)
└── .nvmrc                        # Versión Node v14
```

### 2.2. Patrones arquitectónicos

**Patrón:** Arquitectura de tema WordPress con separación modular MVC (Model-View-Controller adaptado)

- **Models:** Custom Post Types (`cpt-careers.php`, `cpt-news.php`, `cpt-events.php`) + Taxonomías (`taxonomy-facultad-carriers.php`)
- **Views:** Templates PHP (`templates/*.php`) + Content Parts (`content-parts/**/*.php`)
- **Controllers:** Funciones PHP (`inc/functions/*.php`) + Acciones/Filtros WordPress

**Patrón:** Code Splitting y Lazy Loading en Frontend

- **Critical CSS/JS:** Bundles inline para LCP optimization (`critical-home.js`, `critical-global.js`)
- **Page-specific bundles:** Webpack genera bundles separados por página (`home.js`, `careers.js`, `admission.js`, etc.)
- **Dynamic imports:** Code splitting con `await import()` para swipers (`swiper-home.js` carga 6 tipos diferentes)
- **Deferred loading:** UserActivityDetector ejecuta código después de primera interacción del usuario

**Patrón:** Component-Based Architecture (JavaScript)

- Clase base `Component` con AutoBind y EventEmitter
- Clase base `Page` para páginas con animaciones y prefijos CSS
- Componentes reutilizables: `Menu`, `Modal`, `Tabs`, `Accordion`, `Swiper`, `FormCRM`, etc.

### 2.3. Módulos principales

| Módulo                      | Ubicación                                                        | Descripción                                                                               |
| --------------------------- | ---------------------------------------------------------------- | ----------------------------------------------------------------------------------------- |
| **Core Theme**              | `functions.php`, `inc/wp-settings.php`                           | Inicialización del tema, definición de constantes, carga de módulos                       |
| **Asset Management**        | `inc/functions/include-assets.php`                               | Enqueue scripts/styles con `wp_enqueue_*`, lectura de `assets.json`, defer scripts        |
| **Custom Post Types**       | `inc/post-types/cpt-*.php`                                       | 13 CPTs (carreras, eventos, noticias, testimonios, docentes, países, etc.)                |
| **Taxonomías**              | `inc/taxonomies/taxonomy-*.php`                                  | 3 taxonomías (facultades presenciales/distancia, categorías de noticias, campus)          |
| **SEO & Performance**       | `inc/wp-seo.php`                                                 | Preload imágenes responsive, meta tags, rank math integration                             |
| **Forms & CRM**             | `inc/wp-form.php`, `app/components/FormCRM/`                     | Gestión UTMs, merge parámetros, formularios con validación Pristine.js                    |
| **Blog & Content**          | `inc/wp-blog.php`, `inc/functions/tpl-noticias.php`              | Queries personalizadas, taxonomías de noticias                                            |
| **Careers Module**          | `inc/wp-careers.php`, `templates/template-careers.php`           | Gestión de carreras, modalidades, precios, facultades                                     |
| **JavaScript Core**         | `app/index.js`, `app/classes/`                                   | App principal, clases Component/Page/Animation                                            |
| **Swipers & Sliders**       | `app/custom-chunks/swiper-home.js`, `app/components/*Swiper.js`  | HomeSwiperLoader (6 tipos), HeroSwiper, PostSwiper, InternationalSwiper                   |
| **Analytics Tracking**      | `app/utils/incubeta/`, `assets/js/gtm-loader.js`                 | GTM tracking deferred, eventos personalizados (viewItemList, selectItem, carrousel, etc.) |
| **User Activity Detection** | `app/utils/detect-user-activity.js`                              | Detector de interacción (14 eventos) para deferred loading                                |
| **Performance Utils**       | `app/functions/scrollable-tabs.js`, `app/components/SedesMap.js` | Optimizaciones con requestAnimationFrame para evitar forced reflows                       |
| **SCSS Architecture**       | `styles/`                                                        | Modular (base, components, layout, pages, utils), imports con @import compass             |

---

## 3. Tecnologías y versiones

### 3.1. Backend (PHP)

| Tecnología              | Versión                              | Uso                           |
| ----------------------- | ------------------------------------ | ----------------------------- |
| **PHP**                 | 7.4+                                 | Lenguaje servidor WordPress   |
| **WordPress**           | No especificada (compatible WP 5.x+) | CMS base                      |
| **Composer**            | -                                    | Gestor de dependencias PHP    |
| **phpmailer/phpmailer** | ^6.2                                 | Envío de correos electrónicos |

### 3.2. Frontend (JavaScript/CSS)

| Tecnología    | Versión            | Uso                                           |
| ------------- | ------------------ | --------------------------------------------- |
| **Node.js**   | 14.21.3 (`.nvmrc`) | Runtime JavaScript para build                 |
| **Webpack**   | 4.29.6             | Module bundler y task runner                  |
| **Babel**     | 7.x                | Transpilación ES6+ a ES5 compatible           |
| **SASS/SCSS** | node-sass 4.11.0   | Preprocesador CSS                             |
| **PostCSS**   | 3.0.0              | Post-procesamiento CSS (autoprefixer, precss) |

### 3.3. Librerías JavaScript principales

| Librería             | Versión                   | Uso                                              |
| -------------------- | ------------------------- | ------------------------------------------------ |
| **Swiper**           | 6.7.5                     | Sliders/carouseles touchable                     |
| **GSAP**             | 3.10.4                    | Animaciones avanzadas                            |
| **ScrollMagic**      | 2.0.8                     | Animaciones scroll-triggered                     |
| **vanilla-lazyload** | 17.8.2                    | Lazy loading imágenes/iframes                    |
| **PristineJS**       | ^1.1.0                    | Validación de formularios                        |
| **smooth-scrollbar** | ^8.7.4                    | Scroll suave customizado                         |
| **aos**              | 2.3.4                     | Animate on Scroll                                |
| **auto-bind**        | 4.0.0                     | Binding automático de métodos en clases          |
| **lodash**           | (via imports específicos) | Utilidades (each, map, etc.)                     |
| **events**           | ^3.3.0                    | EventEmitter para arquitectura basada en eventos |

### 3.4. Herramientas de desarrollo

| Herramienta                 | Versión | Uso                                 |
| --------------------------- | ------- | ----------------------------------- |
| **webpack-dev-server**      | 3.2.1   | Servidor desarrollo con HMR         |
| **UglifyJS**                | 2.1.2   | Minificación JavaScript             |
| **MiniCssExtractPlugin**    | 0.5.0   | Extracción CSS a archivos separados |
| **PurgeCSSPlugin**          | 3.1.3   | Eliminación CSS no usado            |
| **OptimizeCSSAssetsPlugin** | 5.0.1   | Optimización CSS                    |
| **AssetsPlugin**            | 3.9.10  | Generación manifiesto assets.json   |
| **cross-env**               | 7.0.3   | Variables entorno cross-platform    |
| **Standard**                | 16.0.4  | Linter JavaScript                   |

### 3.5. WordPress Plugins detectados

- **Advanced Custom Fields (ACF):** Campos personalizados (bloques Gutenberg: accordion, cards, sidebar, contact)
- **Rank Math:** SEO (integración en `inc/wp-cs.php`)
- No se detectan otros plugins obligatorios en código

---

## 4. Endpoints y contratos existentes

### 4.1. URLs WordPress estándar

| Endpoint                                     | Tipo             | Descripción                                 |
| -------------------------------------------- | ---------------- | ------------------------------------------- |
| `/`                                          | Home             | Template: `template-home.php`               |
| `/carreras-uwiener/{facultad}/{carrera}`     | Single Post Type | Template: `single-carreras.php`             |
| `/carreras-a-distancia/{facultad}/{carrera}` | Single Post Type | Template: `single-carreras-a-distancia.php` |
| `/eventos/{slug}`                            | Single Post Type | Template: `single-eventos.php`              |
| `/novedades/{slug}`                          | Single Post Type | Template: `single-novedades.php`            |
| `/facultad/{facultad}`                       | Single Post Type | Template: `single-facultad.php`             |
| `/blog/{slug}`                               | Single Post      | Template: `single-post.php`                 |
| `/categoria_novedad/{categoria}`             | Taxonomy Archive | Template: `taxonomy-categoria_novedad.php`  |
| `/buscar`                                    | Search           | Template: `search.php`, `search-blog.php`   |

### 4.2. Page Templates (70+ templates)

Ejemplos principales:

- **Institucional:** `template-about-us.php`, `template-our-history.php`, `template-quality-policy.php`, `template-powered-by-asu.php`
- **Admisión:** `template-admission-pregrado.php`, `template-admission-traslado.php`, `template-admission-convalidation.php`, `template-admision-examen-admision.php`, `template-admision-beca18.php`
- **Carreras:** `template-careers.php`, `template-all-careers.php`, `template-careers-for-working-people.php`, `template-precios-carreras-universitarias.php`
- **Becas/Créditos:** `template-becas.php`, `template-becas-credito.php`, `template-becas-fondo-empleo.php`, `template-credito-escalo.php`
- **Servicios:** `template-bienestar-estudiantil.php`, `template-servicios-medicos.php`, `template-servicios-psicopedagogicos.php`, `template-servicios-universitarios.php`
- **Centros:** `template-centro-odontologico.php`, `template-centro-de-terapia-fisica-y-rehabilitacion.php`, `template-centros-analisis-clinico.php`, `template-centro-de-idiomas.php`
- **Trámites:** `template-registros-academicos.php`, `template-constancia-*.php` (15+ variantes), `template-duplicado-*.php`, `template-anulacion-matricula.php`, `template-retiro-curso.php`
- **Otros:** `template-internacionalizacion.php`, `template-responsabilidad-social.php`, `template-promocion-cultural.php`, `template-defensoria-universitaria.php`

### 4.3. Rutas de assets (Webpack)

**Desarrollo:** `http://localhost:8035/public/{css|js}/[bundle].{css|js}`

**Producción:** `/wp-content/themes/unw/build/{css|js}/[bundle].[hash].{css|js}`

Bundles generados (según `entrypoints.json`):

- `critical-home.js`, `critical-global.js` (inline)
- `app.js`, `app.css` (global)
- `home.js`, `home.css`
- `careers.js`, `careers.css`
- `admission.js`, `admission.css`
- `faculty.js`, `faculty.css`
- `news.js`, `news.css`
- `blog.js`, `blog.css`
- `events.js`, `events.css`
- `powered-by-asu.js`, `powered-by-asu.css`
- `search.js`, `search.css`
- `about-us.js`, `about-us.css`
- `our-history.js`, `our-history.css`
- `quality-policy.js`, `quality-policy.css`
- `all-careers.js`, `all-careers.css`
- `landing.js`, `landing.css`
- `thanks.js`, `thanks.css`
- `404.js`, `404.css`
- `migration.js`, `migration.css`

### 4.4. APIs externas integradas

**Google Tag Manager:**

- GTM ID: `GTM-W8DNW8B`
- Carga: Deferred con `assets/js/gtm-loader.js` después de primera interacción
- DataLayer events: `carrousel_view`, `carrousel_swipe`, `carrousel_click`, `view_item_list`, `select_item`, `error_message`, `faq_click`, `footer_click`, `contact_click`, `share_click`

**Google Fonts:**

- Preconnect: `https://fonts.googleapis.com`, `https://fonts.gstatic.com`
- Familia: Hanken Grotesk (configurada en CSS vars)

**No se detectan APIs REST propias o servicios externos adicionales en el código analizado**

---

## 5. Integraciones (APIs, colas, BDs)

### 5.1. Base de datos

**WordPress MySQL estándar:**

- Tablas core WP: `wp_posts`, `wp_postmeta`, `wp_terms`, `wp_term_relationships`, etc.
- Custom Post Types almacenados en `wp_posts` con `post_type` específico:
  - `carreras` (Carreras presenciales)
  - `carreras-a-distancia` (Carreras a distancia)
  - `eventos` (Eventos)
  - `novedades` (Noticias/Novedades)
  - `post` (Blog posts)
  - `testimonials`, `comite`, `teachers`, `courses`, `infrastructure`, `admission_process`, `countries`, `colores`, `utms`
- Taxonomías custom en `wp_terms`:
  - `categoria-carrera` (Facultades carreras presenciales)
  - `categoria-carrera-distancia` (Facultades carreras distancia)
  - `categoria_novedad` (Categorías noticias)
  - `campus` (Sede/Campus)

### 5.2. APIs externas

| Servicio               | URL                                                         | Uso                       | Método                    |
| ---------------------- | ----------------------------------------------------------- | ------------------------- | ------------------------- |
| **Google Tag Manager** | `https://www.googletagmanager.com/gtm.js?id=GTM-W8DNW8B`    | Analytics y tracking      | Script injection deferred |
| **Google Fonts**       | `https://fonts.googleapis.com`, `https://fonts.gstatic.com` | Tipografía Hanken Grotesk | Preconnect + Link         |

**No se detectan integraciones con:**

- CRMs externos (HubSpot, Salesforce, etc.) - Los formularios parecen procesar localmente vía PHP
- Sistemas de pagos (Stripe, PayPal, etc.)
- APIs REST propias del tema
- Servicios de cola (RabbitMQ, Redis, etc.)
- CDN específico (CloudFlare, etc.)

### 5.3. Almacenamiento de archivos

**Local storage WordPress:**

- Assets estáticos: `/wp-content/themes/unw/upload/` (imágenes, PDFs por sección)
- Uploads WordPress: Presumiblemente `/wp-content/uploads/` (estándar WP)
- No se detecta integración con S3, GCS u otro cloud storage

---

## 6. Modelo de datos (alto nivel)

### 6.1. Custom Post Types principales

**Carreras (`carreras`)**

- Slug: `/carreras-uwiener/{facultad}/{carrera}`
- Taxonomía: `categoria-carrera` (Facultades)
- Campos ACF: hero_slider, modalities, beneficios, perfil_egresado, plan_estudios, precios, formularios, tabs
- Template: `single-carreras.php`

**Carreras a Distancia (`carreras-a-distancia`)**

- Slug: `/carreras-a-distancia/{facultad}/{carrera}`
- Taxonomía: `categoria-carrera-distancia`
- Campos ACF: Similar a carreras presenciales
- Template: `single-carreras-a-distancia.php`

**Eventos (`eventos`)**

- Slug: `/eventos/{slug}`
- Campos ACF: hero_slider, fecha, ubicacion, list_of_files (carrusel imágenes)
- Template: `single-eventos.php`

**Novedades (`novedades`)**

- Slug: `/novedades/{slug}`
- Taxonomía: `categoria_novedad`
- Campos ACF: hero_image, fecha_publicacion, contenido_flexible
- Template: `single-novedades.php`

**Facultades (`facultad`)** - Custom Post Type independiente

- Slug: `/facultad/{facultad}`
- Campos ACF: hero_slider, descripcion, carreras_asociadas
- Template: `single-facultad.php`

**Otros CPTs:**

- `testimonials`: Testimonios de estudiantes
- `comite`: Miembros del comité
- `teachers`: Docentes
- `courses`: Cursos
- `infrastructure`: Infraestructura
- `admission_process`: Procesos de admisión
- `countries`: Países (para internacionalización)
- `colores`: Colores (configuración)
- `utms`: UTM parameters (tracking)

### 6.2. Taxonomías

**Facultad Carreras Presenciales (`categoria-carrera`)**

- Aplicada a: `carreras`
- Jerárquica: Sí (categorías)
- Rewrite: `carreras-uwiener`

**Facultad Carreras a Distancia (`categoria-carrera-distancia`)**

- Aplicada a: `carreras-a-distancia`
- Jerárquica: Sí
- Rewrite: `carreras-a-distancia-uwiener`

**Categorías de Novedades (`categoria_novedad`)**

- Aplicada a: `novedades`
- Jerárquica: Sí
- Template: `taxonomy-categoria_novedad.php`

**Campus/Sede (`campus`)**

- Aplicada a: Post types no especificados en fragmento analizado

### 6.3. Campos ACF detectados (ejemplos)

**Comunes en páginas:**

- `hero_slider`: Array de imágenes para hero carousel
- `sections`: Flexible content (section-hero, section-content, section-grid-card, section-carousel, section-image)
- `sidebar`: Sidebar items
- `services`: Cards de servicios
- `benefits`: Beneficios (array)
- `modalities`: Modalidades de estudio

**Específicos de carreras:**

- `perfil_egresado`: Texto
- `plan_estudios`: Repetidor de ciclos/cursos
- `precios`: Información de costos
- `duracion`: Duración de la carrera
- `grado_titulo`: Información de títulos

### 6.4. Relaciones entre entidades

```
Carreras (carreras)
  └── Taxonomía: categoria-carrera (Facultad)
      └── Term: {facultad_slug} (Ej: ingenieria, salud, negocios)

Carreras a Distancia (carreras-a-distancia)
  └── Taxonomía: categoria-carrera-distancia
      └── Term: {facultad_slug}

Novedades (novedades)
  └── Taxonomía: categoria_novedad
      └── Term: {categoria_slug} (Ej: institucional, academico, cultural)

Facultades (facultad) - Post Type independiente
  └── Relación ACF con: carreras (via query o meta)

Eventos (eventos)
  └── Sin taxonomías asignadas

Blog (post)
  └── Taxonomías WP estándar: category, post_tag
```

---

## 7. Estándares y convenciones de código

### 7.1. Convenciones PHP

**Naming:**

- Funciones: `snake_case` (Ej: `include_assets()`, `get_value_or_default()`, `uw_preload_responsive_images()`)
- Clases Post Types: Prefijo `register_post_type_*` (Ej: `register_post_type_carreras()`)
- Constantes: `UPPER_SNAKE_CASE` (Ej: `THEME_PATH`, `UPLOAD_PATH`, `HOME_CONTENT_PATH`)
- Prefijos del tema: `uw_`, `unw_` para funciones propias

**Estructura de archivos:**

- Un CPT por archivo: `inc/post-types/cpt-{nombre}.php`
- Una taxonomía por archivo: `inc/taxonomies/taxonomy-{nombre}.php`
- Módulos temáticos: `inc/wp-{modulo}.php` (Ej: `wp-seo.php`, `wp-blog.php`)

**WordPress Hooks:**

- `add_action()` y `add_filter()` con closures preferentemente
- Priority 10 por defecto, ajustado según necesidad (Ej: `add_action('wp_enqueue_scripts', 'include_assets', 20)`)

**Comentarios:**

- PHPDoc para funciones complejas con @param, @return
- Comentarios inline en español

### 7.2. Convenciones JavaScript

**Naming:**

- Clases: `PascalCase` (Ej: `Component`, `Menu`, `HomeSwiperLoader`, `UserActivityDetector`)
- Funciones/métodos: `camelCase` (Ej: `initLazyLoad()`, `detectComponents()`, `scrollToTab()`)
- Archivos: `kebab-case` (Ej: `detect-user-activity.js`, `swiper-home.js`)
- Constantes de clase: `UPPER_SNAKE_CASE` (Ej: `SWIPER_CONFIG`)

**Imports/Exports:**

- ES6 modules: `import`, `export default`
- Dynamic imports: `await import('./path')` para code splitting
- Named exports para utilidades: `export { function1, function2 }`

**Patrones:**

- Clases con `constructor()`, `create()`, métodos privados con `_prefijo` (no estricto)
- `AutoBind(this)` en clases que extienden `Component` o `Page`
- Event listeners con `.bind(this)` o arrow functions
- Destructuring: `const { element, elements } = this.config`

**Comentarios:**

- JSDoc para funciones complejas con @param, @returns, @example
- Comentarios inline en español o inglés

### 7.3. Convenciones CSS/SCSS

**Naming:** BEM (Block Element Modifier) adaptado

- Bloques: `.nombre-bloque` (Ej: `.hero-swiper`, `.career-card`)
- Elementos: `.bloque__elemento` (Ej: `.hero-swiper__slide`, `.career-card__title`)
- Modificadores: `.bloque--modificador` (Ej: `.btn--primary`, `.swiper-slide--active`)

**Estructura:**

- Variables: `$color-primary`, `$font-family-base`
- Mixins: `@mixin responsive($breakpoint)`, `@mixin flexbox`
- Imports: `@import "./base/vars"`, `@import "./components/button"`

**Organización:**

```scss
styles/
├── base/          # Reset, variables, tipografía, normalize
├── utils/         # Mixins, funciones, helpers
├── shared/        # Estilos compartidos (buttons, forms, cards)
├── components/    # Componentes UI específicos
├── layout/        # Header, footer, grid, sidebar
└── pages/         # Estilos específicos por página
```

**Media queries:**

- Mobile-first approach
- Uso de `include-media` librería para breakpoints
- Breakpoints: `(max-width: 768px)`, `(min-width: 768px)`

### 7.4. Convenciones de Git (detectadas)

**Branches:**

- Rama actual: `feature/integration-static`
- Patrón inferido: `feature/{nombre}`, posibles `main`, `develop`

**Archivos ignorados (.gitignore):**

```
git, node_modules, public, .svn
yarn.lock, logs, *.log, npm-debug.log*
wp-config.php, package-lock.json
entrypoints.dev.json
build, .DS_Store, .vscode/*
```

**Commits:** No se detectan convenciones específicas (conventional commits, etc.)

---

## 8. Testing (unitario, integración, datos de prueba)

### 8.1. Tests detectados

**No se detectaron archivos de testing automatizado en el análisis:**

- No hay carpeta `/tests/` o `/__tests__/`
- No hay archivos `*.test.js`, `*.spec.js`
- No hay configuración de Jest, Mocha, PHPUnit en `package.json` o archivos de config

**Scripts NPM relacionados:**

```json
"test": "echo \"Error: no test specified\" && exit 1"
```

- El script `test` está como placeholder sin implementación

### 8.2. Testing manual

**Ambiente de desarrollo:**

- URL local: `http://unw.loc` (configurado en `webpack.config.js`)
- Webpack dev server: `http://localhost:8035`
- Hot Module Replacement (HMR) habilitado para desarrollo iterativo

**Herramientas de debugging:**

- Source maps: Generados con `npm run prod:map` (devtool: `'source-map'`)
- Función `vdebug($hero)` en `include-assets.php` para debug visual de variables PHP
- Console logs condicionales en tracking Incubeta (Ej: `console.log('[Incubeta] ✅ carrousel_swipe enviado:', dataLayerEvent)`)

### 8.3. Datos de prueba

**No se detectan seeds o fixtures:**

- No hay scripts de generación de datos dummy
- Contenido de prueba presumiblemente gestionado manualmente en WP admin

**Assets de prueba:**

- Carpeta `/upload/` contiene imágenes organizadas por sección
- Carpeta `/upload/migration/` con assets de migración de sitio anterior

### 8.4. Recomendaciones para testing

**Pendiente:** Implementar suite de tests

Sugerencias:

- **PHP:** PHPUnit para testing de funciones del tema
- **JavaScript:** Jest para testing de componentes y utilidades
- **E2E:** Cypress o Playwright para testing de flujos críticos (formularios, navegación)
- **Performance:** Lighthouse CI para monitoreo continuo de métricas

---

## 9. CI/CD y calidad (análisis estático, cobertura, quality gate)

### 9.1. CI/CD

**No se detectaron pipelines de CI/CD:**

- No hay archivos `.github/workflows/*.yml`
- No hay `.gitlab-ci.yml`, `.circleci/config.yml`, `Jenkinsfile`, etc.
- No se detectan configuraciones de GitHub Actions, GitLab CI, CircleCI, etc.

**Deployment:** Manual (inferido)

- Build local: `npm run prod`
- Deploy presumiblemente vía FTP/SFTP o Git hooks manuales

### 9.2. Análisis estático

**JavaScript - Standard.js:**

```json
"lint": "npx standard --fix"
```

- Linter: **Standard** v16.0.4 (ESLint wrapper con config opinionada)
- Config: `@babel/eslint-parser` v7.14.7
- Auto-fix habilitado con `--fix`

**PHP:**

- No se detecta configuración de PHP_CodeSniffer, PHPStan, Psalm, etc.

**CSS:**

- No se detecta stylelint u otro linter CSS específico
- PostCSS con autoprefixer y precss aplicado globalmente

### 9.3. Code Quality

**PurgeCSS configurado:**

- Plugin: `purgecss-webpack-plugin` v3.1.3
- Safelist: `purgecss.safelist.js` con 63 reglas (swiper, menu, accordion, etc.)
- Paths: `app/**/*.{js}`, `*.php`, `content-parts/**/*.php`, `templates/**/*.php`
- Extractor: `/[\w-/:%.]+(?<!:)/g` para detectar clases CSS en uso

**Optimizaciones de build:**

- **UglifyJS:** Minificación con `drop_console: true` (elimina console.log en producción)
- **OptimizeCSSAssetsPlugin:** Minificación CSS
- **MiniCssExtractPlugin:** Extracción CSS separado de JS
- **Content hashing:** `[contenthash:10]` para cache busting
- **Code splitting:** Bundles separados por página, chunks async

**Performance optimizations detectadas:**

- **requestAnimationFrame batching:** En `scrollable-tabs.js`, `SedesMap.js`, `Tabs.js` para evitar forced reflows
- **UserActivityDetector:** Deferred loading de swipers hasta primera interacción (14 eventos)
- **GTMLoader:** Google Tag Manager carga diferida con `yieldToMain()` para no bloquear main thread
- **Lazy loading:** vanilla-lazyload para imágenes e iframes
- **Dynamic imports:** Code splitting con `await import()` para reducir bundle inicial
- **Critical CSS strategy:** Bundles `critical-home.js`, `critical-global.js` preparados para inline

### 9.4. Cobertura de código

**No se detectó configuración de code coverage:**

- No hay configuración de Istanbul, NYC, o similar
- No hay reportes de coverage en `.gitignore` o estructura de carpetas

### 9.5. Quality gates

**No se detectaron quality gates automatizados:**

- No hay configuración de SonarQube, CodeClimate, etc.
- No hay badges de coverage o quality score en README.md

**Recomendaciones pendientes:**

- Configurar GitHub Actions para:
  - Lint automático en PRs
  - Build de producción en merge a main
  - Deploy automático a staging/producción
- Integrar SonarQube para análisis de deuda técnica
- Configurar Lighthouse CI para performance budgets

---

## 10. Seguridad (authn/authz, secretos)

### 10.1. Autenticación/Autorización

**WordPress estándar:**

- Autenticación: Sistema nativo de WordPress (usuarios, roles, capabilities)
- Roles detectados: Administrator, Editor, Author, Contributor, Subscriber (roles WP estándar)
- No se detectan custom roles o capabilities en el código analizado

**Protección de rutas:**

- No se detectan middlewares o guards personalizados
- Presunción: Uso de `current_user_can()` estándar de WordPress para proteger acciones

### 10.2. Gestión de secretos

**Constantes sensibles:**

```php
define('INCUBETA_ENABLED', false); // Control de tracking
```

- GTM ID hardcodeado: `GTM-W8DNW8B` (público, no es secreto)

**No se detectan:**

- Variables de entorno `.env` con secretos (API keys, credenciales DB)
- Uso de `dotenv` o similar
- Integración con vaults (AWS Secrets Manager, HashiCorp Vault, etc.)

**Presunción:** Credenciales DB en `wp-config.php` (archivo estándar WP, excluido del repositorio)

### 10.3. Seguridad en formularios

**Validación:**

- Client-side: PristineJS v1.1.0 para validación en tiempo real
- Server-side: Presumiblemente sanitización con `sanitize_text_field()`, `esc_html()`, `esc_url()`

**Ejemplos de sanitización detectados:**

```php
$name  = sanitize_key($item['name']);
$value = sanitize_text_field($item['value'] ?? '');
```

**CSRF Protection:**

- WordPress nonces presumiblemente usados (estándar en formularios WP)
- No se detecta implementación explícita en fragmentos analizados

### 10.4. Headers de seguridad

**Configuración Webpack Dev Server:**

```javascript
headers: {
  'Access-Control-Allow-Origin': '*',
  'X-Content-Type-Options': 'nosniff',
  'X-Frame-Options': 'DENY'
}
```

**Headers en producción:**

- No se detecta configuración explícita en `.htaccess` o `nginx.conf`
- Presunción: Headers configurados a nivel servidor web (Apache/Nginx)

**Recomendaciones pendientes:**

- Configurar Content Security Policy (CSP)
- Agregar `Strict-Transport-Security` (HSTS)
- Revisar `Referrer-Policy`
- Implementar `Permissions-Policy`

### 10.5. Vulnerabilidades conocidas

**Dependencias con versiones antiguas:**

- Node.js 14.21.3 (EOL desde abril 2023) ⚠️
- Webpack 4.29.6 (última versión 4.x, recomendado migrar a Webpack 5)
- node-sass 4.11.0 (deprecated, recomendado migrar a dart-sass)

**Recomendaciones:**

- Auditar dependencias: `npm audit`
- Actualizar a Node.js 18 LTS o 20 LTS
- Migrar a Webpack 5 y sass (dart-sass)
- Revisar plugins WordPress para actualizaciones de seguridad

### 10.6. Uploads y archivos

**Configuración detectada:**

```php
define('ALLOW_UNFILTERED_UPLOADS', true);
```

⚠️ **Riesgo de seguridad:** Permite subida de cualquier tipo de archivo. Recomendado cambiar a `false` y whitelist de extensiones permitidas.

**Validación de uploads:**

- No se detecta validación explícita de tipos MIME o extensiones
- Recomendación: Implementar filtro `upload_mimes` y validación server-side

---

## 11. Observabilidad (logs, métricas, trazas)

### 11.1. Logging

**JavaScript:**

- Console logs en tracking Incubeta (condicional, probablemente deshabilitado en producción)
- Ejemplo: `console.log('[Incubeta] ✅ carrousel_swipe enviado:', dataLayerEvent)`
- No se detecta librería de logging estructurado (Winston, Bunyan, etc.)

**PHP:**

- No se detecta configuración explícita de logging
- Presunción: Uso de `error_log()` nativo de PHP o logs de WordPress (`WP_DEBUG`, `WP_DEBUG_LOG`)

**Recomendaciones pendientes:**

- Implementar logging estructurado con librería (Monolog para PHP, Winston para Node.js)
- Configurar niveles de log (DEBUG, INFO, WARN, ERROR)
- Centralizar logs en servicio externo (CloudWatch, Papertrail, Loggly)

### 11.2. Métricas y monitoreo

**Analytics:**

- **Google Tag Manager:** GTM-W8DNW8B con eventos personalizados
  - `carrousel_view`, `carrousel_swipe`, `carrousel_click`
  - `view_item_list`, `select_item`
  - `error_message`, `faq_click`, `footer_click`, `contact_click`, `share_click`
- **Incubeta tracking:** Módulo personalizado en `app/utils/incubeta/` con 9 archivos de tracking
  - Control global: `INCUBETA_ENABLED` (actualmente `false`)
  - Eventos enviados a `window.dataLayer`

**Performance monitoring:**

- No se detecta integración con:
  - Google Analytics 4
  - New Relic
  - Datadog
  - Sentry (error tracking)
  - Lighthouse CI

**Recomendaciones pendientes:**

- Activar `INCUBETA_ENABLED` para habilitar tracking
- Integrar Sentry para error tracking JavaScript/PHP
- Configurar Real User Monitoring (RUM) con herramienta especializada
- Implementar dashboards de métricas de negocio (conversiones, leads, etc.)

### 11.3. Trazas distribuidas

**No se detectó implementación de tracing:**

- No hay integración con OpenTelemetry, Jaeger, Zipkin, etc.
- No aplica para arquitectura monolítica WordPress (sin microservicios)

### 11.4. Debugging en producción

**Source Maps:**

- Generados condicionalmente con `npm run prod:map`
- Variable de entorno: `SOURCE_MAP=true`
- Output: `build/js/*.map`, `build/css/*.map`

**Feature flags:**

- `INCUBETA_ENABLED`: Control manual de tracking analytics

**Debug helpers:**

- Función `vdebug($hero)` en PHP para imprimir variables estilizadas

---

## 12. Configuración por entorno

### 12.1. Ambientes detectados

| Ambiente               | URL              | Build              | Descripción                                    |
| ---------------------- | ---------------- | ------------------ | ---------------------------------------------- |
| **Desarrollo**         | `http://unw.loc` | `npm run dev`      | Webpack dev server con HMR en `localhost:8035` |
| **Producción**         | No especificada  | `npm run prod`     | Build optimizado sin source maps               |
| **Producción + Debug** | No especificada  | `npm run prod:map` | Build optimizado con source maps               |

### 12.2. Variables de configuración

**Webpack (JavaScript):**

```javascript
const settings = {
  mode: options.mode, // 'development' | 'production'
  proxy: "http://unw.loc",
  port: 8035,
  isWordpress: true,
  separateBundles: true,
  babelPolyfill: true,
  compressAssets: true,
  useHash: true, // Hashing en producción
};
```

**PHP (WordPress):**

```php
// functions.php
define('INCUBETA_ENABLED', false);

// inc/wp-settings.php
define('ROOTPATH', __DIR__);
define('BASE_URL', get_bloginfo('url'));
define('THEME_PATH', get_template_directory_uri());
define('UPLOAD_PATH', get_template_directory_uri() . '/upload');
define('UPLOAD_MIGRATION_PATH', get_template_directory_uri() . '/upload/migration');
define('IMAGE_DEFAULT', get_template_directory_uri() . '/upload/imagen-defaul.jpg');
define('ASSETS_PATH', get_template_directory_uri() . '/assets');
define('ALLOW_UNFILTERED_UPLOADS', true);
define('ALLOW_GZIP', false);
// ... 20+ constantes de rutas
```

### 12.3. Diferencias entre ambientes

| Feature           | Desarrollo                     | Producción                                    |
| ----------------- | ------------------------------ | --------------------------------------------- |
| **Source maps**   | `inline-source-map`            | `false` (o `source-map` si `SOURCE_MAP=true`) |
| **Hot reload**    | ✅ HMR habilitado              | ❌                                            |
| **CSS**           | Inyectado vía `style-loader`   | Extraído en archivos separados `.css`         |
| **Minificación**  | ❌                             | ✅ UglifyJS + OptimizeCSS                     |
| **Console logs**  | ✅ Conservados                 | ❌ Eliminados (`drop_console: true`)          |
| **Cache busting** | Hash simple                    | `[contenthash:10]`                            |
| **Compress**      | ❌                             | ✅                                            |
| **Server**        | Webpack dev server puerto 8035 | Apache/Nginx estándar                         |

### 12.4. Gestión de configuración

**No se detecta `.env` o archivos de configuración por ambiente:**

- No hay `.env`, `.env.example`, `.env.production`, etc.
- No hay uso de `dotenv` en Node.js
- No hay `config/environments/` con archivos por ambiente

**Configuración actual:**

- Variables hardcodeadas en código (`webpack.config.js`, `functions.php`)
- Ambiente determinado por `--mode` flag de Webpack
- Presunción: `wp-config.php` con constantes WP (`WP_DEBUG`, `DB_NAME`, etc.) según ambiente

**Recomendaciones pendientes:**

- Implementar `.env` con dotenv para Node.js
- Externalizar configuraciones sensibles (API keys, URLs, feature flags)
- Crear archivos de config por ambiente: `config/development.js`, `config/production.js`

---

## 13. Estrategia de ramas y commits

### 13.1. Ramas detectadas

**Rama actual:** `feature/integration-static`

**Estrategia inferida:**

- Patrón: `feature/{nombre-descriptivo}`
- Presunción de ramas principales:
  - `main` o `master`: Rama producción
  - `develop`: Rama desarrollo (posible)
  - `feature/*`: Features en desarrollo
  - Posibles: `hotfix/*`, `release/*` (no confirmado)

### 13.2. Convenciones de commits

**No se detectan convenciones específicas:**

- No hay `.commitlintrc`, `.gitmessage`, `.husky/` con hooks
- No se detecta Conventional Commits configurado

**Recomendaciones:**

- Implementar Conventional Commits:
  - `feat:` nuevas funcionalidades
  - `fix:` corrección de bugs
  - `refactor:` refactorización sin cambio funcional
  - `perf:` mejoras de rendimiento
  - `docs:` documentación
  - `style:` formato, linting
  - `test:` tests
  - `chore:` tareas de mantenimiento
- Configurar Husky + commitlint para validación automática

### 13.3. Git hooks

**No se detectan hooks configurados:**

- No hay carpeta `.husky/`
- No hay scripts en `package.json` para `prepare`, `pre-commit`, `pre-push`

**Recomendaciones pendientes:**

- `pre-commit`: Lint automático con `npm run lint`
- `pre-push`: Build de producción para validar antes de push
- `commit-msg`: Validar formato de commits

### 13.4. Archivos ignorados

**`.gitignore`:**

```
git, node_modules, public
.svn
yarn.lock, logs, *.log, npm-debug.log*
wp-config.php
package-lock.json
entrypoints.dev.json
build, .DS_Store, .vscode/*
```

**Destacable:**

- `build/` ignorado: Assets compilados no versionados (correcto)
- `wp-config.php` ignorado: Archivo con credenciales sensibles (correcto)
- `package-lock.json` ignorado: Inusual, recomendado versionarlo para reproducibilidad

---

## 14. Riesgos, supuestos y limitaciones

### 14.1. Riesgos técnicos identificados

| Riesgo                           | Severidad | Descripción                                                                                   | Mitigación sugerida                                |
| -------------------------------- | --------- | --------------------------------------------------------------------------------------------- | -------------------------------------------------- |
| **Node.js 14 EOL**               | 🔴 Alta   | Node 14.21.3 sin soporte desde abril 2023, vulnerabilidades sin parchear                      | Migrar a Node 18 LTS o 20 LTS                      |
| **Webpack 4 obsoleto**           | 🟡 Media  | Webpack 4 en mantenimiento, sin nuevas features. Incompatible con plugins modernos (critters) | Planificar migración a Webpack 5 o Vite            |
| **ALLOW_UNFILTERED_UPLOADS**     | 🔴 Alta   | Permite upload de cualquier archivo, riesgo de ejecución código malicioso                     | Cambiar a `false`, whitelist extensiones           |
| **No testing automatizado**      | 🟡 Media  | Sin tests unitarios/integración, riesgo de regresiones                                        | Implementar Jest + PHPUnit                         |
| **Dependencias desactualizadas** | 🟡 Media  | 40+ dependencias NPM, algunas con versiones antiguas                                          | `npm audit fix`, actualización gradual             |
| **No CI/CD**                     | 🟡 Media  | Deploy manual propenso a errores humanos                                                      | Configurar GitHub Actions                          |
| **Secrets hardcodeados**         | 🟢 Baja   | GTM ID público hardcodeado (no es secreto real)                                               | Externalizar a .env por buena práctica             |
| **No error tracking**            | 🟡 Media  | Errores JavaScript/PHP no monitoreados en producción                                          | Integrar Sentry o similar                          |
| **Single point of failure**      | 🟢 Baja   | Arquitectura monolítica WordPress (estándar para este tipo de proyecto)                       | No aplicable, arquitectura adecuada al caso de uso |

### 14.2. Supuestos realizados

**Infraestructura:**

- Servidor web: Apache o Nginx (no especificado en código)
- PHP: Versión 7.4 o superior
- MySQL: Versión compatible con WordPress (5.7+)
- Hosting: Tradicional con acceso FTP/SFTP (no serverless)

**WordPress:**

- Versión WP: 5.x o 6.x (no especificada, asumida por sintaxis PHP moderna)
- Plugins obligatorios: Advanced Custom Fields Pro (uso extensivo de ACF)
- Plugins opcionales: Rank Math SEO (integración en código)

**Deployment:**

- Proceso manual: Build local + FTP/SFTP a servidor
- No hay staging environment automatizado

**Analytics:**

- Google Analytics 4 configurado en GTM (no visible en código del tema)
- Tracking Incubeta deshabilitado por defecto (`INCUBETA_ENABLED: false`)

### 14.3. Limitaciones técnicas

**Arquitectura:**

- **Monolítico:** Tema WordPress tradicional, no headless/JAMstack
- **No escalable horizontalmente:** WordPress estándar no distribuido
- **Single DB:** Un punto de falla, sin replicación (presunción)

**Performance:**

- **Webpack 4 limitations:**
  - No puede usar critters-webpack-plugin (requiere Webpack 5) para critical CSS automático
  - Bundle splitting menos eficiente que Webpack 5
- **Node 14 limitations:**
  - cross-env v7 (versiones superiores incompatibles)
  - ESM modules issues con critical CSS tools

**Compatibilidad:**

- **Browsers:** Configurado para `last 2 versions`, `> 1%`, `supports es6-module` (ver `browserslist` en package.json)
- **IE11:** Explícitamente excluido (`not ie <= 11`)

**Build:**

- **Sin critical CSS automatizado:** Intentos fallidos con `critical` npm package y `critters` por incompatibilidad Webpack 4
- **Source maps condicionales:** Solo generados con flag explícito `npm run prod:map`

### 14.4. Deuda técnica

**Alta prioridad:**

- [ ] Migrar de Node 14 a Node 18/20 LTS
- [ ] Actualizar Webpack 4 a Webpack 5 (breaking changes)
- [ ] Implementar tests automatizados (cobertura 0%)
- [ ] Configurar CI/CD pipeline
- [ ] Revisar y actualizar dependencias con vulnerabilidades (`npm audit`)

**Media prioridad:**

- [ ] Migrar de node-sass (deprecated) a dart-sass
- [ ] Externalizar configuraciones a archivos por ambiente
- [ ] Implementar error tracking (Sentry)
- [ ] Optimizar imágenes (WebP, responsive images automático)
- [ ] Documentar APIs y componentes

**Baja prioridad:**

- [ ] Refactorizar PHP con namespaces y PSR-4
- [ ] Implementar design system documentado (Storybook)
- [ ] Considerar migración a headless WordPress (Next.js + WP REST API)

---

## 15. Cambios recientes

- Noticias: se agregó un tab "Todas las noticias" con enlace al archivo del CPT y se marca activo cuando no se navega por `categoria_novedad` (`content-parts/pages/news/tabs/content-tabs.php`).
- Frontend: se valida existencia de `.nav-tabs` antes de inicializar tabs scrollables (`app/pages/all-careers/index.js`).
- Blog: se agregó el tab "Todos los blogs" con enlace a la página de posts y active_id por contexto; el icono remove solo aparece cuando hay filtro (`content-parts/pages/blog/content-blog.php`).
- SEO: se completó el post dummy en búsquedas con campos requeridos por Rank Math (post_author, post_content, post_date, post_modified) (`inc/wp-blog.php`).

## 16. Glosario

| Término              | Definición                                                                                       |
| -------------------- | ------------------------------------------------------------------------------------------------ |
| **ACF**              | Advanced Custom Fields - Plugin WordPress para campos personalizados en posts/páginas            |
| **BEM**              | Block Element Modifier - Metodología de nomenclatura CSS para mantener código escalable          |
| **BFCache**          | Back/Forward Cache - Caché del navegador para navegación instantánea                             |
| **Bundle**           | Archivo JavaScript/CSS compilado que agrupa múltiples módulos                                    |
| **Code Splitting**   | Técnica de separar código en múltiples bundles cargados bajo demanda                             |
| **Content Hash**     | Hash basado en contenido del archivo para cache busting (`[contenthash:10]`)                     |
| **CPT**              | Custom Post Type - Tipo de contenido personalizado en WordPress                                  |
| **CRM**              | Customer Relationship Management - Sistema de gestión de relaciones con clientes                 |
| **Critical CSS**     | CSS mínimo necesario para renderizar contenido "above the fold" (primera pantalla)               |
| **Deferred Loading** | Carga diferida de recursos no críticos hasta evento específico (interacción usuario)             |
| **Dynamic Import**   | Importación asíncrona de módulos JavaScript con `import()`                                       |
| **EOL**              | End of Life - Fin de soporte oficial de una versión de software                                  |
| **FCP**              | First Contentful Paint - Métrica de performance (primer elemento visible)                        |
| **Forced Reflow**    | Layout recalculation sincrónico que bloquea rendering                                            |
| **GTM**              | Google Tag Manager - Herramienta de gestión de etiquetas de marketing                            |
| **HMR**              | Hot Module Replacement - Reemplazo de módulos en tiempo real sin refresh completo                |
| **Incubeta**         | Empresa de marketing digital, módulo de tracking personalizado en el tema                        |
| **Lazy Loading**     | Carga diferida de imágenes/recursos cuando están próximos a viewport                             |
| **LCP**              | Largest Contentful Paint - Métrica de performance (elemento más grande visible)                  |
| **Polyfill**         | Código que implementa features modernas en navegadores antiguos                                  |
| **PurgeCSS**         | Herramienta que elimina CSS no usado del bundle final                                            |
| **RAF**              | requestAnimationFrame - API para sincronizar actualizaciones visuales con refresh del navegador  |
| **Rewrite**          | Regla de URL rewriting en WordPress para URLs amigables                                          |
| **Safelist**         | Lista blanca de clases CSS que PurgeCSS no debe eliminar                                         |
| **Source Map**       | Archivo `.map` que mapea código compilado a código fuente original                               |
| **Swiper**           | Librería JavaScript para carouseles/sliders táctiles                                             |
| **Taxonomy**         | Sistema de clasificación de contenido en WordPress (categorías, tags, custom)                    |
| **Tree Shaking**     | Eliminación de código no usado en el bundle final (dead code elimination)                        |
| **TTI**              | Time to Interactive - Métrica de performance (tiempo hasta interactividad completa)              |
| **UglifyJS**         | Herramienta de minificación y obfuscación de JavaScript                                          |
| **UTM**              | Urchin Tracking Module - Parámetros URL para tracking de campañas (utm_source, utm_medium, etc.) |
| **Webpack**          | Module bundler que compila y empaqueta assets (JS, CSS, imágenes)                                |
| **Yield to Main**    | Técnica de ceder control al main thread para evitar bloquear UI                                  |

---

**Documento generado:** 8 de diciembre de 2025  
**Versión:** 1.0  
**Autor:** Arquitecto de Software - Análisis automático del repositorio  
**Proyecto:** Universidad Norbert Wiener - Theme WordPress  
**Ubicación:** `/wp-content/themes/unw/IA/context.md`
