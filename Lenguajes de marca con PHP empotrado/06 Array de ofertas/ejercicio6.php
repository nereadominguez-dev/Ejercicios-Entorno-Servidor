<?php
/**
 * EJERCICIO 6: Filtrado y Creación Dinámica de Nuevos Datos Compuestos
 * Objetivo: Recorrer el array principal y almacenar en un nuevo array asociativo
 * únicamente los artículos que reciben descuento por superar el umbral de 50€.
 */

$articulos = array(
    "Portátil Pro" => 850.00,
    "Ratón Ergonómico" => 45.50,
    "Teclado Mecánico" => 120.00,
    "Auriculares Inalámbricos" => 89.90,
    "Monitor 4K IPS" => 349.99,
    "Alfombrilla XL" => 19.99
);

$umbralPrecio = 50.00;
$ofertas = array(); // Declaramos el nuevo array asociativo de ofertas inicialmente vacío

foreach ($articulos as $nombre => $precioBase) {
    if ($precioBase > $umbralPrecio) {
        // Almacenamos el elemento con descuento en el nuevo array asociativo
        $ofertas[$nombre] = $precioBase * 0.90; //Aplicación directa del descuento del 10%
    }
}

//Mostrar los resultados del nuevo array filtrado
echo "<h3>Nuevo Array de Artículos en Oferta (Filtrado de Datos):</h3>";
echo "<ul>";
foreach ($ofertas as $nombreOferta => $precioOferta) {
    echo "<li>🎉 <strong>" . $nombreOferta . "</strong> rebajado a:" . number_format($precioOferta, 2) . " €</li>";
}
echo "</ul>";
?>