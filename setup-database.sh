#!/bin/bash

# Script para ejecutar manualmente el archivo SQL en la base de datos Docker
# UNW WordPress Database Setup Script

set -e  # Exit on any error

# Colores para output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Función para imprimir mensajes con colores
print_message() {
    echo -e "${BLUE}[INFO]${NC} $1"
}

print_success() {
    echo -e "${GREEN}[SUCCESS]${NC} $1"
}

print_warning() {
    echo -e "${YELLOW}[WARNING]${NC} $1"
}

print_error() {
    echo -e "${RED}[ERROR]${NC} $1"
}

# Variables de configuración
SQL_FILE="unw.09.07.2025.sql"
CONTAINER_NAME="unw-db"
DB_NAME="unw"
DB_USER="root"
DB_PASSWORD="rootpass"
COMPOSE_FILE="docker-compose-seek.yml"

print_message "=== UNW WordPress Database Setup Script ==="
print_message "Este script ejecutará manualmente el archivo SQL en la base de datos Docker"

# Verificar que el archivo SQL existe
if [ ! -f "$SQL_FILE" ]; then
    print_error "El archivo SQL '$SQL_FILE' no existe en el directorio actual"
    exit 1
fi

print_success "Archivo SQL encontrado: $SQL_FILE"

# Verificar que Docker está ejecutándose
if ! docker info > /dev/null 2>&1; then
    print_error "Docker no está ejecutándose. Por favor, inicia Docker primero."
    exit 1
fi

print_success "Docker está ejecutándose"

# Verificar que el contenedor de la base de datos existe
if ! docker ps -a --format "table {{.Names}}" | grep -q "^$CONTAINER_NAME$"; then
    print_warning "El contenedor '$CONTAINER_NAME' no existe. Intentando levantar los servicios..."
    
    if [ ! -f "$COMPOSE_FILE" ]; then
        print_error "El archivo '$COMPOSE_FILE' no existe"
        exit 1
    fi
    
    print_message "Levantando servicios con docker-compose..."
    docker-compose -f "$COMPOSE_FILE" up -d db
    
    # Esperar a que el contenedor esté listo
    print_message "Esperando a que la base de datos esté lista..."
    sleep 10
fi

# Verificar que el contenedor está ejecutándose
if ! docker ps --format "table {{.Names}}" | grep -q "^$CONTAINER_NAME$"; then
    print_warning "El contenedor '$CONTAINER_NAME' no está ejecutándose. Iniciándolo..."
    docker-compose -f "$COMPOSE_FILE" up -d db
    sleep 10
fi

print_success "Contenedor de base de datos está ejecutándose"

# Verificar conexión a la base de datos
print_message "Verificando conexión a la base de datos..."
if ! docker exec "$CONTAINER_NAME" mysql -u "$DB_USER" -p"$DB_PASSWORD" -e "SELECT 1;" > /dev/null 2>&1; then
    print_error "No se puede conectar a la base de datos. Verifica las credenciales."
    exit 1
fi

print_success "Conexión a la base de datos exitosa"

# Verificar si la base de datos ya existe y tiene datos
print_message "Verificando si la base de datos ya tiene datos..."
TABLE_COUNT=$(docker exec "$CONTAINER_NAME" mysql -u "$DB_USER" -p"$DB_PASSWORD" -e "USE $DB_NAME; SHOW TABLES;" 2>/dev/null | wc -l)

if [ "$TABLE_COUNT" -gt 1 ]; then
    print_warning "La base de datos '$DB_NAME' ya contiene tablas."
    read -p "¿Deseas continuar y sobrescribir los datos existentes? (y/N): " -n 1 -r
    echo
    if [[ ! $REPLY =~ ^[Yy]$ ]]; then
        print_message "Operación cancelada por el usuario"
        exit 0
    fi
    
    print_message "Eliminando base de datos existente..."
    docker exec "$CONTAINER_NAME" mysql -u "$DB_USER" -p"$DB_PASSWORD" -e "DROP DATABASE IF EXISTS $DB_NAME;"
    print_message "Creando nueva base de datos..."
    docker exec "$CONTAINER_NAME" mysql -u "$DB_USER" -p"$DB_PASSWORD" -e "CREATE DATABASE $DB_NAME;"
fi

# Ejecutar el archivo SQL
print_message "Ejecutando archivo SQL..."
if docker exec -i "$CONTAINER_NAME" mysql -u "$DB_USER" -p"$DB_PASSWORD" "$DB_NAME" < "$SQL_FILE"; then
    print_success "Archivo SQL ejecutado exitosamente"
else
    print_error "Error al ejecutar el archivo SQL"
    exit 1
fi

# Verificar que las tablas se crearon correctamente
print_message "Verificando que las tablas se crearon correctamente..."
TABLE_COUNT=$(docker exec "$CONTAINER_NAME" mysql -u "$DB_USER" -p"$DB_PASSWORD" -e "USE $DB_NAME; SHOW TABLES;" 2>/dev/null | wc -l)

if [ "$TABLE_COUNT" -gt 1 ]; then
    print_success "Base de datos configurada correctamente con $((TABLE_COUNT - 1)) tablas"
else
    print_warning "No se detectaron tablas en la base de datos"
fi

# Mostrar información de conexión
print_message "=== Información de conexión ==="
print_message "Host: localhost"
print_message "Puerto: 3306"
print_message "Base de datos: $DB_NAME"
print_message "Usuario: $DB_USER"
print_message "Contraseña: $DB_PASSWORD"

print_success "=== Configuración de base de datos completada ==="
print_message "Ahora puedes iniciar WordPress con: docker-compose -f $COMPOSE_FILE up -d" 