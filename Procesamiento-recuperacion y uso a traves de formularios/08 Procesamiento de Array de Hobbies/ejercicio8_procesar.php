<?php
// Función para procesar un array de aficiones
function procesarHobbies($listaHobbies) {
    if (empty($listaHobbies)) {
        return "No has seleccionado ninguna afición.";
    }

    $resultado = "Tus aficiones seleccionadas son: <ul>";
    foreach ($listaHobbies as $hobby) {//foreach recorre $listaHobbies como un array y lo guarda en &hobby
        $hobbyLimpio = htmlspecialchars($hobby); //desconfiar siempre del navegador y asegurarnos que el formulario envíe caracteres válidos.
        $resultado .= "<li>$hobbyLimpio</li>"; //concatena y agrega lectura, múscia...
    }
    $resultado .= "</ul>";
    return $resultado;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $hobbies = $_POST ['hobbies'] ?? []; //[] significa array vacío se coloca para que  el programa no lance el error "Undefined array key"
    echo "<h1>Tus Preferencias</h1>";
    echo procesarHobbies($hobbies);
}
?>