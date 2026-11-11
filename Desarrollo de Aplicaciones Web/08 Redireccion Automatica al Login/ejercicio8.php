<?php
/**
 * Ejercicio 8: Protección de Página Secundaria con Redirección Automática
 * Redirige al cliente a la página de login si la sesión no existe mediante header().
 */

session_start();

// unset($_SESSION['usuario']);

// Comprobación de seguridad con redirección
if (!isset($_SESSION['usuario'])) {
    header("Location: ejercicio6.php");
    ecist();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8 - Protección con Redirección</title>
</head>
<body>
    <h2>Página Protegida con Redirección Automática</h2>
    <p>Hola, <strong><?php echo htmlspecialchars($_SESSION['usuario']); ?></strong>.</p>
    <p>Si la sesión no hubiese estado activa, la función <code>header("Location: ...")</code> te habría reenviado al login de forma transparente.</p>
</body>
</html>