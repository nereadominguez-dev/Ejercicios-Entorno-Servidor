<!--Explicación: Verificación e impresión de la cookie enviada por el cliente mediante la superglobal
$_COOKIE. -->
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF8">
        <title>Lectura de cookies con $_COOKIE</title>
    </head>
    <body>
        <h1>Lectura de Cookie</h1>
        <?php
        if (isset($_COOKIE['usuario_pref'])) {
            echo "<p>Preferencia guardada: " . $_COOKIE['usuario_pref'] . "<p>";
        } else {
            echo "<p>No existe la cookie de preferencia.</p>";
        }
        ?>
    </body>
    </html>