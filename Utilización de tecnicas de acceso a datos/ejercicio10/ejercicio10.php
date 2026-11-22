<?php

$conexion = mysqli_connect("localhost", "root", "", "videotutoria8");

$sql = "SELECT MIN(precio) AS precio_minimo FROM componentes";
$resultado = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_assoc($resultado);

echo "El precio del componente más barato es: " . $fila['precio_minimo'] . "€";

mysqli_close($conexion);
?>