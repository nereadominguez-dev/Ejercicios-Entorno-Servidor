<?php
$conexion = mysqli_connect("localhost", "root", "", "Videotutoria8");

$sql = "DELETE FROM tareas WHERE completada = 1";

if (mysqli_query($conexion, $sql)) {
    echo "Tareas completadas eliminadas correctamente.";
} else {
    echo "Error al eliminar: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>