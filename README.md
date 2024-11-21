# Gestión de Sesiones con PHP

Este proyecto es una pequeña actividad formativa desarrollada para la asignatura **Desarrollo en Entorno Servidor**. El objetivo principal es aprender y poner en práctica el concepto de sesiones en PHP.

## Descripción

El proyecto implementa un sistema básico de autenticación en el que:

1. **Página de Inicio de Sesión (`login.php`)**:
   - Permite a los usuarios autenticarse proporcionando un nombre de usuario y una contraseña.
   - Si las credenciales son correctas, se redirige a la página de bienvenida.

2. **Página de Bienvenida (`bienvenida.php`)**:
   - Muestra la información del usuario autenticado (nombre, estado, y hora de inicio de sesión).
   - Ofrece la opción de cerrar sesión.

3. **Página de Acceso Restringido (`no_permisos.html`)**:
   - Se muestra a los usuarios que intentan acceder a la página de bienvenida sin iniciar sesión.

## Características Técnicas

- **Lenguaje**: PHP.
- **Estilo**: Bootstrap 5 para una interfaz visual moderna y responsiva.
- **Sesiones**:
  - Gestión de inicio y cierre de sesión.
  - Almacenamiento temporal de datos de usuario mediante la variable superglobal `$_SESSION`.

## Archivos del Proyecto

- `login.php`: Página para el inicio de sesión.
- `bienvenida.php`: Página de bienvenida que muestra información del usuario autenticado.
- `no_permisos.html`: Página de acceso restringido para usuarios no autenticados.
- `img/tecnicos.jpg`: Imagen de error que se muestra en la página de acceso restringido.

## Requisitos del Sistema

- **PHP**: 7.4 o superior.
- **Servidor Web**: XAMPP, Apache, Nginx o cualquier servidor compatible con PHP.
- **Navegador Moderno**: Para el correcto funcionamiento del diseño Bootstrap.

## Cómo Probar el Proyecto
1. **Copiar el proyecto al servidor local**  
   - Coloca los archivos del proyecto en el directorio `htdocs` de XAMPP. Por ejemplo:
     ```
     C:\xampp\htdocs\proyecto_sesiones
     ```

2. **Iniciar los módulos necesarios**  
   - Abre el panel de control de XAMPP.
   - Inicia el módulo **Apache**.

3. **Abrir el proyecto en el navegador**  
   - Navega a la siguiente URL en tu navegador:
     ```
     http://localhost/proyecto_sesiones/login.php
     ```

4. **Probar el sistema de autenticación**  
   - Usa las siguientes credenciales para iniciar sesión:
     - **Usuario**: `LemanSachs29`
     - **Contraseña**: `1234`.
   - Accede a la página de bienvenida, prueba el botón para cerrar sesión y verifica el comportamiento al intentar acceder directamente a `bienvenida.php` sin iniciar sesión.
