<?php
namespace Models;

use Lib\BaseDatos;
use PDOException;

class Usuario extends BaseDatos
{
    private $usuario;
    private $password;
    private $id;
    private $rol;

    public function __construct()
    {
        parent::__construct();
    }
    public function getUsuario()
    {
        return $this->usuario;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getRol()
    {
        return $this->rol;
    }
    public function setRol($rol)
    {
        $this->rol = $rol;
    }
    public static function fromArray(array $data) : Usuario
    {
        $usuario = new Usuario();
        $usuario->setId($data['codigo']);
        $usuario->setUsuario($data['nombre']);
        $usuario->setPassword($data['clave']);
        $usuario->setRol($data['rol']);
        return $usuario;
    }

}