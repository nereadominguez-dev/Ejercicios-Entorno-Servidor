<!-- Enunciado: Crear un script completo que declare datos de un producto (nombre, precio, stock,
disponibilidad), aplique casting y renderice una ficha limpia. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ficha de Producto de Servidor</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .product-card {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            width: 350px;
            padding: 24px;
            border-top: 5px solid #005088;
        }
        .product-title {
            font-size: 24px;
            font-weight: bold;
            color: #005088;
            margin: 0 0 10px 0;
        }
        .product-price {
            font-size: 20px;
            color: #e67e22;
            font-weight: 600;
            margin-bottom: 15px;
        }
        .product-stock {
            font-size: 14px;
            color: #7f8c8d;
            margin-bottom: 20px;
        }
        .status-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .in-stock { background-color: #d4edda; color: #155724; }
        .out-of-stock { background-color: #f8d7da; color: #721c24; }
    </style>
</head>
<body>

    <?php
        // Declaración de datos del producto ficticio
        $nombreRaw = "Cámara Réflez Profesional";
        $precioRaw = "1249.95"; // Recibido originalmente como String
        $stockRaw = "8";  // Recibido originalmente como String

        // Aplicamos funciones de conversión de tipos (Type Casting)
        $nombre = (string) $nombreRaw;
        $precio = (float) $precioRaw;
        $stock = (int) $stockRaw;

        // Evaluamos disponibilidad lógica según stock
        $disponible = ($stock > 0);

    ?>

    <div class="product-card">
        <div class="product-title"><?php echo $nombre; ?></div>
        <div class="product-price"><?php echo number_format($precio, 2, ', ', '.'); ?> €</div>
        <div class="product-stock">Unidades en almacén: <?php echo $stock; ?> </div>

        <div>
            <?php if ($disponible): ?>
                <span class="status-badge in-stock">Disponible para envío</span>
            <?php else: ?>
                <span class="status-badge out-of-stock">Agotado temporalmente</span>
            <?php endif; ?>
        </div>
    </div>

</body>
</html>
