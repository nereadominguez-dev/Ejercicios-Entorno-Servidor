<?php
/**
 * Ejercicio 1: Protocolo HTTP Sin Estado e Inicialización de Sesión
 * Muestra el comportamiento sin estado del protocolo HTTP y cómo solucionarlo con session_start().
 */

session_start();

// Guardamos el momento de la primera visita dentro de la sesión
if (!isset($_SESSION['inicio_tiempo'])) {
    $_SESSION['inicio_tiempo'] = date("Y-m-d H:i:s");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 - HTTP Sin Estado y session_start()</title>
</head>
<body>
    <h2>Ejercicio 1: Demostración de HTTP Sin Estado</h2>
    <p>El protocolo HTTP no guarda el estado de forma nativa entre peticiones.</p>
    <p>Gracias al uso de <code>session_start()</code>, el servidor asigna un identificador único y mantiene los datos.</p>
    
    <hr>
    
    <p><strong>Hora de inicio de sesión registrada:</strong> <?php echo $_SESSION['inicio_tiempo']; ?></p>
    <p><strong>ID de Sesión (SID):</strong> <?php echo session_id(); ?></p>
    
    <br>
</body>
</html>