<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4 - Presupuesto</title>
</head>
<body>
    <h2>Solicitud de Presupuesto</h2>
    <form action="ejercicio4_procesar.php" method="POST">
        <label for="horas">Horas estimadas:</label>
        <input type="number" id="horas" name="horas" min="1" required>
        <button type="submit">Calcular Presupuesto</button>
    </form>
</body>
</html>