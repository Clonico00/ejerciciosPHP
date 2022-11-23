<?php
namespace Repositories;
use Lib\BaseDatos;
use models\Doctor;

class DoctorRepository {
    private BaseDatos $baseDatos;

    public function __construct()
    {
        $this->baseDatos = new BaseDatos();
    }
    public function getAll():?array {
        $this->baseDatos->consulta("SELECT * FROM miclinica.doctores");
        return $this->extraer_todos();
    }

    private function extraer_registro(): ?Doctor {
        return ($doctor = $this->baseDatos->extraer_registro()) ? Doctor::fromArray($doctor) : null;
    }
    private function extraer_todos(): ?array {
        $doctores = [];
        $doctoresData = $this->baseDatos->extraer_todos();
        foreach ($doctoresData as $doctorData) {
            $doctores[] = Doctor::fromArray($doctorData);
        }
        return $doctores;
    }

}