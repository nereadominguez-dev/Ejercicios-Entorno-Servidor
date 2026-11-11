<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 9 - Registro</title>
</head>
<body>
    <h2>Registro de Usuario</h2>
    <form action="ejercicio9_procesar.php" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>
        <label for="clave">Contraseña:</label>
        <input type="password" id="clave" name="clave" required><br><br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>