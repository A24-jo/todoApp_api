<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

<p align="center">
    <a href="https://github.com/laravel/framework/actions">
        <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
    </a>
</p>

## Requisitos

- PHP >= 8.1
- Composer
- Laravel >= 10.10
- GuzzleHTTP >= 7.2
- Laravel Sanctum >= 3.3
- Laravel Tinker >= 2.8

## Instalación

1. **Clona el repositorio:**

    ```bash
    git clone https://url-del-repositorio.git
    ```

2. **Instala las dependencias usando Composer:**

    ```bash
    composer install
    ```

3. **Copia el archivo de entorno y configúralo según tus necesidades:**

    ```bash
    cp .env.example .env
    ```

4. **Genera la clave de la aplicación:**

    ```bash
    php artisan key:generate
    ```

5. **Ejecuta las migraciones para crear la estructura de la base de datos:**

    ```bash
    php artisan migrate
    ```

6. **(Opcional) Ejecuta los seeders para poblar la base de datos con datos de prueba:**

    ```bash
    php artisan db:seed
    ```

7. **Inicia el servidor de desarrollo:**

    ```bash
    php artisan serve
    ```

### Endpoints

- **GET /api/tasks**: Obtiene una lista de tareas.
- **POST /api/tasks**: Crea una nueva tarea.
- **PUT /api/tasks/{id}**: Actualiza una tarea existente.
- **DELETE /api/tasks/{id}**: Elimina una tarea existente.
