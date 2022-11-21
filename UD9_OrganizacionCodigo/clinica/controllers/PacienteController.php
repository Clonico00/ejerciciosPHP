<?php
namespace Controllers;
use Models\Paciente;

class PacienteController {
    private Paciente $paciente;

    public function __construct()
    {
        $this->paciente = new Paciente;
    }

    public function mostrarTodos(){
        $todos_mis_pacientes = $this->paciente->getAll();
        require_once 'views/paciente/mostrar_todos.php';
    }

}