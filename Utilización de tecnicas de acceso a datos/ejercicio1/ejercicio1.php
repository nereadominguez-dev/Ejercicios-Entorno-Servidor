<?php
// mysqli es la conexión diseñada específicamente para MYSQL y MariaDB
// Para ver cual es la contraseña de tu usuario root debes acceder al archivo
// C:\xampp\phpMyAdmin\config.inc

$conexion = mysqli_connect("localhost", "root", "", "Videotutoria8");

$sql = "SELECT nombre, precio FROM productos";
$resultado = mysqli_query($conexion, $sql);  //Instrucción procedimental de PHP hacia mysql "mysqli_query"

while ($fila = mysqli_fetch_assoc($resultado)) {  
    echo "Producto: " . $fila['nombre'] . " - Precio: " . $fila['precio'] . "€<br>";
}

mysqli_close($conexion);
?>