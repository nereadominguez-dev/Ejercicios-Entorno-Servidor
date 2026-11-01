<!--Enunciado: Evaluar si un producto está disponible mediante una estructura condicional basada en su cantidad
de stock.-->
<!DOCTYPE html>
<head>
    <meta charset="UTF">
    <title> EJERCICIO 4 - DISPONIBILIDAD DE PRODUCTO</title>
</head>
<body>

    <?php
    $nombreProducto = "Teclado Mecánico RGB";
    $stockActual = ; //Al ser 0, evaluará como falso en contextos de disponibilidad

    //El booleano se determina de manera dinámica bañsandonos en el stock
    $disponible = ($stockActual > 0);
    ?>

    <h1>Disponibilidad del Producto</h1>
    <p>Producto: <strong><?php echo $nombreProducto; ?> </strong></p>

    <?php if ($disponible): ?>
        <p style="color: green; font-weight: bold;">¡El producto se encuentra listo para enviar!<p>
    <?php else: ?>
        <p style="color: red; font-weight: bold;">Lo sentimos, el producto está agotado.</p>        
        <?php endif; ?>
</body>
</html>