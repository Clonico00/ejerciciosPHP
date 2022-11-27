<?php

namespace Services;
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


}

