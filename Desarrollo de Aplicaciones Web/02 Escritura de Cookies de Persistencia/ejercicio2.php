<?php

$nombre_cookie = "usuario_pref";
$valor_cookie = "TemaOscuro";

// Cookie válida durante 1 hora (3600 segundo)
setcookie($nombre_cookie, $valor_cookie, time() + 3600, "/");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 - Cookies de Persistencia</title>
</head>
<body>
    <h1>Cookie de Persistencia</h1>

    <?php
    echo "<p>Cookie '$nombre_cookie' creada con valor: $valor_cookie</p>";

    // Mostrar el valor si ya existe
    if (isset($_COOKIE[$nombre_cookie])) {
        echo "<p>Valor almacenado actualmente: " . $_COOKIE[$nombre_cookie] . "</p>";
    } else {
        echo "<p>Recarga la página para comprobar la cookie.</p>";
    }
    ?>
</body>
</html>