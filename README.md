# Documentación del Proyecto FreshCoffee (Backend)

## Descripción General

Este proyecto se integra con el proyecto FreshCoffee (Frontend) y está desarrollado con Laravel 10. Se encarga de proporcionar la API necesaria para operar con pedidos, categorías, productos y usuarios, incluyendo toda la capa de autenticación y control de roles y permisos del proyecto FreshCoffee.

## Tecnologías Utilizadas

- [Laravel 10](https://laravel.com/): Framework de PHP utilizado para el desarrollo del backend.
- [Laravel Sanctum](https://laravel.com/docs/10.x/sanctum): Utilizado para la autenticación en la API.
- [Carbon](https://carbon.nesbot.com/): Utilizado para el manejo de fechas.
- [Eloquent](https://laravel.com/docs/10.x/eloquent): ORM de Laravel para gestionar la base de datos.
- [MySQL](https://www.mysql.com/): Base de datos relacional.

## Integración con FreshCoffee (Frontend)

Este proyecto se integra con el frontend de FreshCoffee, permitiendo la comunicación entre el backend y el frontend a través de la API desarrollada en Laravel 10.

## Capas Funcionales

### Autenticación y Autorización

- **Usuarios y Roles:**
  - Gestión de usuarios con diferentes roles y permisos.
  - Control de acceso basado en roles para garantizar la seguridad de la aplicación.
  - Uso de Laravel Sanctum para la autenticación.

- **Iniciar Sesión y Cierre de Sesión:**
  - Endpoints para el inicio y cierre de sesión de usuarios.

- **Registro de Usuarios:**
  - Endpoint para registrar nuevos usuarios.

### Pedidos

- **Pedidos:**
  - Endpoints para crear, consultar y actualizar las órdenes.
  - Vinculación de órdenes con usuarios con Eloquent.
  - Vinculación de órdenes con productos y sus cantidades con Eloquent.

### Productos y Categorías

- **Productos:**
  - Endpoints para consultar y actualizar los productos en la tienda.
  - Asociación de productos a categorías con Eloquent.

- **Categorías:**
  - Endpoint para consultar las categorías.

## Estructura del Proyecto

Este proyecto sigue una arquitectura que separa claramente las responsabilidades, facilitando el mantenimiento y la escalabilidad.

## Nota Adicional

Esta aplicación no es monolítica. En este documento, nos centramos específicamente en la documentación del backend.