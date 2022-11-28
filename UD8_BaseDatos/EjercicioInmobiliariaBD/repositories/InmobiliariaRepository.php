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

    public function alta($tipo, $zona, $direccion, $ndormitorios, $precio, $tamano, $extras, $foto, $observaciones)
    {
        $sql = "INSERT INTO lindavista.viviendas (tipo, zona, direccion, ndormitorios, precio, tamano, extras, foto, observaciones) VALUES (:tipo, :zona, :direccion, :ndormitorios, :precio, :tamano, :extras, :foto, :observaciones)";
        $stmt = $this->baseDatos->conexion->prepare($sql);
        $stmt->bindParam(":tipo", $tipo);
        $stmt->bindParam(":zona", $zona);
        $stmt->bindParam(":direccion", $direccion);
        $stmt->bindParam(":ndormitorios", $ndormitorios);
        $stmt->bindParam(":precio", $precio);
        $stmt->bindParam(":tamano", $tamano);
        $stmt->bindParam(":extras", $extras);
        $stmt->bindParam(":foto", $foto);
        $stmt->bindParam(":observaciones", $observaciones);
        try {
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }


}