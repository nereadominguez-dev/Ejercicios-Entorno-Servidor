<?php
// Usamos ../ para retroceder a la raíz del proyecto
require_once '../config.php';

$pageTitle = "Prueba de Inclusiones";

include '../header.php';

echo "<h2>Prueba de Inclusión Segura desde Subcarpeta</h2>";
echo "<p>Cargando elementos con rutas relativas hacia la raíz (../).</p>";

include '../footer.php';