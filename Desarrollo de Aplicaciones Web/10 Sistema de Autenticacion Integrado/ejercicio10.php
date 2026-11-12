<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 10 - Ticket de Soporte</title>
</head>
<body>
    <h2>Formulario de Soporte Técnico</h2>
    <form action="ejercicio10_procesar.php" method="POST">
        <label for="nombre">Nombre Completo:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="email">Correo Electrónico:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="tipo">Tipo de Incidencia:</label><br>
        <select id="tipo" name="tipo">
            <option value="Acceso">Problema de Acceso</option>
            <option value="Facturación">Duda de Facturación</option>
            <option value="Técnico">Error Técnico</option>
        </select><br><br>
        
        <label for="detalle">Detalle del problema:</label><br>
        <textarea id="detalle" name="detalle" rows="4" cols="40" required></textarea><br><br>
        
        <button type="submit">Generar Ticket</button>
    </form>
</body>
</html>