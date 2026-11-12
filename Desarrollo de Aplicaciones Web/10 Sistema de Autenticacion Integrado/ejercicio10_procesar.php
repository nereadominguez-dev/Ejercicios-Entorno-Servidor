<?php
// Módulo de funciones sanitizadoras y procesadoras
function sanitizarInput($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

function generarResumenTicket($nombre, $email, $tipo, $detalle) {
    $ticketId = rand(1000, 9999);
    $salida = "<h3>Ticket #$ticketId Creado</h3>";
    $salida .= "<p><strong>Cliente:</strong> $nombre ($email)</p>";
    $salida .= "<p><strong>Tipo de Incidencia:</strong> $tipo</p>";
    $salida .= "<p><strong>Detalle:</strong> $detalle</p>";
    return $salida;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = sanitizarInput($_POST['nombre'] ?? '');
    $email = sanitizarInput($_POST['email'] ?? '');
    $tipo = sanitizarInput($_POST['tipo'] ?? '');
    $detalle = sanitizarInput($_POST['detalle'] ?? '');

    echo "<h1>Confirmación de Soporte Técnico</h1>";
    echo generarResumenTicket($nombre, $email, $tipo, $detalle);
}
?>