<!-- Enunciado: Acceder a variables declaradas fuera de las funciones mediante las dos metodologías soportadas
en PHP. -->

<?php
// El uso de variables globales permite acceder a valores declarados fuera del ámbito de las funciones.
// Mostramos las dos sintaxis soportadas por PHP: la palabra clave global y el array superglobal $GLOBALS.

$impuestoNacional = 0.21; // Variable de ámbito global
$precioFicha = 150.00; // Variable de ámbito global

//sintaxis 1: Uso de la palabra clave global
function calcularConPalabraGlobal() {
    global $precioFicha, $impuestoNacional;
    $incremento = $precioFicha * $impuestoNacional;
    echo "Sintaxis global: El incremento de impuesto es " . $incremento . " EUR\n";

}

// Sintaxtis 2: Uso de la variable superglobal $GLOBALS
function calcularConArrayGlobals() {
    $incremento = $GLOBALS ['precioFicha'] * $GLOBALS['impuestoNacional'];
    echo "Sintaxis GLOBALS: El incremento de impuesto es " . $incremento . " EUR\n";
}

calcularConPalabraGlobal();
calcularConArrayGlobals();
?>