<?php
//Eliminar la cookie haciendo que expire en el pasado
setcookie("usuario_pref", "", time() - 3600, "/");

//Eliminación también de la variable superglobal actual
unset($_COOKIE["usuario_pref"]);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Eliminación de Cookies</title>
</head>
<body>
    <h1>Eliminación y Expiración de Cookies</h1>
    <p>La cookie <strong>usuario_pref</strong> ha sido eliminada.</p>

    <?php
    if (isset($_COOKIE["usuario_pref"])) {
        echo "<p>La cookie aún existe.</p>";
    } else {
        echo "<p>La cookie ya no está disponible en la aplicación.</p>";
    }
    ?>
</body>
</html>

