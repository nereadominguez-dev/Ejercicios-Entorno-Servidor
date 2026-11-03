<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8 - Aficiones</title>
</head>
<body>
    <h2>Selecciona tus Aficiones</h2>
    <form action="ejercicio8_procesar.php" method="POST">
        <input type="checkbox" name="hobbies[]" value="Lectura"> Lectura<br>
        <input type="checkbox" name="hobbies[]" value="Deporte"> Deporte<br>
        <input type="checkbox" name="hobbies[]" value="Programación"> Programación<br>
        <input type="checkbox" name="hobbies[]" value="Música"> Música<br><br>
        <button type="submit">Enviar Selección</button>
    </form>
</body>
</html>