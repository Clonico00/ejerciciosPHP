<?php
require_once 'autoloader.php';
require_once 'config/config.php';
use Controllers\PacienteController;

$controlador = new PacienteController;
$controlador->mostrarTodos();
$controlador->buscarNombre();