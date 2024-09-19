<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Concesionario de Automóviles


## Tecnologías Utilizadas

- ![Laravel](https://img.shields.io/badge/Laravel-10-FF2D20?logo=laravel&logoColor=white)
- ![PHP](https://img.shields.io/badge/PHP-8.2.15-777BB4?logo=php&logoColor=white)

## Instrucciones para Levantar el Proyecto

1. Clonar el repositorio:
    ```sh
    git clone https://github.com/edgarvlz/concesionario.git
    ```

2. Entrar a la carpeta del proyecto:
    ```sh
    cd concesionario
    ```

3. Instalar las dependencias:
    ```sh
    composer install && npm install
    ```

4. Copiar las variables de entorno:
    ```sh
    cp .env.example .env
    ```
### Configuración de la Base de datos en el archivo .env

Deberá ubicar las siguientes líneas y agregar el usuario y la clave de la Base de datos Postgres donde previamente deberá haber creado una base de datos de nombre 'concesionario'
```sh
DB_DATABASE=concesionario
DB_USERNAME=
DB_PASSWORD=
```
    

5. Generar la clave de la aplicación:
    ```sh
    php artisan key:generate
    ```

6. Crear enlace simbólico a la carpeta storage.
    ```sh
    php artisan storage:link
    ```
7. Ejecutar las migraciones y seeders:
    ```sh
    php artisan migrate --seed
    ```

8. Iniciar el servidor:
    ```sh
    npm run dev
    ```
    
    ```sh
    php artisan serve
    ```
## Datos Iniciales del Proyecto

Si ejecutaste el comando:
```sh
php artisan migrate --seed
```
Contarás con toda la información necesaria para loguearte con los siguientes usuarios:

- **Correo:** `admin@demo.com`
- **Clave:** `password123`

- **Correo:** `jane@demo.com`
- **Clave:** `password123`

- **Correo:** `sam@demo.com`
- **Clave:** `password123`

Donde el usuario sam@demo.com, todos los usuarios nuevos que se registren no contaran con los permisos necesarios  para eliminar registros 



## Documentación

- [Laravel](https://laravel.com/docs/10.x)
- [PHP](https://www.php.net/docs.php)

