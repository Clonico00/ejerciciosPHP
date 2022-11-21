<?php
namespace Controllers;
use Models\Paciente;

class PacienteController {
    private Paciente $paciente;

    public function __construct(Paciente $paciente)
    {
        $this->paciente = $paciente;
    }

    public function mostrarTodos(){
        $todos_mis_pacientes = $this->paciente->consultarTodos();
        require_once 'views/paciente/mostrar_todos.php';
    }

}