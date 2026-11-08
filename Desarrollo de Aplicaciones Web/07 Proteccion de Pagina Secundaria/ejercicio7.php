<?php
/**
 * Ejercicio 7: Protección Básica de una Página Secundaria
 * Deniega el acceso si el usuario no cuenta con una sesión previa iniciada.
 */
session_start();

//Control de acceso: Verificar si existe el usuario en la sesión
if (!isset($_SESSION['usuario'])) {
    echo "<h2 style='color: red;'>Acceso Denegado</h2>";
    echo "<p>No tiene permisos para ver esta página secundaria. Por favor, inicie sesión primero.</p>";
    exit(); // Detiene la ejecución completa del script
}
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7 - Área Protegida</title>
</head>
<body>
    <h2>Área Privada de la Aplicación</h2>
    <p>Bienvenido al panel secundario, <strong><?php echo htmlspecialchars($_SESSION['usuario']); ?></strong>.</p>
    <p>Este contenido solo es visible para usuarios autenticados activamente.</p>
</body>
</html>