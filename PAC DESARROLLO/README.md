# PAC de desarrollo: Gestión de eventos tecnológicos con PHP

## Descripción

La empresa **CodeLearning Events** necesita una pequeña aplicación en PHP para gestionar algunos procesos relacionados con la organización de eventos tecnológicos. En esta actividad se trabajan funciones, parámetros y valores de retorno, parámetros predeterminados, estructuras condicionales, recuperación de datos mediante `GET` y procesamiento de datos enviados por formularios.

Los ejercicios se desarrollan en un único archivo: [`code.php`](./code.php).

## Objetivos

- Crear funciones que reciban parámetros y devuelvan resultados.
- Calcular importes aplicando impuestos y descuentos.
- Utilizar parámetros predeterminados.
- Tomar decisiones mediante estructuras condicionales.
- Recoger y procesar datos enviados desde un formulario con el método `GET`.

## Ejercicios

### 1. Generador de credenciales — 1 punto

Completar `generarCredencial()` para recibir el nombre del asistente, el evento y su especialidad. La función debe devolver una cadena con este formato:

```text
Asistente: Ana | Evento: IA Generativa | Especialidad: Desarrolladora Web
```

### 2. Cálculo del coste de inscripción — 2 puntos

Completar `calcularImporte()` para calcular el precio de las entradas y procesar el código promocional enviado mediante el formulario:

1. Cada entrada cuesta **25 €**.
2. Se aplica un **21 % de IVA**.
3. Si el código promocional es `OFERTA`, se aplica un **50 % de descuento**.
4. La función devuelve el importe final.

Ejemplos con cuatro entradas:

| Código promocional | Importe final |
|---|---:|
| Sin código | 121 € |
| `OFERTA` | 60,5 € |

El formulario utiliza el método `GET` y solicita el número de entradas y, opcionalmente, el código promocional.

### 3. Validación de acceso al sistema — 2 puntos

Completar `validarAcceso()` para comprobar la contraseña y el rol del usuario. El rol debe tener el valor predeterminado `invitado` y la contraseña válida es `DWES2026`.

| Condición | Mensaje esperado |
|---|---|
| Contraseña incorrecta | Acceso denegado |
| Contraseña correcta y rol `administrador` | Acceso completo concedido para (nombre del usuario) |
| Contraseña correcta y cualquier otro rol | Acceso limitado concedido para (nombre del usuario) |

Casos de prueba:

```php
validarAcceso("Ana", "DWES2026", "administrador");
// Acceso completo concedido para Ana

validarAcceso("Pedro", "DWES2026");
// Acceso limitado concedido para Pedro

validarAcceso("Laura", "1234");
// Acceso denegado
```

## Instrucciones de realización

1. Abre el proyecto con Visual Studio Code.
2. Localiza en `code.php` las zonas señaladas con `// COMPLETAR`.
3. Completa únicamente el código necesario y conserva el resto de la estructura del archivo.
4. Ejecuta el proyecto con XAMPP y comprueba los resultados de todos los ejercicios.
5. Copia el contenido completo de `code.php` en el campo de respuesta de la actividad.

## Ejecución con XAMPP

1. Copia la carpeta `PAC DESARROLLO` dentro de `htdocs` de la instalación de XAMPP.
2. Inicia Apache desde el panel de control de XAMPP.
3. Abre en el navegador `http://localhost/PAC%20DESARROLLO/code.php`.
4. Prueba el formulario con distintos números de entradas y códigos promocionales.

## Tecnologías

- PHP
- HTML
- XAMPP (Apache)
