# Reporte de cambios

- **Fecha:** 2026-03-19
- **Rama:** `feature/integration-static`
- **Estado analizado:** cambios locales no committeados (`git diff`)
- **Impacto general:** 10 archivos modificados, **98 inserciones** y **21 eliminaciones**

## Resumen por área

1. **Landing / Formularios CRM (Zoho + UTM):**
   - Se reforzó la integración de formularios en secciones de landing (hero + bloque de formulario).
   - Se agregaron parámetros para UTMs, carreras, sedes, departamentos y validación de DNI.
   - Se incluyó lógica para ocultar formulario según configuración (`hide_form_landing`).

2. **Estabilidad en AJAX / SVG en WordPress:**
   - Se añadieron hooks para limpiar el output buffer en peticiones AJAX y evitar respuestas JSON contaminadas.
   - Se agregó una validación defensiva en manejo de metadatos de adjuntos SVG para evitar errores al eliminar adjuntos.

3. **Ajustes de UI/UX en frontend:**
   - Se redujeron espaciados en mega menú desktop.
   - Se compactó el layout del detalle de blog y se dejó visible el aside de populares (incluyendo desktop por regla activa).

4. **Correcciones puntuales de plantillas/campos:**
   - Cambio de claves ACF de `comite` a `comite_group` en tabs de carreras.
   - Se ocultó el `book_link` en template de landing.
   - Limpieza de texto residual (`sa`) en template de precios.
   - Algunos cambios menores son de formato de fin de archivo (newline).

## Detalle por archivo

### 1) `content-parts/pages/landing/sections/content-form.php`
- Se pasó de una llamada básica del formulario a una integración más completa con CRM.
- Nuevos datos pasados al partial `more-info-form`:
  - `form_action` (endpoint Zoho)
  - `utms`
  - `careers`
  - `list_departaments`
  - `list_campus`
  - `hide_dni`
  - `validation_dni`
- Se condicionó el render con `if(!$hide_form_landing)`.

### 2) `content-parts/pages/landing/sections/content-hero.php`
- Se replicó el mismo enfoque CRM del bloque de formulario para el formulario del hero desktop.
- Se condicionó el formulario del hero con `hide_form_landing`.
- Se agregó el endpoint Zoho y payload adicional (UTM, carreras, sede, DNI, etc.).

### 3) `inc/wp-settings.php`
- Nuevo hook en `admin_init` para iniciar buffer en contexto AJAX (`clean_ajax_response_buffer`).
- Mejora en `skip_crop_for_svg`:
  - Retorno temprano cuando el adjunto no existe o está en estado inválido.
- Nuevo hook `wp_ajax_delete-post` (`clean_buffer_before_ajax_delete`) para limpiar buffers antes de responder JSON.

### 4) `content-parts/pages/careers/tabs/content-tabs.php`
- Ajuste de lectura de campo ACF:
  - `comite` -> `comite_group`
- Ajuste en el argumento enviado al partial de comité:
  - `$malla_curricular['comite']` -> `$malla_curricular['comite_group']`

### 5) `templates/template-landing.php`
- Cambio de filtro final:
  - `show_book_link` de `__return_true` a `__return_false`.

### 6) `styles/layout/mega-menu-desktop.scss`
- Reducción de espaciados:
  - `padding` de links de submenú: `6` -> `2.2`
  - `padding-top` del submenú principal: `15` -> `7`

### 7) `styles/pages/blog-detail/blog-detail.scss`
- Ajuste fuerte del `gap` principal: `52` -> `10`.
- Eliminación de reglas `display: none/block` en `.blog-detail__aside-popular` (queda visible por default, manteniendo `margin-top` en desktop).

### 8) `templates/template-precios-carreras-universitarias.php`
- Corrección de markup: eliminación de texto accidental `sa` en `<div class="main_page">`.

### 9) `content-parts/common/content-more-info-form.php`
### 10) `functions.php`
- Cambios de formato (fin de archivo sin newline), sin variación funcional observable en el diff.

## Riesgos y puntos a validar

1. **Dependencias no visibles en diff:** en `content-form.php` y `content-hero.php` se usa `$crm_carriers` sin declararse en esos archivos; validar que llegue por contexto global/template.
2. **Endpoint Zoho hardcodeado:** confirmar si debe parametrizarse por ambiente.
3. **Visibilidad del aside en blog:** al remover `display: none`, revisar comportamiento en mobile.
4. **Campos ACF renombrados:** confirmar que `comite_group` existe y está poblado en todos los contenidos.

## Comandos base usados para este reporte

- `git status --short`
- `git diff --name-only`
- `git diff --stat`
- `git diff --numstat`
- `git diff -- <archivo>` (por cada archivo modificado)
