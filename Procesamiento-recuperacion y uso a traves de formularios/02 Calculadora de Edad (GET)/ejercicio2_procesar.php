<?php
// Función que calcula la edad a partir del año recibido
function calcularEdad($anioNacimiento) {
    $anioActual = 2026;
    return $anioActual - intval($anioNacimiento); 
    /*intval() es Integer Value "Valor entero". 
    * Se solicita un número y lo que recogemos en el form es un String "1995".
    *Fuerza este valor a que sea un número entero matemático sí o sí*/
}

//$_GET es un array superglobal que guarda la info a través de una url.
/*isset() significa "¿Está definido? ¿Existe?" La función comprueba si
la variable o índice que se pasa en $_GET['anio'] existe y tiene valor 
asignado isset($_GET['anio']) -> "si devuelve verdadero (true)". Así que accede
a la función y calcula*/
if (isset($_GET['anio'])) { 
    $anio = $_GET['anio'];
    $edad = calcularEdad($anio);

    echo "<h1>Resultado del Cálculo</h1>";
    echo "<p>Tienes aproximadamente <strong>$edad</strong> años.</p>";
} else {
    echo "<p>Por favor, introduce un año válido.</p>";
}
?>Suscripción Email (POST)