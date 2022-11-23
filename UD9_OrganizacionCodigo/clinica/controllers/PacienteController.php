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
        //require_once 'views/paciente/mostrar_todos.php';
    }
    public function buscarNombre(){
        //require_once 'views/paciente/form/buscarPaciente.php';
        $this->pages->render('paciente/form/buscarPaciente');
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //$nombre = $_POST['nombre'];
            //$pacientes = $this->paciente->buscarPorNombre($nombre);
           // require_once 'views/paciente/mostrarNombre.php';
            $pacienteConNombre = $this->paciente->buscarPorNombre($_POST['nombre']);
            $this->pages->render('paciente/mostrarNombre', ['pacienteConNombre' => $pacienteConNombre]);

        }
    }

}