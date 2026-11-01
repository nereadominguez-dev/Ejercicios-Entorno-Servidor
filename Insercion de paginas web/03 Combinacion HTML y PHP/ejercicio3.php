<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 - Integración Dinámica</title>
    <style>
        body { font-family: sans-serif; margin: 30px; }
        .producto-card { border: 1px solid #ccc; padding: 20px; max-width: 300px; border-radius: 8px; }
    </style>
</head>
<body>
    <?php
    // Datos del producto ficticio
    $nombre = "Auticulares Inalámbricos";
    $precio = 49.95;
    $disponible = true;
    ?>
    <div class="producto-card">
        <!-- Incrustación directa de variables PHP dentro del marcado HTML -->
         <h2><?php echo $nombre; ?></h2>
         <p>Precio: <strong><?php echo $precio; ?> </strong> EUR</p>
         <p>Estado: <?php echo $disponible ? "Disponible en Tienda " : "Agotado"; ?></p>
</div>
</body>
</html>
