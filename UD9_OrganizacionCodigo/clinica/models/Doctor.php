<?php
namespace models;
class Doctor
{
    private $id;
    private $nombre;
    private $apellidos;
    private $telefono;
    private $especialidad;
    public function __construct($id, $nombre, $apellidos, $telefono, $especialidad)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->telefono = $telefono;
        $this->especialidad = $especialidad;
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
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function getEspecialidad()
    {
        return $this->especialidad;
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
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;
    }
}