<?php
/**
 * Ejercicio 6: Almacenar el Usuario en la Sesión Servidor
 * Persiste el nombre del usuario en $_SESSION una vez validado.
 */
session_start();
$mensaje = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($usuario === 'alumno' && $password === 'secret') {
        // Guardar el nombre de usuario en la sesión del servidor
        $_SESSION['usuario'] = $usuario;
        $mensaje = "Sesión iniciada correctamente.";
    } else {
        $mensaje = "Credenciales no válidas.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6 - Guardar en Sesión</title>
</head>
<body>
    <h2>Ejercicio 6: Persistencia de Usuario en $_SESSION</h2>

    <?php if (isset($_SESSION['usuario'])): ?>
        <p style="color: green; font-size: 18px;">
            Usuario almacenado actualmente en sesión: <strong><?php echo $_SESSION['usuario']; ?></strong>
        </p>
    <?php else: ?>
        <?php if ($mensaje): ?><p style="color: red;"><?php echo $mensaje; ?></p><?php endif; ?>
        <form method="POST">
            <p>
                <label>Usuario:</label><br>
                <input type="text" name="usuario" value="alumno">
            </p>
            <p>
                <label>Contraseña:</label><br>
                <input type="password" name="password" value="secret">
            </p>
            <button type="submit">Validar y Guardar Sesión</button>
        </form>
    <?php endif; ?>
</body>
</html>