<?php
namespace Controllers;
use Models\Paciente;
use Lib\Pages;

class PacienteController {
    private Paciente $paciente;
    private Pages $pages;

    public function __construct()
    {
        $this->paciente = new Paciente;
        $this->pages = new Pages;
    }

    public function mostrarTodos(){
        $todos_mis_pacientes = $this->paciente->getAll();
        $this->pages->render('paciente/mostrar_todos', ['todos_mis_pacientes' => $todos_mis_pacientes]);
    }
    public function buscarNombre(){
        $this->pages->render('paciente/form/buscarPaciente');
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $pacienteConNombre = $this->paciente->buscarPorNombre($_POST['nombre']);
            $this->pages->render('paciente/mostrarNombre', ['pacienteConNombre' => $pacienteConNombre]);

        }
    }

}