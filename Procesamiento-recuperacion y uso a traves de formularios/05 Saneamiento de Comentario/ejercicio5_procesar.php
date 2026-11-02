<?php
// Comprobar que el formulario se ha enviado mediante POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener el comentario enviado
    $comentario = $_POST["comentario"];

    //Sanitizar el texto para evitar inyecciones HTML/JS
    /*ENT_QUOTES Cuando un usuario escribe texto en un formulario, puede usar
     tanto comillas dobles (") como comillas simples ('). Si esas comillas 
     se van a mostrar luego dentro del código HTML de tu página (por ejemplo,
     dentro de un atributo como <input value="...">), un usuario 
     malintencionado podría aprovecharlas para cerrar el atributo antes de 
     tiempo e intentar inyectar código malicioso (ataques de tipo XSS o 
     inyección de atributos).*/
    $comentarioSeguro = htmlspecialchars($comentario, ENT_QUOTES, 'UTF-8'); 
} else{
    die("Acceso no permitido"); //die es un función nativa de PHP "morir/parar"
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Comentario Procesado</title>
    </head>
    <body>
        <h2>Comentario recibido</h2>

        <p><strong>Texto saneado:</strong></p>
        <div style="border:1px solid #cc; padding:10pz; wigth:500px;">
            <?php echo nl2br($comentarioSeguro); ?> 
            <!-- "nl2br()" es NewLine to Break analiza el texto en busca de saltos
             ocultos de línea y reemplaza automáticamente por <br> ya que si echo
             imprime el texto tal cual lo recibe lo pintará todo en una misma línea
              -->
        </div>

        <br>
        <a href="ejercicio5.html formulario</a>
    </body>
</html>