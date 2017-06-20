# Parcial3
Probado con: Apache 2.4.23 – PHP 7.0.10 – MySQL 5.7.14
Requiere navegador web: chrome

Descomprimir el archivo: 'vendor.rar'

Instalar Composer:
https://getcomposer.org/Composer-Setup.exe

Instalar laravel(linea de comandos): 
composer global require "laravel/installer”

Instalar testing API(linea de comandos):
composer require laravel/dusk
php artisan dusk:install

En caso de no tener el usuario Root en la base de datos Mysql importar el archivo '127_0_0_1_ROOT.sql'.

Crear la base de datos y tablas importando el archivo: '127_0_0_1.sql'

Ejecutar test(linea de comandos):
php artisan dusk
