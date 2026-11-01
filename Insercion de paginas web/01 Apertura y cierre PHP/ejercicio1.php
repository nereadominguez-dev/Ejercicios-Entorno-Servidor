<!--Enunciado: Crear un documento HTML que integre de forma correcta el motor de PHP usando la etiqueta de
apertura nativa y cierre estándar -->


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>EJERCICIO 1 - ETIQUETAS PHP</title>
    </head>
    <body>
        <h1>Inserción de Código PHP</h1>
        <p>A continuación se ejecuta un bloque de código PHP integrado dentro de la estructura HTML</p>
        <!-- Apertura de etiqueta nativa PHP -->
         <?php
         // Imprimimos un texto indicando el correcto procesamiento del código de servidor
         echo "<p><strong> ¡Hola Mundo desde el Servidor!</strong> Este texto ha sido generado interpretando código PHP nativo.</p>";
         ?>
         <!-- Cierre de etiqueta PHP -->

    </body>
</html>
