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
            if (!isset($_COOKIE['intentos'])) {
                setcookie('intentos', 1, time() + 120);
            } else {
                setcookie('intentos', $_COOKIE['intentos'] + 1, time() + 120);
            }
            if (isset($_COOKIE['intentos']) && $_COOKIE['intentos'] < 3) {
                $usuario = $_POST['usuario'];
                $password = $_POST['password'];
                $result = $this->usuarioService->login($usuario, $password);
                $result2 = $this->usuarioService->comprobarRol($usuario);

                if ($result) {
                    $_SESSION['login'] = true;
                    setcookie('intentos', 0, time() + 120);
                    echo "<h2>Logeado correctamente</h2>";
                    if ($result2) {
                        echo "<h2>Es administrador</h2>";
                        $_SESSION['admin'] = true;
                        $this->pages->render('../index');

                    } else {
                        echo "<h2>No es administrador</h2>";
                        $_SESSION['admin'] = false;
                        $this->pages->render('../index');
                    }
                } else {
                    $_SESSION['login'] = false;
                    echo "<h2>Usuario o contraseña incorrectos</h2>";
                    $this->pages->render('../index');

                }
            } else {
                echo "<h2>Demasiados intentos, espere 2 minutos</h2>";
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
                $this->pages->render('../index');
            } else {
                echo "<h2>Error al registrarse</h2>";
            }
        }

    }


}