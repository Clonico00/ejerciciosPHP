<?php
namespace Models;

use Lib\BaseDatos;

class Paciente extends BaseDatos
{
    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $password;

    public function __construct($id, $nombre, $apellidos, $email, $password)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->password = $password;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellidos()
    {
        return $this->apellidos;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function insertar()
    {
        $sql = "INSERT INTO miclinica.pacientes (nombre, apellidos, correo, password) VALUES (:nombre, :apellidos, :email, :password)";
        $stmt = $this->prepare($sql);
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':apellidos', $this->apellidos);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
        $stmt->execute();
    }
    public function actualizar()
    {
        $sql = "UPDATE miclinica.pacientes SET nombre = :nombre, apellidos = :apellidos, correo = :email, password = :password WHERE id = :id";
        $stmt = $this->prepare($sql);
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':apellidos', $this->apellidos);
        $stmt->bindParam(':email', $this->email);
        $stmt ->bindParam(':password', $this->password);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
    }
    public function eliminar()
    {
        $sql = "DELETE FROM miclinica.pacientes WHERE id = :id";
        $stmt = $this->prepare($sql);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
    }
    public function consultar($conexion)
    {
        $sql = "SELECT * FROM miclinica.pacientes";
        $stmt = $conexion->prepare($sql);
        $stmt->execute();
        $pacientes = $stmt->fetchAll();
        return $pacientes;
    }
    public function consultarTodos()
    {
        $sql = "SELECT * FROM miclinica.pacientes";
        $conexion=$this->conectar();
        $stmt = $conexion->consultar($sql);
        $stmt->execute();
        $pacientes = $stmt->fetchAll();
        return $pacientes;
    }



}