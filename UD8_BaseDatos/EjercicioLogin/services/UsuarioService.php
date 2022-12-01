<?php

namespace Services;
use Models\Usuario;
use Repositories\UsuarioRepository;

class UsuarioService
{
    private $usuarioRepository;

    public function __construct()
    {
        $this->usuarioRepository = new UsuarioRepository();
    }
    public function login(string $usuario, string $password): bool
    {
        return $this->usuarioRepository->login($usuario, $password);
    }
    public function insert(string $user, string $password): bool
    {
        $usuario = new Usuario();
        $usuario->setUsuario($user);
        $usuario->setPassword($password);
        return $this->usuarioRepository->insert($usuario);
    }

    public function comprobarRol(string $usuario): bool
    {
        return $this->usuarioRepository->comprobarRol($usuario);
    }

    public function borrar(string $usuario): bool
    {
        return $this->usuarioRepository->borrar($usuario);
    }
    public function modificar(string $usuario,string $password,string $rol): bool
    {
        return $this->usuarioRepository->modificar($usuario,$password,$rol);
    }

}

