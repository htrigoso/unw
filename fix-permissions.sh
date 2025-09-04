#!/bin/bash

# Script para arreglar permisos de WordPress
echo "Configurando permisos para WordPress..."

# Cambiar el propietario de todos los archivos al usuario 1000:1000
sudo chown -R 1000:1000 .

# Configurar permisos para directorios (755)
find . -type d -exec chmod 755 {} \;

# Configurar permisos para archivos (644)
find . -type f -exec chmod 644 {} \;

# Configurar permisos especiales para wp-config.php (600)
if [ -f "wp-config.php" ]; then
    chmod 600 wp-config.php
fi

# Configurar permisos para directorios de WordPress que necesitan escritura
if [ -d "wp-content" ]; then
    chmod -R 755 wp-content/
    find wp-content/ -type d -exec chmod 755 {} \;
    find wp-content/ -type f -exec chmod 644 {} \;
fi

# Configurar permisos para uploads (si existe)
if [ -d "wp-content/uploads" ]; then
    chmod -R 755 wp-content/uploads/
fi

# Configurar permisos para plugins (si existe)
if [ -d "wp-content/plugins" ]; then
    chmod -R 755 wp-content/plugins/
fi

# Configurar permisos para themes (si existe)
if [ -d "wp-content/themes" ]; then
    chmod -R 755 wp-content/themes/
fi

echo "Permisos configurados correctamente!"
echo "Usuario propietario: 1000:1000"
echo "Directorio: 755"
echo "Archivos: 644"
echo "wp-config.php: 600"
