<?php
/**
 * EJERCICIO 5: Descuento Condicional Promocional
 * Objetivo: Aplicar de forma dinámica un descuento promocional del 10%
 * únicamente a los artículos cuyo precio base supere el umbral de 50€.
 */

$articulos = array(
    "Portátil Pro" => 850.00,
    "Ratón Ergonómico" => 45.50,
    "Teclado Mecánico" => 120.00,
    "Auriculares Inalámbricos" => 89.90,
    "Monitor 4K IPS" => 349.99,
    "Alfombrilla XL" => 19.99
);

$umbralPrecio =50.00;
$descuentoPromocional = 0.10; // 10% de descuento

echo "<h3>Aplicación Dinámica de Descuentos Condicionales:</h3>";
echo "<table border='1' cellpadding='10' style='border-collapse: collapse;'>";
echo "<tr><th>Artículo</th><th>Precio Base</th><th>Descuento Aplicado</th><th>Precio con Descuento</th></tr>";

foreach ($articulos as $nombre => $precioBase) {
    // Evaluamos si el precio base supera el umbral para aplicar el descuento
    if ($precioBase > $umbralPrecio) {
        $ahorro = 0.0;
        $precioFinal = $precioBase;

        //Toma de decisión binaria mediante if y else

        if ($precioBase > $umbralPrecio) {}
        $ahorro = $precioBase * $descuentoPromocional;
        $precioFinal = $precioBase - $ahorro;
        $mensajeDescuento = "10% (-" . number_format($ahorro, 2) . " €)";
    } else {
        $mensajeDescuento = "Sin descuento (no supera umbral de precio)";
    }

    echo "<tr>";
    echo "<td>" . $nombre . "</td>";
    echo "<td>" . number_format($precioBase, 2) . " €</td>";
    echo "<td>" . $mensajeDescuento . "</td>";
    echo "<td><strong>" . number_format($precioFinal, 2) . " €</strong></td>";
    echo "</tr>";
}

echo "</table>";
?>