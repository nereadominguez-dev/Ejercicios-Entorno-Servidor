<?php
/**
 * EJERCICIO 8: Ticket de Compra y Facturación Detallada
 * Objetivo: Generar una factura dinámica estructurando una tabla HTML limpia
 * donde se calcula la base total de compra, IVA, descuentos acumulados y el importe final neto.
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
$ivaFactor = 0.21;

//Inicialización de totales generales
$subtotalGeneral = 0.0;
$totalDescuentos = 0.0;
$totalIVA = 0.0;
$totalNetoAPagar = 0.0;

echo "<h3>FACTURA DINÁMICA DE COMPRA</h3>";
echo "<table border='1' cellpadding='10' style='border-collapse: collapse; width: 100%; font-family:sans-serif;'>";
echo "<tr style='background-color:#f1f5f9; color:#1e3a8a;'><th>Artículo</th><th>Precio Base</th><th>Descuento</th><th>Precio Rebajado</th><th>IVA (21%)</th><th>Total Artículo</th></tr>";

foreach ($articulos as $nombre => $precioBase) {
    //1. Cálculos de Descuento
    $descuento = 0.0;
    if ($precioBase > $umbralPrecio) {
        $descuento = $precioBase * $descuentoFactor;
    }
    $precioConDescuento = $precioBase - $descuento;

    //2. Cálculos de IVA sobre el precio rebajado
    $iva = $precioConDescuento * $ivaFactor;
    $totalArticulo = $precioConDescuento + $iva;

    //3. Acumulqación en totales generales de factura
    $subtotalGeneral += $precioBase;
    $totalDescuentos += $descuento;
    $totalIVA += $iva;
    $totalNetoAPagar += $totalArticulo;

    echo "<tr>";
    echo "<td>" . $nombre . "</td>";
    echo "<td>" . number_format($precioBase, 2) . " €</td>";
    echo "<td>" . ($descuento > 0 ? "-" . number_format($descuento, 2) . " € (10%)" : "0.00 €") . "</td>";
    echo "<td>" . number_format($precioConDescuento, 2) . " €</td>";
    echo "<td>" . number_format($iva, 2) . " €</td>";
    echo "<td><strong>" . number_format($totalArticulo, 2) . " €</strong></td>";
    echo "</tr>";

}    
echo "<tr style='background-color: #f8fafc; font-weight: bold;'>";
echo "<td colspan='4' align='right'>Subtotal Base de la Compra:</td>";
echo "<td colspan='2'>" . number_format($subtotalGeneral, 2) . " €</td>";
echo "</tr>";

echo "<tr style='background-color: #f8fafc; font-weight: bold; color: #ef4444;'>";
echo "<td colspan='4' align='right'>Total Descuentos Promocionales:</td>";
echo "<td colspan='2'>-" . number_format($totalDescuentos, 2) . " €</td>";
echo "</tr>";

echo "<tr style='background-color: #f8fafc; font-weight: bold;'>";
echo "<td colspan='4' align='right'>Impuesto sobre el Valor Añadido (IVA):</td>";
echo "<td colspan='2'>" . number_format($totalIVA, 2) . " €</td>";
echo "</tr>";

echo "<tr style='background-color: #f1f5f9; font-weight: bold; font-size: 1.1em; color: #1e3a8a;'>";
echo "<td colspan='4' align='right'>TOTAL NETO A PAGAR:</td>";
echo "<td colspan='2'>" . number_format($totalNetoAPagar, 2) . " €</td>";
echo "</tr>";

echo "</table>";
?>