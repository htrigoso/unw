# Reporte de Cambios - Propagación de Parámetros UTM

**Fecha:** 19 de diciembre de 2025

## Resumen

Optimización del sistema de propagación de parámetros UTM a enlaces internos y validación de formularios de búsqueda.

---

## Archivos Modificados

### 1. `app/critical/global.js`

**Cambio:** Agregado marcado de estado a enlaces procesados

**Modificación:**

- Se agregó `link.dataset.paramsProcessed = 'true'` después de procesar cada enlace
- Esto permite identificar visualmente en el DOM qué enlaces ya tienen los parámetros UTM asignados

**Propósito:**

- Facilitar debugging: Inspeccionar en DevTools qué enlaces tienen `data-params-processed="true"`
- Preparación para futuras mejoras (event delegation, MutationObserver, etc.)
- Evitar procesamiento duplicado en caso de implementar lógica adicional

**Líneas afectadas:** ~107 (después de asignar el href procesado)

---

### 2. `content-parts/content-search-modal.php`

**Cambio:** Validación de búsqueda vacía

**Modificación:**

```php
<form action="..." method="get" onsubmit="return this.querySelector('[name=s]').value.trim() !== ''">
```

**Propósito:**

- Evitar que el usuario envíe el formulario si el campo de búsqueda está vacío
- Prevenir navegaciones innecesarias sin término de búsqueda
- Mejorar UX al no permitir búsquedas sin contenido

**Líneas afectadas:** Línea 29 (atributo del form)

---

### 3. `content-parts/pages/search/content-search-section.php`

**Cambio:** Validación de búsqueda vacía

**Modificación:**

```php
<form class="search-section__form" onsubmit="return this.querySelector('[name=s]').value.trim() !== ''">
```

**Propósito:**

- Misma lógica que el modal de búsqueda
- Consistencia en la validación de formularios de búsqueda en toda la aplicación
- Prevenir búsquedas vacías desde la página de resultados

**Líneas afectadas:** Línea 3 (atributo del form)

---

## Notas Importantes para Producción

### ⚠️ Prerequisitos

1. Verificar que todas las URLs de menús en producción usen el dominio correcto (mismo base domain)
2. Confirmar que `window.appConfigUnw?.preserveUrlParams` está habilitado en producción

### 🧪 Testing Requerido

1. **Propagación de UTMs:**
   - Acceder con parámetros: `/?utm_source=test&utm_campaign=ejemplo`
   - Verificar que todos los enlaces internos tengan `data-params-processed="true"` en el DOM
   - Confirmar que los parámetros se propagan correctamente al hacer clic
2. **Validación de búsquedas:**
   - Modal de búsqueda: Intentar buscar con campo vacío (no debe enviar)
   - Página de búsqueda: Intentar buscar con campo vacío (no debe enviar)
   - Verificar que búsquedas válidas funcionen correctamente

### 📦 Archivos a Desplegar

```
app/critical/global.js
content-parts/content-search-modal.php
content-parts/pages/search/content-search-section.php
```

### 🔄 Comandos de Build

```bash
npm run prod
```

---

## Contexto Técnico

### Función `propagateUrlParamsToInternalLinks()`

- Lee parámetros de la URL actual
- Filtra parámetros excluidos (definidos en `EXCLUDE_URL_PARAMS`)
- Identifica enlaces internos (mismo `baseDomain`)
- Agrega parámetros a enlaces que no los tienen
- Codifica con RFC 3986 usando `getRfc3986SearchFromUrl()`
- **NUEVO:** Marca enlaces con `data-params-processed="true"`

### Validación de Formularios

- Usa `onsubmit` inline para máxima compatibilidad
- Verifica que el campo `[name=s]` no esté vacío con `trim()`
- Retorna `false` para cancelar el submit si está vacío

---

## Próximas Mejoras (Opcional)

Si en el futuro se necesita capturar enlaces que se renderizan dinámicamente:

- Implementar `MutationObserver` para detectar nuevos nodos
- Agregar event delegation con `mouseover`/`click` como fallback
- Verificar `data-params-processed` antes de procesar

---

**Responsable:** AI Assistant  
**Revisado por:** [Pendiente]  
**Aprobado para producción:** [Pendiente]
