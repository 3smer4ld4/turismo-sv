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

**1. Clonar el repositorio:**
```
git clone [https://github.com/3smer4ld4/turismo-sv.git]
cd turismo-sv
```

**2. Instalar las dependencias:**

`composer install`

**3. Crear el archivo de configuración local .env en Windows PowerShell:**

Copy-Item .env.example .env

**4. Generar la clave de la aplicación:**

`php artisan key:generate`

**5. Verificar que existan los archivos de datos:**

storage/app/data/destinos.json

storage/app/data/contactos.json

**6. El archivo contactos.json debe contener inicialmente un arreglo JSON vacío:**

[]

**7. Iniciar el servidor de desarrollo:**

`php artisan serve`

**8. Abrir la dirección indicada por Laravel, normalmente:**

`http://127.0.0.1:8000`
