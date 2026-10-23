# Rutas de El Salvador
Aplicacion web desarrollada con laravel, que permite explorar destinos turisticos, consultar informacion general sobre los lugares, enviar mensajes mediante formulario de contacto.

## Funciones:
- Catalogo de destinos
- Detalle de destinos
- Formulario de contactos
- Almacenamiento de mensajes enviados

## Tecnologías usadas:
- php
- Laravel
- HTML5
- CSS3
- JSON
- Git y GitHub

## Requisitos para ejecución:
- php compatible con la version de laravel usada
- Composer
- Git

## Pasos:

1.- Clonar el repositorio:

git clone URL_DE_TU_REPOSITORIO
cd turismo-sv

Instalar las dependencias:

composer install

Crear el archivo de configuración local .env en Windows PowerShell:

Copy-Item .env.example .env

Generar la clave de la aplicación:

php artisan key:generate

Verificar que existan los archivos de datos:

storage/app/data/destinos.json

storage/app/data/contactos.json

El archivo contactos.json debe contener inicialmente un arreglo JSON vacío:

[]

Iniciar el servidor de desarrollo:

php artisan serve

Abrir la dirección indicada por Laravel, normalmente:

http://127.0.0.1:8000