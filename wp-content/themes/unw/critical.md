# Critical JS - Bundle Splitting

## Objetivo

Optimizar el JavaScript crítico dividiéndolo en dos bundles separados:

- **critical-home.js**: Código específico para la página de inicio (incluye Swiper)
- **critical-global.js**: Código compartido entre todas las páginas

Esto reduce el JavaScript no utilizado y mejora el PageSpeed Insights.

## Archivos Modificados

### 1. `entrypoints.json`

Se separó el entry point `critical` en dos:

```json
{
  "critical-home": ["./app/critical/home.js"],
  "critical-global": ["./app/critical/global.js"]
}
```

### 2. `webpack.config.js`

- **Línea 1-2**: Configurado `@babel/register` para excluir archivos del transpilado
- **Línea 154**: `publicPath: '/'` configurado para producción
- **Línea 157**: Agregado `chunkFilename` para chunks dinámicos

### 3. `app/critical/home.js`

- Importa `set-public-path.js` primero
- Lazy loading de Swiper usando `import()`
- Solo inicializa componentes si `.hero-swiper` existe en el DOM

### 4. `app/critical/global.js`

- Importa `set-public-path.js` primero
- Contiene código compartido como `propagateUrlParamsToInternalLinks()`
- Se carga en todas las páginas

### 5. `app/critical/swiper.js` (NUEVO)

- Archivo separado con la lógica de inicialización de Swiper
- Permite lazy loading del bundle de Swiper
- Optimizaciones de forced reflow:
  - `init: false` con inicialización manual
  - `observer: false` inicialmente
  - Verificación de `document.hidden`
  - Double `requestAnimationFrame` para delay

### 6. `app/set-public-path.js` (NUEVO)

- Configura dinámicamente `__webpack_public_path__`
- Busca scripts con `critical-` en su nombre
- Extrae la ruta hasta `/build/` para que webpack cargue chunks correctamente

### 7. `inc/functions/include-assets.php`

- **Líneas 175-200**: Detección dinámica de bundles `critical-*`
- Usa `strpos($key, 'critical-') === 0` en lugar de hardcoded cases
- Ignora chunks con key vacía
- Agrega atributos `defer` y `data-no-delay` automáticamente

## Resultados

### Antes

- `critical.js`: ~35 KB (incluía Swiper en todas las páginas)

### Después

- `critical-global.js`: ~10 KB (se carga en todas las páginas)
- `critical-home.js`: ~2 KB inicial + ~25 KB lazy (solo en home)
- **Ahorro**: ~23 KB en páginas que no son home
- **Forced reflow**: Reducido de 52ms → 38ms

## Cómo Funciona

1. PHP detecta automáticamente cualquier bundle que comience con `critical-`
2. Carga `critical-global.js` en todas las páginas con defer
3. Carga `critical-home.js` solo en la página de inicio con defer
4. `set-public-path.js` configura la ruta base para chunks dinámicos
5. Cuando se necesita Swiper, se carga dinámicamente mediante `import()`
6. Los chunks (23.js, 24.js, etc.) se cargan desde la ruta correcta

## Notas Técnicas

- Webpack 4 no soporta nativamente el atributo `defer` en chunks dinámicos
- Los chunks dinámicos se insertan con JavaScript y no bloquean el parsing
- El `defer` es importante solo para scripts en el HTML inicial (ya configurado en PHP)
- `publicPath` debe ser `/` para que PHP construya las URLs completas correctamente

---

## Cambios Adicionales

### 8. `inc/functions/include-rocket.php` (Delay JS Optimization)

**Cambio**: Agregadas exclusiones para scripts de plantillas migradas

```php
// Scripts de plantillas migradas (webflow)
'jquery-custom',
'js-custom',
'webflow-script',
```

**Propósito**: Evitar que el sistema de delay JS retrase scripts críticos de las plantillas que usan Webflow, ya que rompen la funcionalidad de esas páginas.

**Cómo funciona**:

- El filtro `script_loader_tag` verifica cada script antes de aplicar el delay
- Si el handle está en `my_delay_js_exclusions()`, devuelve el tag sin modificar
- Estos 3 scripts se cargan normalmente sin `type="rocketlazyloadscript"`

### 9. `content-parts/content-search-modal.php` (Preservar parámetros URL)

**Cambio**: Formulario de búsqueda preserva todos los parámetros GET

```php
// Preservar todos los parámetros de la URL actual excepto 's' (búsqueda)
foreach ($_GET as $param => $value) {
  if ($param !== 's' && !empty($value)) {
    $sanitized_value = sanitize_text_field(wp_unslash($value));
    echo '<input type="hidden" name="' . esc_attr($param) . '" value="' . esc_attr($sanitized_value) . '" />';
  }
}
```

**Propósito**: Mantener parámetros UTM y otros query params en las búsquedas

**Beneficios**:

- Tracking de campañas se mantiene durante la navegación
- Funciona con cualquier parámetro: `utm_source`, `utm_medium`, `gclid`, `fbclid`, etc.
- No requiere hardcodear lista de parámetros

**Seguridad**:

