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

    public function alta($tipo, $zona, $direccion, $ndormitorios, $precio, $tamano, $extras, $foto, $observaciones)
    {
        return $this->inmobiliariaRepository->alta($tipo, $zona, $direccion, $ndormitorios, $precio, $tamano, $extras, $foto, $observaciones);
    }
}