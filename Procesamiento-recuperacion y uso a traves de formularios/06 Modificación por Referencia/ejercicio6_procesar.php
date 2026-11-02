<?php
// Función que modifica una variable por referencia anexando información
/* & delante de $mensajeBase significa que la variable se está pasando por 
referencia y no por valor*/
function aplicarDescuento(&$mensajeBase, $codigo) {
    //strtoupper() convierte a mayúsculas $codigo
    if (strtoupper(trim($codigo)) === 'PROMO2026') {
        $mensajeBase .= " ¡Cupón válido! Se ha aplicado un 20% de descuento.";
    } else {
        $mensajeBase .= " Cupón no reconocido. Se aplicará la tarifa estándar.";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $codigo = $_POST['cupon'] ?? '';
    $mensaje = "Estado de tu solicitud:";
    
    aplicarDescuento($mensaje, $codigo);

    echo "<h1>Resultado del Cupón</h1>";
    echo "<p>$mensaje</p>";
}
?>