- `sanitize_text_field()` - elimina caracteres peligrosos
- `wp_unslash()` - remueve slashes automáticos de WordPress
- `esc_attr()` - previene XSS en atributos HTML
- `esc_url()` - sanitiza la URL del action

**Ejemplo**:

- URL original: `http://unw.local/bienestar/?utm_source=abc&utm_campaign=test`
- Al buscar "carreras", se mantienen los parámetros
- Resultado: `http://unw.local/?s=carreras&utm_source=abc&utm_campaign=test`

### 10. `webpack.config.js` - Babel Register

**Cambio**: Comentado `require('@babel/register')`

```javascript
// require('@babel/register')
```

**Razón**: Causaba transpilación innecesaria de archivos de configuración de webpack, generando errores con imports de ES6. No es necesario para este proyecto ya que webpack.config.js usa sintaxis compatible con Node 14.

---

## Optimizaciones Finales

### 11. `inc/functions/preserve-url-params.php` (NUEVO - Función Reutilizable)

**Creación**: Nueva función helper para evitar código duplicado

```php
function preserve_url_params($exclude_params = []) {
  // Parámetros que NUNCA deben preservarse porque alteran el comportamiento de WordPress
  $wordpress_params = ['s', 'p', 'page_id', 'post_type', 'blog_search', 'paged', 'preview', 'preview_id'];

  // Combinar exclusiones
  $all_excludes = array_merge($wordpress_params, $exclude_params);

  foreach ($_GET as $param => $value) {
    if (!in_array($param, $all_excludes) && !empty($value)) {
      $sanitized_value = sanitize_text_field(wp_unslash($value));
      echo '<input type="hidden" name="' . esc_attr($param) . '" value="' . esc_attr($sanitized_value) . '" />';
    }
  }
}
```

**Propósito**: Centralizar la lógica de preservación de parámetros URL en formularios

**Mejoras respecto a la versión anterior**:

- ✅ Excluye automáticamente parámetros de WordPress que causan conflictos
- ✅ Previene que `blog_search=1` y `post_type=post` rompan otras páginas
- ✅ Mantiene solo parámetros seguros (UTM, tracking, custom params)
- ✅ Código DRY - una sola función para todos los formularios

**Uso en formularios**:

```php
// Modal de búsqueda general
preserve_url_params();

// Búsqueda del blog (post_type y blog_search se agregan manualmente después)
preserve_url_params();
```

**Problema resuelto**:

- ❌ Antes: `uwiener.edu.pe/nosotros/?utm_source=abc&blog_search=1&post_type=post` no cargaba
- ✅ Ahora: `uwiener.edu.pe/nosotros/?utm_source=abc` carga correctamente
- ✅ Blog: `uwiener.edu.pe/blog/?utm_source=abc&s=tercio&blog_search=1&post_type=post` funciona bien

### 12. Refactorización de formularios

**Archivos modificados**:

- `content-parts/content-search-modal.php`
- `content-parts/pages/blog/content-search-form.php`

**Cambio**: Reemplazado código duplicado con llamada a `preserve_url_params()`

**Antes** (código duplicado en cada archivo):

```php
foreach ($_GET as $param => $value) {
  if ($param !== 's' && !empty($value)) {
    $sanitized_value = sanitize_text_field(wp_unslash($value));
    echo '<input type="hidden" name="' . esc_attr($param) . '" value="' . esc_attr($sanitized_value) . '" />';
  }
}
```

**Ahora** (una línea):

```php
<?php preserve_url_params(); ?>
```

**Beneficios**:

- Código más limpio y mantenible
- Cambios futuros en un solo lugar
- Menos probabilidad de bugs por código duplicado
- Fácil de usar en nuevos formularios

---

## Resumen de Cambios

### Archivos Creados

1. ✅ `app/critical/swiper.js` - Lazy loading de Swiper
2. ✅ `app/set-public-path.js` - Configuración dinámica de publicPath
3. ✅ `critical.md` - Documentación de cambios
4. ✅ `inc/functions/preserve-url-params.php` - Helper para formularios

### Archivos Modificados

1. ✅ `entrypoints.json` - Separación de bundles critical
2. ✅ `webpack.config.js` - Babel register comentado
3. ✅ `app/critical/home.js` - Lazy loading
4. ✅ `app/critical/global.js` - Código global
5. ✅ `inc/functions/include-assets.php` - Detección dinámica
6. ✅ `inc/functions/include-rocket.php` - Exclusiones webflow
7. ✅ `content-parts/content-search-modal.php` - Preservar params
8. ✅ `content-parts/pages/blog/content-search-form.php` - Preservar params
9. ✅ `functions.php` - Require preserve-url-params

### Mejoras de Performance

- 📉 JavaScript reducido ~23 KB en páginas no-home
- 📉 Forced reflow reducido 52ms → 38ms
- ⚡ Lazy loading de Swiper solo cuando se necesita
- 🚀 Scripts webflow sin delay para mejor UX

### Mejoras de Código

- 🔒 Sanitización completa de parámetros URL
- ♻️ Código DRY con función reutilizable
- 📝 Documentación completa de cambios
- 🎯 Detección dinámica de bundles critical
