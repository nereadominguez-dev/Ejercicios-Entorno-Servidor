<?php
// Función para sanitizar texto
function limpiarTexto($texto) {
    return htmlspecialchars(trim($texto));
}

//$_SERVER es una array global de PHP que contiene información sobre el entorno del servidor.
//['REQUEST_METHOD'] El servidor php pregunta -> averigua cómo ha llegado el navegador del usuario hasta este archivo PHP
//=== 'POST' Comprueba si la petición se ha hecho mediante el método POST "estándar y seguro"
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombreOriginal = $_POST['nombre'] ?? '';  
    //$_POST['nombre'] es donde PHP guarda el valor que el usuario ha escrito
    //?? '' Fusión nula y red de seguridad, si el campo nombre viene con datos se guarda, si viene vacío guárdalo con '' para evitar que PHP lance un error.
$nombreLimpio = limpiarTexto($nombreOriginal); // limpiarTexto() llama a la función de seguridad contra inyección de código malicioso.

echo "<h1>Confirmación de Contacto</h1>";
echo "<p>Hola, <strong>$nombreLimpio</strong>. Hemos recibido tu mensaje correctamente.</p>";
} else {
    echo "<p>Acceso no permitido.</p>";
}
?>