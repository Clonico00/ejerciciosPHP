<?php
namespace Models;

use Lib\BaseDatos;
use PDOException;

class Inmobiliaria extends BaseDatos
{
    private $id;
    private $tipo;
    private $zona;
    private $direccion;
    private $ndormitorios;
    private $precio;
    private $tamano;
    private $extras;
    private $foto;
    private $observaciones;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo): void
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getZona()
    {
        return $this->zona;
    }

    /**
     * @param mixed $zona
     */
    public function setZona($zona): void
    {
        $this->zona = $zona;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     */
    public function setDireccion($direccion): void
    {
        $this->direccion = $direccion;
    }

    /**
     * @return mixed
     */
    public function getNdormitorios()
    {
        return $this->ndormitorios;
    }

    /**
     * @param mixed $ndormitorios
     */
    public function setNdormitorios($ndormitorios): void
    {
        $this->ndormitorios = $ndormitorios;
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param mixed $precio
     */
    public function setPrecio($precio): void
    {
        $this->precio = $precio;
    }

    /**
     * @return mixed
     */
    public function getTamano()
    {
        return $this->tamano;
    }

    /**
     * @param mixed $tamano
     */
    public function setTamano($tamano): void
    {
        $this->tamano = $tamano;
    }

    /**
     * @return mixed
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * @param mixed $extras
     */
    public function setExtras($extras): void
    {
        $this->extras = $extras;
    }

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * @param mixed $foto
     */
    public function setFoto($foto): void
    {
        $this->foto = $foto;
    }

    /**
     * @return mixed
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * @param mixed $observaciones
     */
    public function setObservaciones($observaciones): void
    {
        $this->observaciones = $observaciones;
    }

    public function getViviendas()
    {
        $sql = "SELECT * FROM lindavista.viviendas";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
        $inmuebles = $stmt->fetchAll();
        return $inmuebles;
    }

    public function getVivienda($id)
    {
        $sql = "SELECT * FROM lindavista.viviendas WHERE id = :id";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $inmueble = $stmt->fetch();
        return $inmueble;
    }

    public function insertVivienda($tipo, $zona, $direccion, $ndormitorios, $precio, $tamano, $extras, $foto, $observaciones)
    {
        $sql = "INSERT INTO lindavista.viviendas (tipo, zona, direccion, ndormitorios, precio, tamano, extras, foto, observaciones) VALUES (:tipo, :zona, :direccion, :ndormitorios, :precio, :tamano, :extras, :foto, :observaciones)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(":tipo", $tipo);
        $stmt->bindParam(":zona", $zona);
        $stmt->bindParam(":direccion", $direccion);
        $stmt->bindParam(":ndormitorios", $ndormitorios);
        $stmt->bindParam(":precio", $precio);
        $stmt->bindParam(":tamano", $tamano);
        $stmt->bindParam(":extras", $extras);
        $stmt->bindParam(":foto", $foto);
        $stmt->bindParam(":observaciones", $observaciones);
        $stmt->execute();
    }

    public function updateVivienda($id, $tipo, $zona, $direccion, $ndormitorios, $precio, $tamano, $extras, $foto, $observaciones)
    {
        $sql = "UPDATE lindavista.viviendas SET tipo = :tipo, zona = :zona, direccion = :direccion, ndormitorios = :ndormitorios, precio = :precio, tamano = :tamano, extras = :extras, foto = :foto, observaciones = :observaciones WHERE id = :id";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":tipo", $tipo);
        $stmt->bindParam(":zona", $zona);
        $stmt->bindParam(":direccion", $direccion);
        $stmt->bindParam(":ndormitorios", $ndormitorios);
        $stmt->bindParam(":precio", $precio);
        $stmt->bindParam(":tamano", $tamano);
        $stmt->bindParam(":extras", $extras);
        $stmt->bindParam(":foto", $foto);
        $stmt->bindParam(":observaciones", $observaciones);
        $stmt->execute();
    }
}