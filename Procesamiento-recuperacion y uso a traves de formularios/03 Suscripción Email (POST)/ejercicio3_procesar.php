<?php
//Función para sanitizar el correo electrónico
function sanitizarEmail($email) {
    /* filter_var() es una función potente de PHP que filtra y valida datos: emails, urls, ip
    recibe dos argumentos (trim($email), FILTER_SANITIZE_EMAIL)
    FILTER_SANITIZE_EMAIL -> es la regla del filtro, elimina caracteres como 
    etiquetas HTML, <script>, espacios, '', conserva solo letras, números y 
    simbolos que sí están permitidos (@ . - _ +)
    */
    return filter_var(trim($email), FILTER_SANITIZE_EMAIL);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $emailRecibido = $_POST['email'] ?? '';
    $emailValido = sanitizarEmail($emailRecibido);

    echo "<h1>Suscripción Confirmada</h1>";
    echo "<p>El correo <strong>$emailValido</strong>ha sido añadido a nuestra lista.</p>";
}
?>