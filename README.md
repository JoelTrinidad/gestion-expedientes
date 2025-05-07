# Gestión de expedientes

Este proyecto es una aplicación web que permite gestionar los expedientes de un cliente. Es un proyecto tipo CRUD (Crear, Leer, Actualizar y Borrar) que incluye un sistema de autenticación y autorización.

## Tecnologías utilizadas

-   PHP
-   Laravel
-   Tailwind CSS
-   PostgreSQL
-   Docker

## Instalación

1. Copiar el archivo de configuración de la base de datos de ejemplo:

```bash
cp .env.example .env
```

2. Generar la llave de la aplicación con el siguiente comando:

```bash
php artisan key:generate
```

3. Configurar la base de datos en el archivo `.env`:

```bash
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=postgres
DB_USERNAME=postgres
DB_PASSWORD=postgres
```

4. Crear el contenedor de base de datos:

```bash
docker compose up -d
```

5. Instalar las dependencias de Laravel:

```bash
composer install
```

6. Intalar dependencias de node:

```bash
npm install
# o
yarn
```

7. Crear la base de datos y la tabla de esquema con seeders:

```bash
php artisan migrate --seed
```

## Uso

Para iniciar el servidor de desarrollo, ejecutar:

```bash
php artisan serve
```

Tambien es necesario iniciar el servidor de desarrollo de node:

```bash
npm run dev
# o
yarn dev
```

Luego, acceder a `http://localhost:8000` en el navegador.
