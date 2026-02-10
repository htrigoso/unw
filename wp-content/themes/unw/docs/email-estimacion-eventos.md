**Asunto:** Estimación - Nueva funcionalidad formulario eventos

Hola,

Te envío la estimación para implementar el filtrado de carreras por modalidad en el formulario de eventos.

## ¿Qué se va a hacer?

**Admin (al crear evento):**

- Elegir modalidad: Presencial o Virtual (por defecto Presencial)
- Seleccionar carreras filtradas por la modalidad elegida
- Todas las carreras vienen marcadas por defecto

**Usuario (en el formulario):**

- Si el admin eligió 1 sola carrera → se envía oculta, no aparece selector
- Si eligió varias carreras → aparece dropdown para que el usuario elija una
- Las carreras mostradas corresponden a la modalidad del evento

## Archivos a modificar

1. `inc/wp-custom-acf.php` - Campos ACF de modalidad y carreras
2. `content-parts/pages/event-detail/content-more-info-form-event.php` - Lógica del formulario
3. `inc/functions/careers-functions.php` - Funciones auxiliares
4. JS para filtrado dinámico en admin

## Estimación

| Fase                  | Horas   |
| --------------------- | ------- |
| Backend ACF           | 3.5h    |
| Frontend formulario   | 4.5h    |
| Integración y testing | 2.5h    |
| QA y ajustes          | 1.5h    |
| **TOTAL**             | **12h** |

**Tiempo estimado: 12 horas (1.5 días)**

## Consideraciones

- Si eventos antiguos necesitan migración de datos: +1-2h
- Requiere validar que las carreras tengan campo de modalidad
- No incluye cambios de diseño visual

Cualquier duda, me avisas.

Saludos,  
Héctor
