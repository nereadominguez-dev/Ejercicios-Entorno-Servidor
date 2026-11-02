<?php
/**
 * EJERCICIO 10: Integración Final y Carrito Multidimensional Completo
 * Objetivo: Integrar arrays multidimensionales complejos, bucles de recorrido,
 * selección de IVA mediante switch-case y descuentos condicionales if-else
 * en un sistema unificado y maquetado.
 */

// Array compuesto multidimensional dinámico (Clave => Array con Categoría, Precio Base, Cantidad)
$carrito = array(
    "Portátil Pro X1" => array("categoria" => "tecnologia", "precio_base" => 950.00, "cantidad" => 1),
    "Ratón Vertical Ergonómico" => array("categoria" => "tecnologia", "precio_base" => 45.00, "cantidad" => 2),
    "Manual PHP Avanzado" => array("categoria" => "educacion", "precio_base" => 35.00, "cantidad" => 3),
    "Pack Café Colombiano 1kg" => array("categoria" => "alimentacion", "precio_base" => 22.50, "cantidad" => 2),
    "Monitor Curvo UltraWide 34" => array("categoria" => "tecnologia", "precio_base" => 499.00, "cantidad" => 1),
    "Alfombrilla Gamer RGB" => array("categoria" => "tecnologia", "precio_base" => 15.00, "cantidad" => 1)
);

//Variables de umbral de descuento
$umbralPrecioUnitarioDescuento = 50.00;
$factorDescuento = 0.10; // 10% de descuento

//Totales del carrito
$subtotalGeneralBase = 0.0;
$totalDescuentosGeneral = 0.0;
$totalIvaGeneral = 0.0;
$importeFinalGeneral = 0.0;

echo "<h3>TICKET DE FACTURACIÓN INTEGRADO - CAPÍTULO 3</h3>";
echo "<table border='1' cellpadding='10' style='border-collapse: collapse; width: 100%; font-family: sans-serif; font-size:14px;'>";
echo "<tr style='background-color:#1e3a8a; color:#ffffff;'>";
echo "<th>Artículo</th><th>Categoría</th><th>Precio Unitario</th><th>Cant.</th><th>Subtotal Base</th><th>Descuento</th><th>Precio Rebajado</th><th>% IVA</th><th>IVA</th><th>Total Item</th>";
echo "</tr>";

foreach ($carrito as $nombre => $datos) {
    $precioUnitario = $datos["precio_base"];
    $cantidad = $datos["cantidad"];
    $categoria = $datos["categoria"];

    //1. Cálculo base parcial por cantidad
    $subtotalItemBase = $precioUnitario * $cantidad;

    //2. Cálculo de descuento consicional unitario (if)
    $descuentoUnitario = 0.0;
    if ($precioUnitario > $umbralPrecioUnitarioDescuento) {
        $descuentoUnitario = $precioUnitario * $factorDescuento;
    }
    $descuentoTotalItem = $descuentoUnitario * $cantidad;
    $precioRebajadoTotalItem = $subtotalItemBase - $descuentoTotalItem;

    //3. Asignación dinámica de tasa de IVA (switch-case)
    $tasaIva = 0.0;
    switch ($categoria) {
        case "tecnologia":
            $tasaIva = 0.21;
            $ivaPctTxt = "21%";
            break;
        case "alimentacion":
            $tasaIva = 0.10;
            $ivaPctTxt = "10%";
            break;
        case "educacion":
            $tasaIva = 0.04;
            $ivaPctTxt = "4%";
            break;
        default:
            $tasaIva = 0.21;
            $ivaPctTxt = "21%";
            break;
    }

    //4. Cálculo de IVA final sobre el importe neto rebajado
    $ivaTotalItem = $precioRebajadoTotalItem * $tasaIva;
    $importeTotalItemFinal = $precioRebajadoTotalItem + $ivaTotalItem;

    //5. Acumulaciones globales de la compra
    $subtotalGeneralBase += $subtotalItemBase;
    $totalDescuentosGeneral += $descuentoTotalItem;
    $totalIvaGeneral += $ivaTotalItem;
    $importeFinalGeneral += $importeTotalItemFinal;

    // Renderizado de la fila
    echo "<tr>";
    echo "<td><strong>" . $nombre . "</strong></td>";
    echo "<td>" . ucfirst($categoria) . "</td>";
    echo "<td>" . number_format($precioUnitario, 2) . " €</td>";
    echo "<td>" . $cantidad . "</td>";
    echo "<td>" . number_format($subtotalItemBase, 2) . " €</td>";
    echo "<td style='color: " . ($descuentoTotalItem > 0 ? "red" : "black") . ";'>" . ($descuentoTotalItem > 0 ? "-" . number_format($descuentoTotalItem, 2) . " €" : "0.00 €") . "</td>";
    echo "<td>" . number_format($precioRebajadoTotalItem, 2) . " €</td>";
    echo "<td>" . $ivaPctTxt . "</td>";
    echo "<td>" . number_format($ivaTotalItem, 2) . " €</td>";
    echo "<td><strong>" . number_format($importeTotalItemFinal, 2) . " €</strong></td>";
    echo "</tr>";
}

// Renderizado de filas de totales generales de la factura
echo "<tr style='background-color:#f8fafc; font-weight:bold;'>";
echo "<td colspan='8' align='right'>Suma Total de Bases Imponibles:</td>";
echo "<td colspan='2' align='right'>" . number_format($subtotalGeneralBase, 2) . " €</td>";
echo "</tr>";

echo "<tr style='background-color:#f8fafc; font-weight:bold; color:red;'>";
echo "<td colspan='8' align='right'>Descuentos Promocionales Acumulados:</td>";
echo "<td colspan='2' align='right'>-" . number_format($totalDescuentosGeneral, 2) . " €</td>";
echo "</tr>";

echo "<tr style='background-color:#f8fafc; font-weight:bold;'>";
echo "<td colspan='8' align='right'>Cuotas del IVA general de la Factura:</td>";
echo "<td colspan='2' align='right'>" . number_format($totalIvaGeneral, 2) . " €</td>";
echo "</tr>";

echo "<tr style='background-color:#e2e8f0; font-weight:bold; font-size:16px; color:#1e3a8a;'>";
echo "<td colspan='8' align='right'>NETO FINAL GENERAL DE LA COMPRA:</td>";
echo "<td colspan='2' align='right'><strong>" . number_format($importeFinalGeneral, 2) . " €</strong></td>";
echo "</tr>";

echo "</table>";
?>