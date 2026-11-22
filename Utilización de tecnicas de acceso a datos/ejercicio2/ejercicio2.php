<?php
$conexion = new mysqli("localhost", "root", "", "Videotutoria8");
$sql = "SELECT categoria, SUM(monto) AS total FROM ventas GROUP BY categoria";
$resultado = $conexion->query($sql);  // Instrucción Orientada a Objeto POO utilizando método "$conexion->query()"
                                        // "->" es el operador de acceso a objetos, a su método de consulta sql "query($sql)"
while ($fila = $resultado->fetch_assoc()) {  //fetch_assoc() obtiene una fila de resultado de la consulta y la devuelve como array asociativo.
    echo "Categoría: " . $fila['categoria'] . " - Total: " . $fila['total'] . " €<br>";
}

$conexion->close();
?>