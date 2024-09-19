<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Concesionario de Automóviles


## Tecnologías Utilizadas

- ![Laravel](https://img.shields.io/badge/Laravel-10-FF2D20?logo=laravel&logoColor=white)
- ![Livewire](https://img.shields.io/badge/Livewire-3-4E56A6?logo=laravel&logoColor=white)
- ![Node](https://img.shields.io/badge/Node.js-20.11.0-339933?logo=node.js&logoColor=white)
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
### Configuracion de la Base de datos en el archivo .env

debera ubicar las siguientes lineas y agregar el usuario y la clave de la Base de datos Postgres donde previamente debera haber creado una base de datos de nombre 'concesionario'
```sh
DB_DATABASE=concesionario
DB_USERNAME=
DB_PASSWORD=
```
    

5. Generar la clave de la aplicación:
    ```sh
    php artisan key:generate
    ```

6. Configurar y crear una base de datos según el `.env`.

7. Ejecutar las migraciones y seeders:
    ```sh
    php artisan migrate --seed
    ```

8. Iniciar el servidor:
    ```sh
    php artisan serve
    ```

## Datos Iniciales del Proyecto

Si ejecutaste el comando:
```sh
php artisan migrate --seed
```
Contarás con toda la información necesaria para loguearte como administrador, con el siguiente usuario:

- **Username:** `admin`
- **Clave:** `password`

### Uso de Factories

Adicionalmente, se puede hacer uso de los factories según convenga. Para esto, abre Tinker desde la terminal:
```sh
php artisan tinker
```

Una vez dentro, puedes ejecutar el factory que necesites (en caso de no existir uno, por favor créalo). Por ejemplo:
```php
Proveedor::factory()->create()
```

Este comando genera un proveedor, sus datos bancarios y su contacto (este puede o no tener un usuario en el sistema).

## P.S.

Ten en cuenta las prácticas realizadas en el proyecto, el cual se basa enteramente en la arquitectura de componentes de Livewire, y la permisología de Laravel Spatie. Conocer dichas tecnologías es **OBLIGATORIO**. A su vez, es importante mantener la estructura de carpetas y el nombramiento de archivos.

## Documentación

- [Laravel](https://laravel.com/docs/10.x)
- [Livewire](https://livewire.laravel.com/docs/quickstart)
- [Node.js](https://nodejs.org/en/docs/)
- [PHP](https://www.php.net/docs.php)
- [Spatie Laravel Permission](https://spatie.be/docs/laravel-permission/v6/introduction)

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white">
  </a>
  <a href="https://livewire.laravel.com/" target="_blank">
    <img src="https://img.shields.io/badge/Livewire-4E56A6?style=for-the-badge&logo=laravel&logoColor=white">
  </a>
  <a href="https://nodejs.org" target="_blank">
    <img src="https://img.shields.io/badge/Node.js-339933?style=for-the-badge&logo=node.js&logoColor=white">
  </a>
  <a href="https://www.php.net" target="_blank">
    <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white">
  </a>
  <a href="https://spatie.be/" target="_blank">
    <img src="https://img.shields.io/badge/Spatie-4A4A4A?style=for-the-badge&logo=spatie&logoColor=white" />
  </a>
</p>
