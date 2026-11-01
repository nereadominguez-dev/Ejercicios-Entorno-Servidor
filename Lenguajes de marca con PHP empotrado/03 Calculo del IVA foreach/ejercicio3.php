<?php
/**
 * EJERCICIO 3: Cálculo Dinámico del IVA
 * Objetivo: Modificar el bucle de recorrido para calcular de forma dinámica
 * un IVA del 21% sobre el precio de cada artículo en tiempo de ejecución.
 */

$articulos = array(
    "Portátil Pro" => 850.00,
    "Ratón Ergonómico" => 45.50,
    "Teclado Mecánico" => 120.00,
    "Auriculares Inalámbricos" => 89.90,
    "Monitor 4K IPS" => 349.99,
    "Alfombrilla XL" => 19.99
);

define("TASA_IVA", 0.21); // Definimos la constante de IVA general (21%)

echo "<h3>Desglose de Precios con IVA (21%):</h3>";
echo "<table border='1' cellpadding='10' style='border-collapse: collapse;'>";
echo "<tr><th>Artículo</th><th>Precio Base</th><th>IVA Calculado</th><th>Precio Total</th></tr>";

foreach ($articulos as $nombre => $precioBase) {
    //Cálculo dinámico del IVA y del precio total final
    $ivaCalculado = $precioBase * TASA_IVA;
    $precioTotal = $precioBase + $ivaCalculado;

    echo "<tr>";
    echo "<td>" . $nombre . "</td>";
    echo "<td>" . number_format($precioBase, 2) . " €</td>";
    echo "<td>" . number_format($ivaCalculado, 2) . " €</td>";
    echo "<td><strong>" . number_format($precioTotal, 2) . " €</strong></td>";
    echo "</tr>";

}
echo "</table>";
?>