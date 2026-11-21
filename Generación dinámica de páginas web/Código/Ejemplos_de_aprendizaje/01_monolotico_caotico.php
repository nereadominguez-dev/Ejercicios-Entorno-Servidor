<?php//Este archivo es independiente y monolítico (código de ejemplo sin dependencias)
$site_name = "Portal Informativo Antiguo";
$usuarios = ["Ana Martínez", "María Rodríguez"];
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $site_name; ?></title>
    </head>
    <body>
        <h1><?php echo $site_name; ?></h1>
        <ul>
            <?php foreach ($usuarios as $u): ?>
                <li><?php echo $u; ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>

