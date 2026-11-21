<?php
// 1. Cargar dependencias globales desde la raíz
require_once 'config.php';

// 2. Determinar la página solicitada por parámetro GET
$paginaSolicitada = isset($_GET['page']) ? strtolower(trim($_GET['page'])) : 'inicio';

// 3. Lógica de negocio y asignación de vistas (subcarpeta views/)
switch ($paginaSolicitada) {
    case 'inicio':
        $pageTitle = "Inicio - Portal Modular";
        $contenidoMensaje = "¡Bienvenido! Proyecto modularizado en carpetas independientes.";
        $vista = 'views/inicio.php'; // Ruta desde la raíz
        break;

    case 'usuarios':
        $pageTitle = "Directorio de Usuarios";
        $listaUsuarios = [
            ['nombre' => 'Ana Martínez', 'email' => 'ana.martinez@empresa.com'],
            ['nombre' => 'Carlos López', 'email' => 'carlos.lopez@empresa.com'],
            ['nombre' => 'María Rodríguez', 'email' => 'maria.rodriguez@empresa.com']
        ];
        $vista = 'views/usuarios.php'; // Ruta desde la raíz
        break;

    case 'contacto':
        $pageTitle = "Contacto";
        $vista = null;
        break;

    default:
        header("HTTP/1.0 404 Not Found");
        $pageTitle = "Página No Encontrada";
        $vista = '404';
        break;
}

// 4. Renderizado modular del layout (archivos en la raíz y la carpeta views)
include 'header.php';

if ($vista === '404') {
    echo "<h2>404 - Página No Encontrada</h2><p>La sección no existe.</p>";
} elseif ($paginaSolicitada === 'contacto') {
    echo "<h2>Contacto</h2><p>Escribe a: <strong>" . htmlspecialchars($config['admin_email']) . "</strong></p>";
} elseif (file_exists($vista)) {
    include $vista; // Carga la plantilla desde views/
} else {
    echo "<p>Error: No se encontró el archivo de la vista.</p>";
}

include 'footer.php';