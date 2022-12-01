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
        session_start();
        if (isset($_POST)) {
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
            $result = $this->usuarioService->login($usuario, $password);
            $result2 = $this->usuarioService->comprobarRol($usuario);

            if ($result) {
                echo "<h2>Logeado correctamente</h2>";
                $_SESSION['usuario'] = $usuario;
                if ($result2) {
                    echo "<h2>Es administrador</h2>";
                    $_SESSION['admin'] = true;
                    $_SESSION['login'] = true;
                    $this->pages->render('../index');

                } else {
                    echo "<h2>No es administrador</h2>";
                    $_SESSION['admin'] = false;
                    $_SESSION['login'] = true;
                    $this->pages->render('../index');
                }
            } else {
                $_SESSION['login'] = false;
                echo "<h2>Usuario o contraseña incorrectos</h2>";
                $this->pages->render('../index');

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

    public function borrar()
    {
        session_start();

        if (isset($_SESSION['login']) && $_SESSION['login']) {
            $usuario = $_SESSION['usuario'];
            $result = $this->usuarioService->borrar($usuario);
            if ($result) {
                echo "<h2>Usuario borrado correctamente</h2>";
                session_destroy();
                $this->pages->render('../index');
            } else {
                echo "<h2>Error al borrar el usuario</h2>";
            }
        } else {
            echo "<h2>Debes estar logeado para borrar tu usuario</h2>";
            $this->pages->render('../index');
        }


    }

    public function admin()
    {
        session_start();
        if (isset($_SESSION['login']) && $_SESSION['login']) {
            if (isset($_SESSION['admin']) && $_SESSION['admin']) {
                header('Location: indexAdmin.php');
            } else {
                echo "<h2>No eres administrador</h2>";
                $this->pages->render('../index');
            }
        } else {
            echo "<h2>Debes estar logeado para acceder a la pagina de administrador</h2>";
            $this->pages->render('../index');
        }
    }

    public function modificar()
    {
        session_start();
        if (isset($_SESSION['login']) && $_SESSION['login']) {
            if (isset($_POST)) {
                $usuario = $_SESSION['usuario'];
                $password = $_POST['password'];
                $rol = $_POST['rol'];
                $result = $this->usuarioService->modificar($usuario, $password, $rol);
                if ($result) {
                    echo "<h2>Usuario modificado correctamente</h2>";
                    $this->pages->render('../index');
                } else {
                    echo "<h2>Error al modificar el usuario</h2>";
                }
            }
        } else {
            echo "<h2>Debes estar logeado para modificar tus datos</h2>";
            $this->pages->render('../index');
        }
    }


}