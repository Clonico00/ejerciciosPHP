<?php
namespace Services;
use Repositories\InmobiliariaRepository;

class InmobiliariaService
{
    private $inmobiliariaRepository;

    public function __construct()
    {
        $this->inmobiliariaRepository = new InmobiliariaRepository();
    }
}