#!/bin/bash

echo "=== Configurando permisos para WordPress en Docker ==="

# Obtener UID y GID actuales
CURRENT_UID=$(id -u)
CURRENT_GID=$(id -g)

echo "UID actual: $CURRENT_UID (debe ser 1001)"
echo "GID actual: $CURRENT_GID (debe ser 1001)"

if [ "$CURRENT_UID" != "1001" ]; then
    echo "ADVERTENCIA: Tu UID no es 1001. Verifica el docker-compose.yml"
fi

# Cambiar propietario de todos los archivos al usuario actual
echo "Cambiando propietario de archivos a $CURRENT_UID:$CURRENT_GID..."
sudo chown -R $CURRENT_UID:$CURRENT_GID .

# Permisos básicos para WordPress
echo "Configurando permisos básicos..."
find . -type d -exec chmod 755 {} \;
find . -type f -exec chmod 644 {} \;

# Permisos específicos para directorios de WordPress
echo "Configurando permisos de wp-content..."
chmod -R 775 wp-content/ 2>/dev/null || echo "wp-content no existe aún"

# Crear directorio uploads si no existe
mkdir -p wp-content/uploads
chmod -R 775 wp-content/uploads/

# Permisos especiales para archivos de configuración
chmod 600 wp-config.php 2>/dev/null || echo "wp-config.php no encontrado"
chmod +x *.sh 2>/dev/null || echo "No hay scripts .sh para hacer ejecutables"

echo "=== Permisos configurados correctamente ==="
echo ""
echo "Ahora puedes ejecutar:"
echo "docker-compose down"
echo "docker-compose up -d"
echo ""
echo "El contenedor usará UID:GID = $CURRENT_UID:$CURRENT_GID"