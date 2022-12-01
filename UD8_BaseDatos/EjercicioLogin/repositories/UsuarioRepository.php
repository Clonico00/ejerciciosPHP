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
        $sql = "SELECT * FROM usuarios WHERE empresa.usuarios.nombre = :usuario";
        $consult = $this->baseDatos->conexion->prepare($sql);
        $consult->bindParam(':usuario', $usuario);
        if ($consult->execute()) {
            $result = $consult->fetch();
            if ($result) {
                if (password_verify($password, $result['clave'])) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function insert(Usuario $usuario): bool
    {
        $usere = $usuario->getUsuario();
        $password = $usuario->getPassword();

        $password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

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
    public function comprobarRol(string $usuario): bool
    {
        $sql = "SELECT * FROM usuarios WHERE empresa.usuarios.nombre = :usuario";
        $consult = $this->baseDatos->conexion->prepare($sql);
        $consult->bindParam(':usuario', $usuario);
        if ($consult->execute()) {
            $result = $consult->fetch();
            if ($result) {
                if ($result['rol'] == 1) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public function borrar(string $usuario): bool
    {
        $sql = "DELETE FROM usuarios WHERE empresa.usuarios.nombre = :usuario";
        $consult = $this->baseDatos->conexion->prepare($sql);
        $consult->bindParam(':usuario', $usuario);
        if ($consult->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function modificar(string $usuario,string $password,string $rol): bool
    {
        $password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);
        $sql = "UPDATE usuarios SET clave = :password,rol=:rol WHERE empresa.usuarios.nombre = :usuario";
        $consult = $this->baseDatos->conexion->prepare($sql);
        $consult->bindParam(':usuario', $usuario);
        $consult->bindParam(':password', $password);
        $consult->bindParam(':rol', $rol);
        if ($consult->execute()) {
            return true;
        } else {
            return false;
        }
    }


}