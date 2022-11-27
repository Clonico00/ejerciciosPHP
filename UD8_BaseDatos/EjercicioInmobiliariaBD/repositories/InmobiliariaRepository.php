<?php
namespace Repositories;

use Lib\BaseDatos;
use models\Inmobiliaria;
use PDOException;

class InmobiliariaRepository
{
    private BaseDatos $baseDatos;

    public function __construct()
    {
        $this->baseDatos = new BaseDatos();
    }


}