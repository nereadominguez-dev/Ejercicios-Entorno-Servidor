<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 - Calculadora de Edad</title>
</head>
<body>
    <h2>Calculadora de Edad</h2>
    <form action="ejercicio2_procesar.php" method="GET">
        <label for="anio">Año de nacimiento:</label>
        <input type="number" id="anio" name="anio" min="1900" max="2026" required>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>