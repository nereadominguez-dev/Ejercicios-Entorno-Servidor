<?php
require_once '../config.php';

$action = isset($_GET['page']) ? $_GET['page'] : 'inicio';

switch ($action) {
    case 'usuarios':
        $pageTitle = "Gestión de Usuarios";
        $listaUsuarios = [
            ['nombre' => 'Ana Martínez', 'email' => 'ana@ejemplo.com'],
            ['nombre' => 'Carlos López', 'email' => 'carlos@ejemplo.com']
        ];
        $vistaTarget = '../views/usuarios.php';
        break;

    case 'inicio':
    default:
        $pageTitle = "Bienvenida";
        $contenidoMensaje = "Prueba de enrutador desde carpeta secundaria.";
        $vistaTarget = '../views/inicio.php';
        break;
}

include '../header.php';
if (file_exists($vistaTarget)) {
    include $vistaTarget;
} else {
    echo "<h2>404 - Página No Encontrada</h2>";
}
include '../footer.php';