# Documentación del Proyecto FreshCoffee (Backend)

## Descripción General

Este proyecto se integra con el proyecto FreshCoffee (Frontend) y está desarrollado con Laravel 10. Se encarga de proporcionar la API necesaria para operar con pedidos, categorías, productos y usuarios, incluyendo toda la capa de autenticación y control de roles y permisos del proyecto FreshCoffee.

## Tecnologías Utilizadas

- [Laravel 10](https://laravel.com/): Framework de PHP utilizado para el desarrollo del backend.
- [Laravel Sanctum](https://laravel.com/docs/10.x/sanctum): Utilizado para la autenticación en la API.

## Integración con FreshCoffee (Frontend)

Este proyecto se integra con el frontend de FreshCoffee, permitiendo la comunicación entre el backend y el frontend a través de la API desarrollada en Laravel 10.

## Capas Funcionales

### Autenticación y Autorización

- **Usuarios y Roles:**
  - Gestión de usuarios con diferentes roles y permisos.
  - Control de acceso basado en roles para garantizar la seguridad de la aplicación.

### Pedidos

- **Órdenes:**
  - API para gestionar las órdenes emitidas por los usuarios compradores.
  - Resumen de productos, cliente y total del pedido.

### Productos y Categorías

- **Gestión de Productos:**
  - API para la administración de productos en la tienda.
  - Asociación de productos a categorías.

- **Categorías:**
  - API para la gestión de categorías de productos.

### Autenticación

- **Iniciar Sesión y Cierre de Sesión:**
  - API para el inicio de sesión de usuarios y cierre de sesión.

- **Registro de Usuarios:**
  - Posibilidad de registrar nuevos usuarios.

## Estructura del Proyecto

Este proyecto sigue una arquitectura que separa claramente las responsabilidades, facilitando el mantenimiento y la escalabilidad.

## Nota Adicional

Esta aplicación no es monolítica. En este documento, nos centramos específicamente en la documentación del backend.