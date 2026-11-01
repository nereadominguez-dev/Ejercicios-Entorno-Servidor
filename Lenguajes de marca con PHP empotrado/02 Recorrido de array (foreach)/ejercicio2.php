<?php
/**
 * EJERCICIO 2: Recorrido Simple de Matrices
 * Objetivo: Implementar un bucle foreach para recorrer el array de artículos
 * e imprimir el nombre de cada artículo y su precio base.
 */

$articulos = array (
    "Portátil Pro" => 850.00,
    "Ratón Ergonómico" => 45.50,
    "Teclado Mecánico" => 120.00,
    "Auriculares Inalámbricos" => 89.90,
    "Monitor 4K IPS" => 349.99,
    "Alfombrilla XL" => 19.99
);

echo "<h3>Lista de Artículos y Precios Base:</h3>";
echo "<ul>";

// Bucle foreach para realizar el recorrido independiente del tamaño de la matriz
foreach ($articulos as $nombre => $precioBase) {
    echo "<li><strong>" . $nombre . "</strong>: " . $precioBase . " €</li>";
}
echo "</ul>";

?>