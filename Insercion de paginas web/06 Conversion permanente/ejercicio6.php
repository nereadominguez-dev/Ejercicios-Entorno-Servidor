<!-- Enunciado: Cambiar permanentemente el tipo de dato de una variable usando la función integrada settype()
de PHP. -->

<?php
// Uso de la función nativa settype() de PHP para modificar permanentemente el tipo de dato de una variable.

$precioVariable = "450.85"; // Tipo inicial String
echo "Tipo inicial de la variable: " . gettype($precioVariable) . " (Valor: $precioVariable)\n";

//Aplicamos settype( para forzar de manera permanente un cambio a tipo Float
settype($precioVariable, "float");
echo "Tipo final tras settype(): " . gettype($precioVariable) . "(Valor: $precioVariable)\n";

//Ahora realizamos una operaciíon aritmética directa sin depender del casting del intérprete
$impuesto = $precioVariable * 0.21;
echo "Impuesto (21%): " . $impuesto . " EUR\n";