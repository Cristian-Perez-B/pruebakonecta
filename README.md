<p align="center"><a href="https://laravel.com" target="\_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

- Laravel version: 10.10
- MySql version: 7.4

Aplicación de gestión de Categorías, Productos y Ventas

Esta aplicación crea categorías, productos y realiza ventas, realiza descuento del stock al realizar una venta.

Clonar El Repositorio

https://github.com/Cristian-Perez-B/pruebakonecta.git

Cree el archivo .env en la raíz del proyecto según el archivo .env.example para establecer las variables de entorno. En caso de requerir la base de datos local, se encuentra alojada en la siguiente ubicación.

app/\_devtools/konecta\_challenge.sql

1. Para instalar las dependencias de Laravel/Breeze (se requiere autenticación), ejecute

node install && npm run watch

Nota

La base de datos utilizada para el proyecto es MySql

Migraciones

Ejecute el siguiente comando para ejecutar migraciones de inicio.

php artisan migrate

Ejecutar proyecto Laravel

php artisan serve

Finally

1. Registrar una nueva categoría
1. Registrar un nuevo Producto
1. Ir a la vista de ventas para vender un producto
1. Listo


Autor: Cristian Anibal Perez Bohorquez © 2023
