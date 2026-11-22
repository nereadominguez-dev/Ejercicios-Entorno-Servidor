<?php
$conexion = mysqli_connect("localhost", "root", "", "Videotutoria8");

$sql = "SELECT COUNT(*) AS total_libros FROM libros";
$resultado = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_assoc($resultado);

echo "Total de libros registrados: " . $fila['total_libros'];

mysqli_close($conexion);
?>