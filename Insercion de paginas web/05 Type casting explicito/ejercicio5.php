<!-- Enunciado: Forzar la conversión temporal de tipos de variables numéricas recibidas como cadenas de texto
(String -->

<?php
// PHP realiza conversiones automáticas de tipo siempre que sea posible.
// En este ejercicio forzamos conversiones de tipo temporales (Type Casting).

$precioCadena = "129.99"; // Tipo String
$cantidadUnidades = "5"; // Tipo String

//Conversió explícita (Type Casting) de String a Float e Integer

$precioFloat = (float) $precioCadena;
$unidadesInt = (int) $cantidadUnidades;

$totalCompra = $precioFloat + $unidadesInt; // Operación aritmética con tipos ya convertidos

echo "---CONVERSIÓN DE TIPOS (TYPE CASTING)--- \n";
echo "Precio original (String): " . $precioCadena . " -> Convertido a Float: " . var_export($precioFloat, true) . "\n";
echo "Unidades oriinales (String): " . $cantidadUnidades . " -> Convertido a Integer: " . var_export($unidadesInt, true) . "\n";
echo "Total de la compra calculado: " . $totalCompra . " EUR\n";
?>