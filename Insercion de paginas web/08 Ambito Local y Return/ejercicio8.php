<!-- Enunciado: Crear una función para calcular precios con impuestos, demostrando el aislamiento del ámbito
local de las variables internas. -->

<?php
// Las variables utilizadas dentro de una función tienen un ámbito local.
// No son visibles fuera de ella a menos que se devuelvan explícitamente mediante return.

function calcularPrecioConIva($precioBase) {
    //$factorIva es una variable local, solo existe dentro de esta función
    $factorIva = 1.21;
    $precioConIva = $precioBase * $factorIva;

    return $precioConIva; // Devolvemos el valor calculado de vuelta al flujo principal.

}

$precioProducto = 100.00;

//Llamamos a la función prara obtener el valor retornado
$precioTotal = calcularPrecioConIva($precioProducto);

echo "Precio Base: " . $precioProducto . " EUR\n";
echo "Precio Final (IVA Incluido): " . $precioTotal . "EUR\n";

// Si intentamos mostrar la variable local $precioConIva en el ámbito global, causará un error "Undefined variable"
// echo $precioConIva; 
?>