<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Actividad PHP - Gestión de Eventos</title>
</head>

<body>

    <h1>Gestión de Eventos Tecnológicos</h1>

    <?php

    // --------------------------------------------------
    // EJERCICIO 1
    // GENERADOR DE CREDENCIALES
    // --------------------------------------------------

    function generarCredencial(
        $nombre,
        $evento,
        $especialidad
    ) {
        $resultado = "<p>Asistente: $nombre | Evento: $evento | Especialidad: $especialidad </p>";
        return $resultado;

    }

    echo "<h2>Ejercicio 1</h2>";

    echo generarCredencial(
        "Ana",
        "IA Generativa",
        "Desarrolladora Web"
    );

    ?>

    <hr>

    <h2>Ejercicio 2</h2>

    <form method="GET">

        <label>Número de entradas:</label>
        <input type="number" name="entradas" min="1" required>

        <br><br>

        <label>Código promocional:</label>
        <input type="text" name="codigo">

        <br><br>

        <input type="submit" value="Calcular importe">

    </form>

    <?php

    // --------------------------------------------------
    // EJERCICIO 2
    // CALCULAR IMPORTE
    // --------------------------------------------------

    function calcularImporte(
        $entradas,
        $codigo
    ) {

        $precioEntrada = 25;
        $factorIva = 1.21;
        $descuentoFactor = 0.50;

        $subtotal = $precioEntrada * $entradas; 

        $codigoLimpio = strtoupper(trim($codigo)); 
        if ($codigoLimpio === 'OFERTA') {           
            $subtotal *= $descuentoFactor;          
        }
        
        $precioFinal = $subtotal * $factorIva;

        return $precioFinal;

    }

    if (isset($_GET["entradas"])) {

        echo "<p>";

        echo "Importe total: "
            . calcularImporte(
                $_GET["entradas"],
                $_GET["codigo"]
            )
            . " €";

        echo "</p>";

    }

    ?>

    <hr>

    <h2>Ejercicio 3</h2>

    <?php

    // --------------------------------------------------
    // EJERCICIO 3
    // VALIDACIÓN DE ACCESO
    // --------------------------------------------------

    function validarAcceso(
        $usuario,
        $contrasena,
        $rol = "invitado"
    ) {
        
       if (trim($contrasena) === 'DWES2026') {  
            if (trim($rol) === 'administrador') {
                 return "<p>Acceso completo concedido para $usuario</p>";
            } else {
                echo "<p>Acceso limitado concedido para $usuario</p>";
            }    
    }  else {
        return "<p>Acceso denegado</p>";
        }
            
    }

    echo "<p>";
    echo validarAcceso(
        "Ana",
        "DWES2026",
        "administrador"
    );
    echo "</p>";

    echo "<p>";
    echo validarAcceso(
        "Pedro",
        "DWES2026"
    );
    echo "</p>";

    echo "<p>";
    echo validarAcceso(
        "Laura",
        "1234"
    );
    echo "</p>";

    ?>

</body>

</html>