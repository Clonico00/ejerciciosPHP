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
        /*mandar a indexLogeado.php usando pages*/
        echo "Bienvenido";
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
                echo "Login correcto";
                $_SESSION['login'] = true;
                echo "Login correcto";
                header("Location: index.php?controller=Usuario&action=index");
            } else {
//                $_SESSION['login'] = false;
                echo "Error al iniciar sesion";
            }
        }
    }

}