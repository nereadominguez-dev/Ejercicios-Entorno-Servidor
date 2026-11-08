<?php
/**
 * Ejercicio 5: Login en Código (Sin Base de Datos)
 * Valida credenciales fijas directamente dentro del script PHP.
 */

$error = "";
$exito = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $password = $_POST['password'] ?? '';

    // Autenticación simple cableada en código
    if ($usuario === 'profesor' && $password ==='1234') {
        $exito = "¡Autencitación correcta! Bienvenido. " .htmlspecialchars($usuario) . ".";
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5 - Login</title>
</head>
<body>
    <h2>Ejercicio 5: Autenticación Simple</h2>

    <?php if ($error): ?> <p style="color: red;"><?php echo $error; ?></p><?php endif; ?>
    <?php if ($exito): ?> <p style="color: green; font-weight: bold;"><?php echo $exito; ?></p><?php endif; ?>

    <form method="POST">
        <p>
            <label>Usuario: </label><br>
            <input type="text" name="usuario" required>
        </p>
        <p>
            <label>Contraseña: </label><br>
            <input type="password" name="password" required>
        </p>
        <button type="submit">Iniciar Sesión</button>
    </form>
    <p><em>(Credenciales válidas: <strong>profesor</strong> / <strong>1234</strong>)</em></p>
</body>
</html>