<?php
// Función con parámetro con valor predeterminado (30 euros/hora)

function calcularPresupuesto($horas, $tarifaHora = 30) {
    //parámetro con un valor predeterminado (o por defecto) = 30
    return $horas * $tarifaHora;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $horas = intval($_POST['horas'] ?? 0);
    $total = calcularPresupuesto($horas);

    echo "<h1>Presupuesto Estimado</h1>";
    echo "<p>Para $horas horas de trabajo, el coste total es de <strong>$total €</strong>(tarifa base 30€/h).</p>";
}
?>
