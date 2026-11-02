<?php
/**
 * EJERCICIO 9: Estructuras de Selección Múltiple
 * Objetivo: Reemplazar el IVA estático mediante una estructura switch-case.
 * Se determina el tipo de IVA (General 21%, Reducido 10%, Superreducido 4%)
 * según el tipo asignado de manera limpia.
 */

// Estructura de array de artículos que asocia a cada artículo su tipo de categoría
$categorias = array(
    "Portátil Pro" => "tecnologia",
    "Ratón Ergonómico" => "tecnologia",
    "Libro de Servidores" => "educacion",
    "Suscripción Educativa" => "educacion",
    "Café de Especialidad" => "alimentacion",
    "Alfombrilla XL" => "tecnologia"
);

$precios = array(
    "Portátil Pro" => 850.00,
    "Ratón Ergonómico" => 45.50,
    "Libro de Servidores" => 25.00,
    "Suscripción Educativa" => 12.00,
    "Café de Especialidad" => 18.90,
    "Alfombrilla XL" => 19.99
);

echo "<h3>Cálculo de IVA Segmentado por Selección Múltiple (switch-case):</h3>";
echo "<table border='1' cellpadding='8' style='border-collapse: collapse;'>";
echo "<tr><th>Artículo</th><th>Categoría</th><th>Precio Base</th><th>% IVA Aplicado</th><th>IVA Calculado</th></tr>";

foreach ($precios as $nombre => $precioBase) {
    $categoria = $categorias[$nombre];
    $tasaIva = 0.0;

    // Selección múltiple para asignar tasas de IVA según la categoría (sección 3.1)
    switch ($categoria) {
        case "tecnologia":
            $tasaIva = 0.21; //21% General
            $porcentajeTxt = "21% (General)";
        case "alimentacion":
            $tasaIva = 0.10; // 10% reducido
            $porcentajeTxt = "10% (Reducido)";
            break;
        case "educacion":
            $tasaIva = 0.04; // 4% superreducido
            $porcentajeTxt = "4% (Superreducido)";
            break;
        default:
            $tasaIva = 0.21;
            $porcentajeTxt = "21% (Predeterminado)";
            break;
    }

    $ivaCalculado = $precioBase * $tasaIva;

    echo "<tr>";
    echo "<td>" . $nombre . "</td>";
    echo "<td>" . ucfirst($categoria) . "</td>";
    echo "<td>" . number_format($precioBase, 2) . " €</td>";
    echo "<td>" . $porcentajeTxt . "</td>";
    echo "<td>" . number_format($ivaCalculado, 2) . " €</td>";
    echo "</tr>";
}

echo "</table>";
?>