<?php
$conexion = mysqli_connect("localhost", "root", "", "Videotutoria8");

$sql = "SELECT nombre FROM empleados LIMIT 2";
$resultado = mysqli_query($conexion, $sql);

while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "Empleado: " . $fila['nombre'] . "<br>";
}

mysqli_close($conexion);
?>