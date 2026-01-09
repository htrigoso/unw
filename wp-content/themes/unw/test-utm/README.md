# 🧪 Tests de Concurrencia UTM

Herramientas para simular 500-5000 usuarios simultáneos entrando a la misma URL de campaña.

---

## 📁 Archivos

| Archivo           | Herramienta | Usuarios | Descripción                             |
| ----------------- | ----------- | -------- | --------------------------------------- |
| `load-test-k6.js` | **k6**      | 500      | ⭐ Test de carga con Optimistic Locking |
| `verify-db.php`   | **PHP**     | -        | Verificación de duplicados en DB        |

---

## 🚀 Ejecutar Test de Carga

### Test con k6 (500 usuarios simultáneos)

```bash
# Instalar k6
brew install k6

# Ejecutar test
cd test-utm/
k6 run load-test-k6.js
```

**Qué prueba:**

- ✅ 500 usuarios entrando simultáneamente a la misma URL
- ✅ Verifica que todos obtengan el mismo código UTM
- ✅ Detecta si se generan duplicados
- ✅ Métricas de rendimiento (tiempo de respuesta, errores)

### Verificar Base de Datos

```bash
cd test-utm/
php verify-db.php
```

**Qué verifica:**

- ✅ Códigos UTM en la tabla auxiliar
- ✅ Posts creados en wp_posts
- ✅ Detección de duplicados
- ✅ Estadísticas generales

---

## 🎯 Configurar URL de Campaña

Edita la URL en `load-test-k6.js`:

```javascript
// load-test-k6.js línea 36
const CAMPAIGN_URL = "http://unw.local/?utm_source=facebook_ads&utm_medium=paid&utm_campaign=tu-campania&utm_term=termino&utm_content=contenido";
```

---

## 📊 Resultados Esperados

**Test exitoso:**

- ✅ 500 usuarios reciben respuesta
- ✅ Todos obtienen el mismo código (ej: UNWP00004)
- ✅ 1 solo registro en wp_posts
- ✅ 0 duplicados

**Métricas k6:**

```
✓ status is 200
✓ response has content
✓ response time < 5s
```

**Verificación DB:**

```bash
php verify-db.php
```

Debe mostrar:

- 1 registro en tabla auxiliar
- 1 post en wp_posts
- 0 duplicados detectados

---

## �️ Arquitectura de Prevención de Duplicados

### Optimistic Locking Pattern

```
Usuario 1, 2, 3... 500 → Todos entran simultáneamente
                          ↓
                    Pre-Check rápido
                          ↓
              INSERT IGNORE (solo 1 gana)
                          ↓
           Ganador: crea wp_post real
           Perdedores: obtienen el código existente
                          ↓
               Todos reciben UNWP00004
```

**Capa 1:** Pre-check en `wp_posts` (rápido, sin locks)  
**Capa 2:** Pre-check en tabla auxiliar  
**Capa 3:** `INSERT IGNORE` con UNIQUE INDEX (lock distribuido)  
**Capa 4:** Creación de post (solo el ganador)  
**Capa 5:** Retry logic 3 intentos x 50ms

### Tabla Auxiliar

```sql
CREATE TABLE wpunw_utm_unique_temp (
  id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  utm_url text NOT NULL,
  code_format varchar(20) NOT NULL,
  post_id bigint(20) unsigned NOT NULL DEFAULT 0,
  created_at datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (id),
  UNIQUE KEY unique_url_format (utm_url(500), code_format)
);
```

---

## 📝 Notas

- Test configurado para **500 usuarios** (límite del servidor local)
- En producción soporta **miles de usuarios simultáneos**
- El sistema **NO pierde datos** - todos obtienen respuesta
- Base de datos garantiza **cero duplicados** con UNIQUE INDEX
- Los resultados se muestran al finalizar cada test

---

## 🐛 Troubleshooting

**Error: "Connection reset by peer"**

- Reduce el número de usuarios concurrentes
- Aumenta el timeout
- Verifica límites del sistema operativo

**Error: "No se encontró código UTM"**

- Verifica que la URL sea correcta
- Confirma que el código aparece en el HTML
- Revisa que el patrón de búsqueda sea correcto

**Comandos útiles:**

```bash
# Ver procesos de test activos
ps aux | grep -E "k6|locust|wrk|php"

# Limpiar logs antiguos
rm -f test/ab_test_*.log

# Ver tabla auxiliar en MySQL
echo "SELECT COUNT(*) FROM wpunw_utm_unique_temp;" | \
  mysql -u root --socket="/path/to/mysql.sock" local
```

test
