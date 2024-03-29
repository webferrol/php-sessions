# Formularios. Ejercicio

 > Create a form that meets the following requirements:

## Functions, global variables

- **isset()**: Determina si una variable está definida y no es null
- **$_REQUEST**, **$_POST**, **$_GET**: Un *array asociativo* de variables pasadas al script actual a través de los métodos **post** o **get** de los formularios
- **$_SERVER**: Un array asociativo que contiene información del entorno del servidor y de ejecución. Por ejemplo el índice **PHP_SELF** retorna el nombre del archivo de script ejecutándose actualmente, relativa al directorio raíz de documentos del servidor. [Ver información de sus índices](https://www.php.net/manual/es/reserved.variables.server.php)
- **htmlspecialchars()**: Convierte caracteres especiales en [entidades HTML](https://developer.mozilla.org/es/docs/Glossary/Entity)

## Rúbrica:

1. **Funcionalidad del formulario (20 puntos):**
   - El formulario debe contener campos para ingresar datos personales básicos como nombre, apellido, edad, sexo, correo electrónico, y número de teléfono.
   - El sexo debe de ser campos radio button.
   - Debe haber un botón de envío para enviar los datos al servidor.

2. **Procesamiento de datos (30 puntos):**
   - El script PHP debe recolectar los datos del formulario utilizando `$_REQUEST`.
   - Se debe realizar alguna validación básica de los datos, como comprobar si los campos **nombre** o **correo electrónico** están vacíos.

3. **Estructura de datos (30 puntos):**
   - Los datos ingresados por el usuario deben mostrarse claramente en la página después de enviar el formulario.
   - La presentación de los datos debe ser clara y legible.

4. **Estilo y diseño (20 puntos):**
   - El formulario y la página resultante deben tener un diseño atractivo y legible.
   - Se pueden utilizar hojas de estilo CSS para mejorar la presentación.


 > It will be publicly uploaded to github so that the teacher can make a fork of it.

