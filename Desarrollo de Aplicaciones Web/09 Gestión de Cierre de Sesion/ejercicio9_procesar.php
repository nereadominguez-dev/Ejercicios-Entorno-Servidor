<?php
// Función auxiliar para validar credenciales
function esClaveValida($clave) {
    // Comprobar que la clave tenga al menos 6 caracteres
    return strlen(trim($clave)) >= 6;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = htmlspecialchars(trim($_POST['usuario'] ?? ''));
    $clave = $_POST['clave'] ?? '';

    echo "<h1>Estado del Registro</h1>";
    if (esClaveValida($clave)) {
        echo "<p>Usuario <strong>$usuario</strong> registrado correctamente.</p>";
    } else {
        echo "<p style='color:red;'>Error: La contraseña debe tener al menos 6 caracteres.</p>";
    }
}
?>