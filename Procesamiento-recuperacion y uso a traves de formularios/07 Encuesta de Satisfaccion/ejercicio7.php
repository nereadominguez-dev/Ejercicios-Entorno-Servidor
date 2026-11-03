<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7 - Encuesta</title>
</head>
<body>
    <h2>Encuesta de Satisfacción</h2>
    <form action="ejercicio7_procesar.php" method="POST">
        <label for="puntos">Valoración (1 al 5):</label>
        <input type="number" id="puntos" name="puntos" min="1" max="5" required>
        <button type="submit">Enviar Puntuación</button>
    </form>
</body>
</html>