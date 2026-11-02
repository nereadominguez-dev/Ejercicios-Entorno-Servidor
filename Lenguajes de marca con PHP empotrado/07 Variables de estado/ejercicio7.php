<?php
/**
 * EJERCICIO 7: Contadores y Acumuladores de Control
 * Objetivo: Calcular el número total de artículos con descuento aplicado
 * y acumular la cifra total de ahorro monetario general de la compra.
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
$descuentoFactor = 0.10;

//Inicializamos variables acumuladoras y cntadoreas externas al ciclo a 0
$contadorDescuentos = 0;
$totalAhorrado = 0.0;

foreach ($articulos as $nombre => $precioBase) {
    if ($precioBase > $umbralPrecio) {
        $ahorroIndividual = $precioBase * $descuentoFactor;
        $totalAhorrado += $ahorroIndividual; // Acumulador de ahorro monetario
        $contadorDescuentos++;               // Contador de artículos con descuento
    }
}

echo "<h3>Informe de Métricas del Carrito:</h3>";
echo "<ul>";
echo "<li>Cantidad total de artículos evaluados: <strong>" . count($articulos) . "</strong></li>";
echo "<li>Artículos que han recibido descuento: <strong>" . $contadorDescuentos . "</strong></li>";
echo "<li>Suma total de dinero ahorrado en la promción: <strong>" . number_format($totalAhorrado, 2) . " €</strong></li>";
echo "</ul>";
?>