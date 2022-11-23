<?php

namespace Controllers;
use Lib\Pages;
use Services\DoctorService;

class DoctorController
{
    private DoctorService $doctorService;
    private Pages $pages;

    public function __construct()
    {
        $this->doctorService = new DoctorService();
        $this->pages = new Pages();
    }
    public function listar():void
    {
        $doctores = $this->doctorService->getAll();
        $this->pages->render('doctor/listar', ['doctores' => $doctores]);
    }
    public function registro():void
    {
        $this->pages->render('doctor/registrodoctor');
    }

    public function save(){
        $doctor = $_POST['data'];
        $this->doctorService->registro($doctor);
    }


}