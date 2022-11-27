<?php

namespace Controllers;

use Lib\Pages;
use Services\UsuarioService;

class UsuarioController
{
    private UsuarioService $usuarioService;
    private Pages $pages;

    public function __construct()
    {
        $this->usuarioService = new UsuarioService();
        $this->pages = new Pages();
    }

    public function index()
    {
        echo "<h2>Bienvenido </h2>";
    }

    public function registro()
    {
        echo "Controlador Usuarios, Accion registro";
    }

    public function login()
    {
        if (isset($_POST)) {
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
            $result = $this->usuarioService->login($usuario, $password);
            if ($result) {
                $_SESSION['login'] = true;
                echo "<h2>Logeado correctamente</h2>";
                header("Location: indexLogeado.php");
            } else {
                $_SESSION['login'] = false;

            }
        }
    }

}