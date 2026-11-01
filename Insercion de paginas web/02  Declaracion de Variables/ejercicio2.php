<!-- Declarar variables que representen un producto ficticio usando distintos tipos primitivos (string,
float, int, boolean)-->

<?php
// Declaración de variables con tipos de datos primitivos para un producto
// Según la sintaxis de PHP, las variables comienzan con el símbolo $

$nombreProducto = "Portátil Profesional";    // String
$precioProducto = 899.99;                    //Float
$stockProducto = 15;                        //Int
$disponibilidadProducto = true;             //Booleano

//Mostramos la información básica en formato texto plano

echo "--- DATOS DEL PRODUCTO --- \n";
echo "Producto: " . $nombreProducto . "\n";
echo "Precio Producto: " . $precioProducto . " EUR\n";
echo "Stock: " . $stockProducto . " unidades\n";
echo "Disponible: " . ($disponibilidadProducto ? "SI" : "NO") . "\n";