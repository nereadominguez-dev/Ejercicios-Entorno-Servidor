<?php
$conexion = mysqli_connect("localhost", "root", "", "Videotutoria8");

$sql = "INSERT INTO usuarios (username, email) VALUES ('usuario1', 'user@email.com')";

if (mysqli_query($conexion, $sql)) {
    echo "Usuario insertado correctamente.";
} else {
    echo "Error al insertar: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>