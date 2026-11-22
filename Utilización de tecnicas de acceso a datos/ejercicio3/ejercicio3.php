<?php
// nueva forma de conectar a la BS por PDO porque nos permite conectarnos
// a diferentes motores de BBDD como Mysql - PostgreSQL - SQLite
// para usar PDO se usa conexión con el parámetro DSN "Data Source Name"

// mysql es el motor de la BS que se usamos
// host=localhost es el servidor donde se encuentra mysql
// dbname=Videotutoria8 es nombre de nuestra base de datos
$conexion = new PDO("mysql:host=localhost;dbname=Videotutoria8", "root", "");

$sql = "SELECT DISTINCT ciudad FROM clientes";
// $stmt es una variable significa statement (sentencia o instrucción)
// prepare() prepara la consulta SQL para ejecutarla pero no la ejecuta
$stmt = $conexion->prepare($sql); 
$stmt->execute();

while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) { //PDO:: significa que va a usar una constante de la clase PDO
    echo "Ciudad: " . $fila['ciudad'] . "<br>";
}
?>