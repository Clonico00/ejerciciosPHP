<?php

namespace Repositories;

use Lib\BaseDatos;
use models\Doctor;
use PDOException;

class DoctorRepository
{
    private BaseDatos $baseDatos;

    public function __construct()
    {
        $this->baseDatos = new BaseDatos();
    }

    public function getAll(): ?array
    {
        $this->baseDatos->consulta("SELECT * FROM miclinica.doctores");
        return $this->extraer_todos();
    }

    private function extraer_registro(): ?Doctor
    {
        return ($doctor = $this->baseDatos->extraer_registro()) ? Doctor::fromArray($doctor) : null;
    }

    private function extraer_todos(): ?array
    {
        $doctores = [];
        $doctoresData = $this->baseDatos->extraer_todos();
        foreach ($doctoresData as $doctorData) {
            $doctores[] = Doctor::fromArray($doctorData);
        }
        return $doctores;
    }

    private function extraer_registro_array(): ?array
    {
        return $this->baseDatos->extraer_registro();
    }

    public function registro(array $doctor): void
    {
        try {

            $sql = "INSERT INTO miclinica.doctores (nombre, apellidos, telefono, especialidad) VALUES (:nombre, :apellidos, :telefono, :especialidad)";
            $consult = $this->baseDatos->conexion->prepare($sql);
            $consult->bindParam(':nombre', $doctor['nombre']);
            $consult->bindParam(':apellidos', $doctor['apellidos']);
            $consult->bindParam(':telefono', $doctor['telefono']);
            $consult->bindParam(':especialidad', $doctor['especialidad']);

            if ($consult->execute()) {
                header('Location: indexFrontController.php?controller=Doctor&action=listar');
            } else {
                echo "Error al registrar el doctor";
            }


        } catch (PDOException $e) {
            echo $e->getMessage();
        }


    }

}