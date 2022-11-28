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

    public function alta()
    {
        if (isset($_POST)) {
            $tipo = $_POST['tipo'];
            $zona = $_POST['zona'];
            $direccion = $_POST['direccion'];
            $ndormitorios = $_POST['ndormitorios'];
            $precio = $_POST['precio'];
            $tamano = $_POST['tamano'];
            $extras = $_POST['extras'];
            $foto = $_POST['foto'];
            $observaciones = $_POST['observaciones'];
            $result = $this->inmobiliariaService->alta($tipo, $zona, $direccion, $ndormitorios, $precio, $tamano, $extras, $foto, $observaciones);
            if ($result) {
                $_SESSION['alta'] = true;
                echo "<h2>Alta correcta</h2>";
                header("Location: index.php");
            } else {
                $_SESSION['alta'] = false;
            }
        }
    }




}