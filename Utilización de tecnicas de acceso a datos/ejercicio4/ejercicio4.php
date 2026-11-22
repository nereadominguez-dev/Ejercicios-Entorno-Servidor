<?php
$conexion = mysqli_connect("localhost", "root", "", "Videotutoria8");

$sql = "SELECT nombre, nota FROM alumnos ORDER BY nota DESC";
$resultado = mysqli_query($conexion, $sql);

while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "Alumno: " . $fila['nombre'] . " - Nnota: " . $fila['nota'] . "<br>";
}

mysqli_close($conexion);
?>