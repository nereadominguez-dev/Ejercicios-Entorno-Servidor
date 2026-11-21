<?php
// Cargar configuración de la raíz
require_once '../config.php';

$pageTitle = "Panel Controlador Base";
$contenidoMensaje = "Mensaje procesado por el controlador en la subcarpeta de pruebas.";

// Cargar plantillas desde la raíz y desde views/
include '../header.php';
include '../views/inicio.php';
include '../footer.php';