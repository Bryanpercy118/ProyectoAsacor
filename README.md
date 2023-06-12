<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## # PROYECTO UNIVERSITARIO DE FACTURACIÓN

Este repositorio contiene el código fuente del proyecto universitario de facturación. El objetivo de este proyecto es implementar un sistema de facturación utilizando las mejores prácticas de programación y realizar diversas pruebas para garantizar la calidad del software.

## Pruebas realizadas

Durante el desarrollo de este proyecto se llevaron a cabo las siguientes pruebas:

1. **Pruebas de testeo**: Se implementaron pruebas unitarias utilizando el framework de pruebas PHPUnit para verificar el correcto funcionamiento de las diferentes partes del sistema.

2. **Automatización de pruebas**: Se utilizó Laravel Dusk, una herramienta de automatización de pruebas de navegador, para realizar pruebas de aceptación que simulan la interacción del usuario con la aplicación.

3. **Depuración y monitoreo**: Se empleó Laravel Telescope para depurar y monitorear el rendimiento de la aplicación, identificando posibles problemas y optimizando su funcionamiento.

4. **Pruebas de integración**: Se realizaron pruebas de integración para verificar la correcta comunicación entre los diferentes componentes del sistema, como el registro de clientes, productos, y generación de facturas.

5. **Sistematización**: Se aplicaron buenas prácticas de programación y diseño de software para garantizar la modularidad, reutilización y escalabilidad del sistema de facturación.

6. **Análisis de calidad**: Se utilizó SonarQube para realizar un análisis estático del código fuente, identificar posibles problemas de mantenibilidad, deuda técnica y vulnerabilidades de seguridad, y mejorar la calidad del código.

El proyecto ha obtenido resultados positivos en las pruebas realizadas, lo que demuestra el compromiso con la calidad y el cumplimiento de los estándares de desarrollo de software.

## Instrucciones de instalación

Para instalar y ejecutar el proyecto en tu entorno local, sigue los siguientes pasos:

1. Clona este repositorio en tu máquina local utilizando el siguiente comando:
   ```
   git clone https://github.com/Bryanpercy118/ProyectoAsacor.git
   ```

2. Accede al directorio del proyecto:
   ```
   cd ProyectoAsacor
   ```

3. Instala las dependencias del proyecto utilizando Composer:
   ```
   composer install
   ```

4. Configura las variables de entorno del proyecto. Puedes duplicar el archivo `.env.example` y renombrarlo como `.env`. Luego, actualiza las variables de entorno según tu configuración.

5. Genera una clave de aplicación única para el proyecto:
   ```
   php artisan key:generate
   ```

6. Ejecuta las migraciones de la base de datos y alimenta el sistema con datos iniciales:
   ```
   php artisan migrate --seed
   ```

7. Inicia el servidor de desarrollo:
   ```
   php artisan serve
   ```

8. Accede a la aplicación en tu navegador web a través de la URL `http://localhost:8000`.

Si tienes alguna pregunta o necesitas ayuda durante la instalación o ejecución del proyecto, no dudes en contactarme.

¡Gracias por tu interés en este proyecto de facturación universitario!
