<?php
// Función para clasificar la valoración
function evaluarPuntuacion($puntos) {
    if ($puntos >= 4){
    return "Excelente valoración. ¡Gracias por confiar en nosotros!";
} elseif ($puntos == 3){
    return "Valoración aceptable. Seguiremos mejorando";
} else {
    return "Lamentamos que su experiencia no haya sido satisfactoria.";
}
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $puntos = intval($_POST['puntos'] ?? 0);
    $diagnostico = evaluarPuntuacion($puntos);

    echo "<h1>Resultado de la Encuesta</h1>";
    echo "<p>Puntuación recibida: <strong>$puntos / 5</strong></p>";
    echo "<p>$diagnostico</p>";
}
?>