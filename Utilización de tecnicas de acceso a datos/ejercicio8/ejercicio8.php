<?php
$conexion = mysqli_connect("localhost", "root", "", "Videotutoria8");

$sql = "UPDATE articulos SET precio = 129.99 WHERE nombre = 'Monitor'";

if (mysqli_query($conexion, $sql)) {
    echo "Precio actualizado con éxito.";
} else {
    echo "Error al actualizar: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>