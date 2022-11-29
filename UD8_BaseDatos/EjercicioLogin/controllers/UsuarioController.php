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
    }

    public function login()
    {
        if (isset($_POST)) {
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
            $result = $this->usuarioService->login($usuario, $password);
            $result2 = $this->usuarioService->comprobarRol($usuario);
            if ($result) {
                $_SESSION['login'] = true;
                if ($result2) {
                    $_SESSION['admin'] = true;
                    $this->pages->render('../index');

                } else {
                    $_SESSION['admin'] = false;
                    header("Location: index.php");
                }
            } else {
                $_SESSION['login'] = false;

            }
        }
    }
    public function registro()
    {
        if (isset($_POST)) {
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
            $result = $this->usuarioService->insert($usuario, $password);
            if ($result) {
                echo "<h2>Registrado correctamente</h2>";
                header("Location: index.php");
            } else {
                echo "<h2>Error al registrarse</h2>";
            }
        }

    }



}