<!-- Enunciado: Desarrollar una operación de cálculo de descuento estructurada en múltiples líneas pero tratada
como una única sentencia. -->

<?php
// Una sentencia de PHP finaliza de forma general con un punto y coma (;).
// Una sola sentencia puede abarcar múltiples líneas de código según las reglas sintácticas del lenguaje.

$nombre = "Monitor UltraWide 34\"";
$precioBase = 350.00;
$descuentoFijo = 50.00;

// Sentenica multilinea válida que realiza la operación aritmética de descuento
$precioFinal = 
$precioBase 
- 
$descuentoFijo; // Finaliza aqui con el punto y compa

echo "Producto: " . $nombre . "\n";
echo "Precio Final aplicando descuento: " . $precioFinal . " EUR;\n";