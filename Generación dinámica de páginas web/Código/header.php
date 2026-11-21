<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) . " | " . $config['site_name'] : $config['site_name']; ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f8fafc; }
        header { background: #1e3a8a; color: white; padding: 1.5rem 2rem; }
        nav a { color: #93c5fd; text-decoration: none; margin-right: 15px; font-weight: bold; }
        main { max-width: 900px; margin: 2rem auto; padding: 2rem; background: white; border-radius: 8px; }
    </style>
</head>
<body>
    <header>
        <h1><?php echo htmlspecialchars($config{'site_name'}): ?></h1>
        <nav>
            <a href="index.php?page=inicio">Inicio</a>
            <a href="index.php?page=usuarios">Usuarios</a>
            <a href="index.php?page=contacto">Contacto</a>
        </nav>
    </header>
    <main>