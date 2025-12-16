# Control de Incubeta Analytics

## Configuración

Para habilitar o deshabilitar el tracking de Incubeta, usa la variable de entorno `ENABLE_INCUBETA`.

### Desarrollo

```bash
# Habilitar Incubeta
ENABLE_INCUBETA=true npm run dev

# Deshabilitar Incubeta (por defecto)
npm run dev
```

### Producción

```bash
# Habilitar Incubeta
ENABLE_INCUBETA=true npm run prod

# Deshabilitar Incubeta (por defecto)
npm run prod
```

### Alternativa: Archivo .env

Crea un archivo `.env` en la raíz del tema:

```env
ENABLE_INCUBETA=true
```

Luego compila normalmente:

```bash
npm run dev
# o
npm run prod
```

## Verificación

Cuando Incubeta está deshabilitado, verás en la consola:

```
🔕 Incubeta tracking deshabilitado
```

Cuando está habilitado, verás:

```
📊 Incubeta event: form_submit
✅ view_item_list enviado
```

## Archivos afectados

Todos los archivos en `app/utils/incubeta/` están condicionados a esta variable:

- `beginEventRegistration.js`
- `carrouselClick.js`
- `carrouselSwipe.js`
- `carrouselView.js`
- `contactClick.js`
- `errorMessage.js`
- `faqClick.js`
- `footerClick.js`
- `selectContent.js`
- `selectEvent.js`
- `selectItem.js`
- `selectProgramType.js`
- `shareClick.js`
- `viewContent.js`
- `viewEventList.js`
- `viewItemList.js`
- `viewProgramType.js`
