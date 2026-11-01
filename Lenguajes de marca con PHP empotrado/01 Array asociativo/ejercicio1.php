<?php
/**
 * EJERCICIO 1: Declaración de Datos Compuestos
 * Objetivo: Crear un array asociativo con artículos tecnológicos y sus precios base.
 * Se verifica la estructura en memoria mediante var_dump como se indica en la sección 3.3.
 */

//Declaración del array asociativo (Clave: nombre artículo => valor: precio base)

$articulos = array(
    "Portátil Pro" => 850.00,
    "Ratón Ergonómico" => 45.50,
    "Teclado Mecánico" => 120.00,
    "Auriculares Inalámbricos" => 89.90,
    "Monitor 4K IPS" => 349.99,
    "Alfombrilla XL" => 19.99
);

//Volcado estructural de tipo de dato compuesto en pantalla para verificar su estructura
echo "<h3>Estructura del Array de Artículos (var_dump):</h3>";
echo "<pre>";
var_dump($articulos);
echo "</pre>";
?>