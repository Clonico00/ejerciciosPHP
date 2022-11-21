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



    public function __construct()
    {
        parent::__construct();
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
    public function getAll(): ?array{
        $this->consulta("SELECT * FROM miclinica.pacientes");
        return $this->extraer_todos();
    }



}