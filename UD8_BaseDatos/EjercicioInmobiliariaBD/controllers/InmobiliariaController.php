<?php
namespace Controllers;

use Lib\Pages;
use Services\InmobiliariaService;

class InmobiliariaController
{
    private InmobiliariaService $inmobiliariaService;
    private Pages $pages;

    public function __construct()
    {
        $this->inmobiliariaService = new InmobiliariaService();
        $this->pages = new Pages();
    }

    public function index()
    {
    }




}