<?php
/**
 * EJERCICIO 4: Tomas de Decisión en Recorridos
 * Objetivo: Añadir una toma de decisión (if) dentro del bucle foreach para
 * detectar e imprimir si un artículo supera un umbral de precio establecido de 50€.
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

echo "<h3>Evaluación de Umbral de Precio (Artículos Premium > " . $umbralPrecio . " €):</h3>";
echo "<ul>";

foreach ($articulos as $nombre => $precioBase) {
    // toma de decisión para evaluar la condición lógica booleana

    if ($precioBase > $umbralPrecio) {
        echo "<li>🔴<strong>" . $nombre . "</strong>( " . $precioBase . " €)  -> <span style='color:red;'>Supera el umbral.</span></li>";
    } else {
        echo "<li>🟢<strong>" . $nombre . "</strong>( " . $precioBase . " €)  ->  No supera el umbral.</li>";
    }
}

echo "</ul";
?>