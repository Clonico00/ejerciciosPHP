<?php
namespace Repositories;

use Lib\BaseDatos;
use models\Usuario;
use PDOException;

class UsuarioRepository
{
    private BaseDatos $baseDatos;

    public function __construct()
    {
        $this->baseDatos = new BaseDatos();
    }
    public function login(string $usuario, string $password): bool
    {
        $sql = "SELECT * FROM usuarios WHERE empresa.usuarios.nombre = :usuario AND empresa.usuarios.clave = :clave";
        $consult = $this->baseDatos->conexion->prepare($sql);
        $consult->bindParam(':usuario', $usuario);
        $consult->bindParam(':clave', $password);
        if ($consult->execute()) {
            $result = $consult->fetch();
            if ($result) {
                return true;
            } else {
                return false;
            }
        }else{
            return false;
        }
    }

    public function insert(Usuario $usuario): bool
    {
        $usere = $usuario->getUsuario();
        $password = $usuario->getPassword();

        $sql = "INSERT INTO usuarios (nombre, clave) VALUES (:nombre, :clave)";
        $consult = $this->baseDatos->conexion->prepare($sql);
        $consult->bindParam(':nombre', $usere);
        $consult->bindParam(':clave', $password);
        if ($consult->execute()) {
            return true;
        } else {
            return false;
        }
    }



}